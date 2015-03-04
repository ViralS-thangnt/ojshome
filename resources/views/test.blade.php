<!-- test -->
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
	<h1> This is main content</h1>
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

@section('custom-menu')
<ul class="sidebar-menu">
	<li class="treeview">
        <a href="#">
            <i class="fa fa-briefcase"></i>
            <span>Tác giả</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Tac gia</a></li>
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Flot</a></li>
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-thumbs-up"></i>
            <span>Phản biện</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> General</a></li>
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Icons</a></li>
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-edit"></i> <span>Biên tập</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Editors</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-table"></i> <span>Xuất bản</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
            <li><a href="#" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
        </ul>
    </li>
</ul>
@stop

