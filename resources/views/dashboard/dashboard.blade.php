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
<div class="row" style="margin: 15px">
	<!-- This is demo for dashboard -->
    @if(in_array(AUTHOR, $permissions))
	   {!! Form::dashboard_item(ICON_PEOPLE, COLOR_AQUA, url('show/author'), 'Tác giả', 30); !!}
    @endif

    @if(in_array(REVIEWER, $permissions))
        {!! Form::dashboard_item(ICON_CHATBOX, COLOR_RED, url('show/response'), 'Phản biện', 150); !!}
    @endif

    @if(Constant::has_permission([CHIEF_EDITOR, MANAGING_EDITOR, SCREENING_EDITOR, SECTION_EDITOR, COPY_EDITOR, LAYOUT_EDITOR], $permissions))
        {!! Form::dashboard_item(ICON_DOCUMENT_TEXT, COLOR_YELLOW, url('show/editor'), 'Biên tập', 77); !!}
    @endif
    
    @if(in_array(CHIEF_EDITOR, $permissions))
        {!! Form::dashboard_item(ICON_STORAGE, COLOR_GREEN, url('show/publish'), 'Xuất bản', 14); !!}
    @endif

</div>
<!-- ion-android-star -->
<!-- ion-document-text -->
<!-- ion-android-promotion -->
<!-- ion-android-system-home -->
<!-- ion-pie-graph -->
<!-- ion-stats-bars -->

<div class="box box-primary padding-box">


    @if(in_array(AUTHOR, $permissions))
        {!! Form::title_box_header('Tác giả') !!}

        {!! Form::ul_custom(
                [
                    'Gửi bản thảo mới', 
                    'Bản thảo chưa gửi', 
                    'Bản thảo đang sơ loại', 
                    'Bản thảo đang bình duyệt',
                    'Bản thảo đang biên tập',
                    'Bản thảo rút nộp',
                    'Bản thảo bị từ chối',
                    'Bản thảo xuất bản',
                    'Tất cả các bản thảo'
                    ], 
                [
                    '#', 
                    '#', 
                    '#', 
                    '#',
                    '#',
                    '#', 
                    '#', 
                    '#', 
                    '#'
                    ]) !!}

    @elseif(in_array(MANAGING_EDITOR, $permissions))
        {!! Form::title_box_header('Thư ký toà soạn') !!}

        {!! Form::ul_custom(
                [
                    'Sơ loại', 
                    'Bình duyệt', 
                    'Biên tập', 
                    'Bản thảo bị từ chối',
                    'Bản thảo rút nộp',
                    'Bản thảo xuất bản',
                    'Tất cả các bản thảo'
                    ], 
                [
                    '#', 
                    '#', 
                    '#', 
                    '#',
                    '#',
                    '#', 
                    '#'
                    ]) !!}

    @elseif(in_array(SCREENING_EDITOR, $permissions))
        {!! Form::title_box_header('Biên tập viên sơ loại') !!}

        {!! Form::ul_custom(
                [
                    'Sơ loại', 
                    ], 
                [
                    '#'
                    ]) !!}

    @elseif(in_array(SECTION_EDITOR, $permissions))
        {!! Form::title_box_header('Biên tập viên chuyên trách') !!}

        {!! Form::ul_custom(
                [
                    'Bình duyệt', 
                    'Biên tập', 
                    'Bản thảo bị từ chối', 
                    'Bản thảo rút nộp',
                    'Bản thảo xuất bản',
                    'Tất cả các bản thảo'
                    ], 
                [
                    '#', 
                    '#', 
                    '#', 
                    '#',
                    '#',
                    '#'
                    ]) !!}

    @elseif(in_array(CHIEF_EDITOR, $permissions))
        {!! Form::title_box_header('Tổng biên tập') !!}

        {!! Form::ul_custom(
                [
                    'Sơ loại', 
                    'Bình duyệt', 
                    'Biên tập', 
                    'Bản thảo rút nộp',
                    'Bản thảo bị từ chối',
                    'Bản thảo xuất bản',
                    'Tất cả các bản thảo'
                    ], 
                [
                    '#', 
                    '#', 
                    '#', 
                    '#',
                    '#',
                    '#', 
                    '#'
                    ]) !!}

    @elseif(in_array(COPY_EDITOR, $permissions))
        {!! Form::title_box_header('Biên tập viên bản thảo') !!}

        {!! Form::ul_custom(
                [
                    'Biên tập', 
                    'Bản thảo xuất bản',
                    'Tất cả các bản thảo'
                    ], 
                [
                    '#', 
                    '#', 
                    '#'
                    ]) !!}

    @elseif(in_array(LAYOUT_EDITOR, $permissions))
        {!! Form::title_box_header('Biên tập viên chế bản') !!}

        {!! Form::ul_custom(
                [
                    'Biên tập', 
                    'Bản thảo xuất bản',
                    'Tất cả các bản thảo'
                    ], 
                [
                    '#', 
                    '#', 
                    '#'
                    ]) !!}

    @elseif(in_array(REVIEWER, $permissions))
        {!! Form::title_box_header('Nhà phản biện') !!}

        {!! Form::ul_custom(
                [
                    'Bản thảo chờ phản biện', 
                    'Bản thảo đã phản biện', 
                    'Bản thảo không nhận phản biện',
                    ], 
                [
                    '#', 
                    '#', 
                    '#'
                    ]) !!}

<!--  -->
    @elseif(in_array(PRODUCTION_EDITOR, $permissions))
        {!! Form::title_box_header('Thư ký toà soạn') !!}

        {!! Form::ul_custom(
                [
                    'Gửi bản thảo mới', 
                    'Bản thảo chưa gửi', 
                    'Bản thảo đang sơ loại', 
                    'Bản thảo đang bình duyệt',
                    'Bản thảo đang biên tập',
                    'Bản thảo rút nộp',
                    'Bản thảo bị từ chối',
                    'Bản thảo xuất bản',
                    'Tất cả các bản thảo'
                    ], 
                [
                    '#', 
                    '#', 
                    '#', 
                    '#',
                    '#',
                    '#', 
                    '#', 
                    '#', 
                    '#'
                    ]) !!}

    @elseif(in_array(ADMIN, $permissions))
        {!! Form::title_box_header('Thư ký toà soạn') !!}

        {!! Form::ul_custom(
                [
                    'Gửi bản thảo mới', 
                    'Bản thảo chưa gửi', 
                    'Bản thảo đang sơ loại', 
                    'Bản thảo đang bình duyệt',
                    'Bản thảo đang biên tập',
                    'Bản thảo rút nộp',
                    'Bản thảo bị từ chối',
                    'Bản thảo xuất bản',
                    'Tất cả các bản thảo'
                    ], 
                [
                    '#', 
                    '#', 
                    '#', 
                    '#',
                    '#',
                    '#', 
                    '#', 
                    '#', 
                    '#'
                    ]) !!}

    @endif



</div><!-- /.box-body -->
@stop




