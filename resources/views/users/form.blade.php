@extends('layout.master.master')
<!-- Page Title -->
@section('title')

@if($id)
    {!! 'Edit User' !!}
@else 
    {!! 'Create New User' !!}
@endif 

@stop

<!-- Main content -->
@section('content')
    
{!! Form::model($user, ['route' => ['user.update', $id]]) !!}
    {!! ErrorDisplay::getInstance()->DisplayAll($errors) !!}

    {!! input_text('username', 'Name') !!}

    {!! Form::submit('submit') !!}

{!! Form::close() !!}

@stop
