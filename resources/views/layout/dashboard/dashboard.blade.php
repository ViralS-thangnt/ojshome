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
	{!! create_dashboard_item(ICON_PEOPLE, 'bg-aqua', url('show/author'), 'Tác giả', 30) !!}

    {!! create_dashboard_item('ion-ios7-chatboxes', 'bg-red', url('show/response'), 'Phản biện', 150); !!}
    {!! create_dashboard_item('ion-document-text', 'bg-yellow', 'editor', 'Biên tập', 77); !!}
    {!! create_dashboard_item('ion-android-storage', 'bg-green', 'response', 'Xuất bản', 14); !!}
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
@section('user-welcome')
	<p>Hello, Thang</p>
	<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
@stop


