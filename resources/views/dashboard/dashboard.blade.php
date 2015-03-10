<!-- dashboard.blade.php -->
@extends('layout.master.master')

<!-- Header Title -->
@section('title-page-admin')

Journal Open Source

@stop

<!-- Header Image -->
@section('user-avatar-header')

{!! Form::image_custom('img/avatar3.png', 'Your Image', IMAGE_CIRCLE) !!}

@stop


<!-- Navigation Link -->
@section('navigation-link')
	<!-- Demo Test -->
	<!-- {!! Form::navigate_link(ICON_MENU_SEARCH, 
									['Trang chủ','Editor', 'Gửi bài mới'], 
									[url('/admin'), url('/admin/editor'), url('/admin/new-manuscript')]) !!} -->

	{!! Form::navigate_link(ICON_MENU_DASHBOARD) !!}
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

Trang chủ

@stop

<!-- Page Title Extra -->
@section('title-extra')

<!-- More extra - Page Title  -->

@stop

<!-- Main content -->
@section('content')
{!! Form::div_open('row', 'margin-box-input') !!}

	<!-- This is demo for dashboard -->

	   {!! Form::dashboard_item(ICON_PEOPLE, COLOR_AQUA, url('admin/user-dashboard'), 'Tác giả', 30); !!}



		{!! Form::dashboard_item(ICON_CHATBOX, COLOR_RED, url('admin/user-dashboard'), 'Phản biện', 150); !!}


		{!! Form::dashboard_item(ICON_DOCUMENT_TEXT, COLOR_YELLOW, url('admin/user-dashboard'), 'Biên tập', 77); !!}

	

		{!! Form::dashboard_item(ICON_STORAGE, COLOR_GREEN, url('admin/user-dashboard'), 'Xuất bản', 14); !!}


{!! Form::div_close() !!}
<!-- ion-android-star -->
<!-- ion-document-text -->
<!-- ion-android-promotion -->
<!-- ion-android-system-home -->
<!-- ion-pie-graph -->
<!-- ion-stats-bars -->

@stop



