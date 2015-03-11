<!-- manuscript_in_review.php -->
@extends('layout.master.master')
<!-- Header Title -->
@section('title-page-admin')
<!-- Tác giả -->
<!-- Journal Open Source -->
Bản thảo
<!-- {!! Lang::get('manuscript_in_review.title_page_admin') !!} -->

@stop

<!-- Header Image -->
@section('user-avatar-header')

{!! Form::image_custom('img/avatar3.png', 'Your Image', IMAGE_CIRCLE) !!}

@stop


<!-- Navigation Link -->
@section('navigation-link')
	
	<!-- {!! Form::navigate_link(ICON_DOCUMENT_TEXT, 
							['Bản thảo', 'Bản thảo đang bình duyệt'],
							[ url('admin/'), url('admin/manuscript-in-review')]) !!} -->
@stop


<!-- Welcome user -->
@section('avatar-user')

	{!! Form::image_custom('img/avatar3.png', 'User Image', IMAGE_CIRCLE) !!}

@stop

@section('user-welcome')
	<p>Hello, Thang</p>
	<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
@stop


<!-- Page Title -->
@section('title')
	Bản thảo đang bình duyệt
	

@stop

<!-- Page Title Extra -->
@section('title-extra')

<!-- More extra - Page Title  -->

@stop



@section('content')
	

<!-- DATA TABES SCRIPT -->
<script src="{{ url('assets/js/plugins/datatables/jquery.dataTables.js') }} " type="text/javascript"></script>

<script src="{{ url('assets/js/plugins/datatables/dataTables.bootstrap.js') }}" type="text/javascript"></script>

<!-- DATA TABLES -->
<link href="{{ url('assets/css/datatables/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />

<script type="text/javascript">
    $(function() {
        $('#table_data').dataTable({
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": true
        });
    });
</script>

<div class="box">
<div class="box-header">
	<h3 class="box-title">Data Table With Full Features</h3>
</div><!-- /.box-header -->
<div class="box-body table-responsive">
	<div id="table_data_wrapper" class="dataTables_wrapper form-inline" role="grid">
		

		<!-- Table -->
		<table id="table_data" class="table table-bordered table-striped dataTable" aria-describedby="table_data_info">
		<thead>
			<tr role="row">
				<th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1" style="width: 162px;" aria-label="Rendering engine: activate to sort column ascending">ID</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1" style="width: 162px;" aria-label="Rendering engine: activate to sort column ascending">Ngày gửi </th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1" style="width: 235px;" aria-label="Browser: activate to sort column ascending">Tên bài</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1" style="width: 210px;" aria-sort="descending" aria-label="Platform(s): activate to sort column ascending">Tác giả liên hệ</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1" style="width: 138px;" aria-label="Engine version: activate to sort column ascending">Tiến trình</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1" style="width: 98px;" aria-label="CSS grade: activate to sort column ascending">Quyết định của ban biên tập</th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<th rowspan="1" colspan="1">ID</th>
				<th rowspan="1" colspan="1">Ngày gửi </th>
				<th rowspan="1" colspan="1">Tên bài</th>
				<th rowspan="1" colspan="1">Tác giả liên hệ</th>
				<th rowspan="1" colspan="1">Tiến trình</th>
				<th rowspan="1" colspan="1">Quyết định của ban biên tập</th>
			</tr>
		</tfoot>
		<tbody role="alert" aria-live="polite" aria-relevant="all">
			
			{{ $temp = true }}
			@foreach($data as $row)
				<tr class="odd">
					<td class=" sorting_1">{{ $row->id }}</td>
					<td class="">{{ $row->created_at }}</td>
					<td class="">{{ $row->name }}</td>
					<td class="">{{ $row->last_name }}</td>
					<td class="">{{ $row->id }}</td>
					<td class="">{{ $row->id }}</td>
				</tr>

			@endforeach


		</tbody>
		</table>

	

	</div><!-- example1_wrapper -->

</div><!-- /.box-body -->
</div>





@stop