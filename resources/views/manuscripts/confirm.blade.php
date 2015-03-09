<!-- confirm.blade.php -->
@extends('layout.master.master')
<!-- Header Title -->
@section('title-page-admin')
Tác giả
<!-- Journal Open Source -->

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

Thông tin tác giả

@stop

<!-- Page Title Extra -->
@section('title-extra')

<!-- More extra - Page Title  -->

@stop



@section('content')

{!! $data['_token'] !!}

{!! Form::div_open('box box-primary') !!}
	
	<!-- box-header -->
	{!! Form::div_open('box-header') !!}
		{!! Form::h_custom(3, 'Thông tin bản thảo', 'box-title') !!}
	{!! Form::div_close() !!}<!-- /.box-header -->

	


{!! Form::div_close() !!}<!-- /.box box-primary -->


@stop