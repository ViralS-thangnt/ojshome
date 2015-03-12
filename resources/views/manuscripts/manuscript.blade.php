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
	<h3 class="box-title">Thông tin các bản thảo</h3>
</div><!-- /.box-header -->
<div class="box-body table-responsive">
	<div id="table_data_wrapper" class="dataTables_wrapper form-inline" role="grid">
		

		<!-- Table -->
		<table id="table_data" class="table table-bordered table-striped dataTable" aria-describedby="table_data_info">
		<thead>
			<tr role="row">
				<th class="sorting_asc center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">ID</th>
				<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Ngày gửi </th>
				<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Tên bài</th>
				<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Tác giả liên hệ</th>
				<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Tiến trình</th>
				
				@if($permission == AUTHOR)
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1" >Quyết định của ban biên tập</th>
				@endif

				@if($permission == MANAGING_EDITOR)
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Phản biện</th>
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Biên tập viên chuyên trách</th>
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Quyết định của tổng biên tập</th>
				@endif

				@if($permission == SECTION_EDITOR)
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Phản biện</th>
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Thông báo Tổng biên tập</th>
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Quyết định của tổng biên tập</th>
				@endif
				
				@if($permission == CHIEF_EDITOR)
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Phản biện</th>
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Biên tập viên chuyên trách</th>
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Thông báo Tổng biên tập</th>
					<th class="sorting center" role="columnheader" tabindex="0" aria-controls="table_data" rowspan="1" colspan="1">Quyết định của tổng biên tập</th>
				@endif

				<th class="center" tabindex="0" rowspan="1" colspan="1">Chi tiết</th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<th rowspan="1" colspan="1" class="center">ID</th>
				<th rowspan="1" colspan="1" class="center">Ngày gửi </th>
				<th rowspan="1" colspan="1" class="center">Tên bài</th>
				<th rowspan="1" colspan="1" class="center">Tác giả liên hệ</th>
				<th rowspan="1" colspan="1" class="center">Tiến trình</th>
				@if($permission == AUTHOR)
					<th rowspan="1" colspan="1" class="center">Quyết định của ban biên tập</th>
				@endif

				@if($permission == MANAGING_EDITOR)
					<th rowspan="1" colspan="1" class="center">Phản biện</th>
					<th rowspan="1" colspan="1" class="center">Biên tập viên chuyên trách</th>
					<th rowspan="1" colspan="1" class="center">Quyết định của tổng biên tập</th>
				@endif

				@if($permission == SECTION_EDITOR)
					<th rowspan="1" colspan="1" class="center">Phản biện</th>
					<th rowspan="1" colspan="1" class="center">Thông báo Tổng biên tập</th>
					<th rowspan="1" colspan="1" class="center">Quyết định của tổng biên tập</th>
				@endif

				@if($permission == CHIEF_EDITOR)
					<th rowspan="1" colspan="1" class="center">Phản biện</th>
					<th rowspan="1" colspan="1" class="center">Biên tập viên chuyên trách</th>
					<th rowspan="1" colspan="1" class="center">Thông báo Tổng biên tập</th>
					<th rowspan="1" colspan="1" class="center">Quyết định của tổng biên tập</th>
				@endif

				<th rowspan="1" colspan="1" class="center">Chi tiết</th>
			</tr>
		</tfoot>
		<tbody role="alert" aria-live="polite" aria-relevant="all">

			@foreach($data as $row)

				<tr class="{{ ($is_odd) ? 'odd' : 'even' }}">
					<td class=" sorting_1 center">{{ $row->id }}</td>
					<td class="center">{{ $row->send_at }}</td>
					<td class="center">{{ $row->name }}</td>
					<td class="center">{{ $row->last_name }}</td>
					<td class="center">Bình duyệt vòng \ {{ $row->round_no_review }}</td>
					@if($permission == AUTHOR)
						<td class="center">{{ empty($row->round_decide_editor) ? '-' : $row->round_decide_editor }}</td>
					@endif

					@if($permission == MANAGING_EDITOR)
						<td class="center">{{ empty($row->reviewer) ? '-' : $row->reviewer }}</td>
						<td class="center">{{ empty($row->section_editor) ? '-' : $row->section_editor }}</td>
						<td class="center">{{ empty($row->round_decide_chief_editor) ? '-' : $row->round_decide_chief_editor }}</td>
					@endif

					@if($permission == SECTION_EDITOR)
						<td class="center">{{ empty($row->reviewer) ? '-' : $row->reviewer }}</td>
						<td class="center">{{ empty($row->notify_chief_editor) ? '-' : $row->notify_chief_editor }}</td>
						<td class="center">{{ empty($row->round_decide_chief_editor) ? '-' : $row->round_decide_chief_editor }}</td>
					@endif

					@if($permission == CHIEF_EDITOR)
						<td class="center">{{ empty($row->reviewer) ? '-' : $row->reviewer }}</td>
						<td class="center">{{ empty($row->section_editor) ? '-' : $row->section_editor }}</td>
						<td class="center">{{ empty($row->notify_chief_editor) ? '-' : $row->notify_chief_editor }}</td>
						<td class="center">{{ empty($row->round_decide_chief_editor) ? '-' : $row->round_decide_chief_editor }}</td>
					@endif

					<td class="center"><a href = "{{ url('admin/manuscript/form/' . $row->id) }}"> Xem thêm </a></td>
				</tr>

			@endforeach

		</tbody>
		</table>

	</div><!-- datatable_wrapper -->

</div><!-- /.box-body -->
</div>





@stop