<!-- dashboard.blade.php -->
@extends('layout.master.master')

<!-- Header Title -->
@section('title-page-admin')

Journal Open Source

@stop

<!-- Page Title -->
@section('title')
Main Page

@stop

<!-- Page Title Extra -->
@section('title-extra')

More extra - Page Title 

@stop

<!-- Main content -->
@section('content')
<div class="row" style="margin: 15px">
	<!-- This is demo for dashboard -->
    @if(in_array(AUTHOR, $permissions))
	   {!! create_dashboard_item(ICON_PEOPLE, COLOR_AQUA, url('show/author'), 'Tác giả', 30); !!}
    @endif

    @if(in_array(REVIEWER, $permissions))
        {!! create_dashboard_item(ICON_CHATBOX, COLOR_RED, url('show/response'), 'Phản biện', 150); !!}
    @endif

    @if(Constant::has_permission([CHIEF_EDITOR, MANAGING_EDITOR, SCREENING_EDITOR, SECTION_EDITOR, COPY_EDITOR, LAYOUT_EDITOR], $permissions))
        {!! create_dashboard_item(ICON_DOCUMENT_TEXT, COLOR_YELLOW, 'editor', 'Biên tập', 77); !!}
    @endif
    
    @if(in_array(CHIEF_EDITOR, $permissions))
        {!! create_dashboard_item(ICON_STORAGE, COLOR_GREEN, 'response', 'Xuất bản', 14); !!}
    @endif

    
</div>
<!-- ion-android-star -->
<!-- ion-document-text -->
<!-- ion-android-promotion -->
<!-- ion-android-system-home -->
<!-- ion-pie-graph -->
<!-- ion-stats-bars -->
@stop

<!-- Navigation Link -->
@section('navigation-link')

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Editor</a></li>
    <li class="active">Main Page</li>
</ol>

@stop


<!-- Welcome user -->
@section('avatar-user')
    <img src="img/avatar3.png" class="img-circle" alt="User Image">
@stop

@section('user-welcome')
	<p>Hello, Thang</p>
	<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
@stop


