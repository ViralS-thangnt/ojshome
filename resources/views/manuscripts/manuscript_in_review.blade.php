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
        $('#example1').dataTable({
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
	<div id="example1_wrapper" class="dataTables_wrapper form-inline" role="grid">
		

		<!-- Table -->
		<table id="example1" class="table table-bordered table-striped dataTable" aria-describedby="example1_info">
		<thead>
			<tr role="row">
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 162px;" aria-label="Rendering engine: activate to sort column ascending">Rendering engine</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 235px;" aria-label="Browser: activate to sort column ascending">Browser</th>
				<th class="sorting_desc" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 210px;" aria-sort="descending" aria-label="Platform(s): activate to sort column ascending">Platform(s)</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 138px;" aria-label="Engine version: activate to sort column ascending">Engine version</th>
				<th class="sorting" role="columnheader" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" style="width: 98px;" aria-label="CSS grade: activate to sort column ascending">CSS grade</th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<th rowspan="1" colspan="1">Rendering engine</th>
				<th rowspan="1" colspan="1">Browser</th>
				<th rowspan="1" colspan="1">Platform(s)</th>
				<th rowspan="1" colspan="1">Engine version</th>
				<th rowspan="1" colspan="1">CSS grade</th>
			</tr>
		</tfoot>
			<tbody role="alert" aria-live="polite" aria-relevant="all">
				<tr class="odd">
					<td class="">Misc</td>
					<td class=" ">IE Mobile</td>
					<td class=" sorting_1">Windows Mobile 6</td>
					<td class="">-</td>
					<td class="">C</td>
				</tr><tr class="even">
					<td class="">Trident</td>
					<td class=" ">Internet Explorer 7</td>
					<td class=" sorting_1">Win XP SP2+</td>
					<td class="">7</td>
					<td class="">A</td>
				</tr><tr class="odd">
					<td class="">Trident</td>
					<td class=" ">AOL browser (AOL desktop)</td>
					<td class=" sorting_1">Win XP</td>
					<td class="">6</td>
					<td class="">A</td>
				</tr><tr class="even">
					<td class="">Gecko</td>
					<td class=" ">Netscape Browser 8</td>
					<td class=" sorting_1">Win 98SE+</td>
					<td class="">1.7</td>
					<td class="">A</td>
				</tr><tr class="odd">
					<td class="">Gecko</td>
					<td class=" ">Firefox 1.5</td>
					<td class=" sorting_1">Win 98+ / OSX.2+</td>
					<td class="">1.8</td>
					<td class="">A</td>
				</tr><tr class="even">
					<td class="">Gecko</td>
					<td class=" ">Firefox 2.0</td>
					<td class=" sorting_1">Win 98+ / OSX.2+</td>
					<td class="">1.8</td>
					<td class="">A</td>
				</tr><tr class="odd">
					<td class="">Gecko</td>
					<td class=" ">Netscape Navigator 9</td>
					<td class=" sorting_1">Win 98+ / OSX.2+</td>
					<td class="">1.8</td>
					<td class="">A</td>
				</tr><tr class="even">
					<td class="">Gecko</td>
					<td class=" ">Seamonkey 1.1</td>
					<td class=" sorting_1">Win 98+ / OSX.2+</td>
					<td class="">1.8</td>
					<td class="">A</td>
				</tr><tr class="odd">
					<td class="">Gecko</td>
					<td class=" ">Firefox 1.0</td>
					<td class=" sorting_1">Win 98+ / OSX.2+</td>
					<td class="">1.7</td>
					<td class="">A</td>
				</tr><tr class="even">
					<td class="">Gecko</td>
					<td class=" ">Mozilla 1.8</td>
					<td class=" sorting_1">Win 98+ / OSX.1+</td>
					<td class="">1.8</td>
					<td class="">A</td>
				</tr>
				<tr class="odd">
					<td class="">Misc</td>
					<td class=" ">IE Mobile</td>
					<td class=" sorting_1">Windows Mobile 6</td>
					<td class="">-</td>
					<td class="">C</td>
				</tr><tr class="even">
					<td class="">Trident</td>
					<td class=" ">Internet Explorer 7</td>
					<td class=" sorting_1">Win XP SP2+</td>
					<td class="">7</td>
					<td class="">A</td>
				</tr><tr class="odd">
					<td class="">Trident</td>
					<td class=" ">AOL browser (AOL desktop)</td>
					<td class=" sorting_1">Win XP</td>
					<td class="">6</td>
					<td class="">A</td>
				</tr><tr class="even">
					<td class="">Gecko</td>
					<td class=" ">Netscape Browser 8</td>
					<td class=" sorting_1">Win 98SE+</td>
					<td class="">1.7</td>
					<td class="">A</td>
				</tr><tr class="odd">
					<td class="">Gecko</td>
					<td class=" ">Firefox 1.5</td>
					<td class=" sorting_1">Win 98+ / OSX.2+</td>
					<td class="">1.8</td>
					<td class="">A</td>
				</tr><tr class="even">
					<td class="">Gecko</td>
					<td class=" ">Firefox 2.0</td>
					<td class=" sorting_1">Win 98+ / OSX.2+</td>
					<td class="">1.8</td>
					<td class="">A</td>
				</tr><tr class="odd">
					<td class="">Gecko</td>
					<td class=" ">Netscape Navigator 9</td>
					<td class=" sorting_1">Win 98+ / OSX.2+</td>
					<td class="">1.8</td>
					<td class="">A</td>
				</tr><tr class="even">
					<td class="">Gecko</td>
					<td class=" ">Seamonkey 1.1</td>
					<td class=" sorting_1">Win 98+ / OSX.2+</td>
					<td class="">1.8</td>
					<td class="">A</td>
				</tr><tr class="odd">
					<td class="">Gecko</td>
					<td class=" ">Firefox 1.0</td>
					<td class=" sorting_1">Win 98+ / OSX.2+</td>
					<td class="">1.7</td>
					<td class="">A</td>
				</tr><tr class="even">
					<td class="">Gecko</td>
					<td class=" ">Mozilla 1.8</td>
					<td class=" sorting_1">Win 98+ / OSX.1+</td>
					<td class="">1.8</td>
					<td class="">A</td>
				</tr>

			</tbody>
			</table>

	

	</div><!-- example1_wrapper -->

</div><!-- /.box-body -->
</div>





@stop