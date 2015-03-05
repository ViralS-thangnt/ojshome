@extends('layout.master.master')
<!-- Page Title -->
@section('title')
Create New User
@stop

<!-- Welcome user -->
@section('user-welcome')
    <p>Hello, Thang</p>
    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
@stop

@section('custom-menu')

    <?php echo create_menu_item('Menu 1', 4, ['a', 'b', 'c', 'd'], ['#', 'fjkl', 'fkdlowoo', '48782']) ?>

    
@stop

<!-- Main content -->
@section('content')
    
@stop

<!-- Navigation Link -->
@section('navigation-link')

<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Editor</a></li>
    <li class="active">Main Page</li>
</ol>

@stop
