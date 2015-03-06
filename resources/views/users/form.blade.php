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

    {!! input_text('email', 'Email') !!}

    {!! input_select('degree_id', 'Degree', Constant::list_degree()) !!}

    {!! input_select('degree_id', 'Academic', Constant::list_academic()) !!}

    {!! input_text('password', 'Password', 'password') !!}

    {!! input_text('password_confirmation', 'Password Confirm', 'password') !!}

    {!! input_text('last_name', 'Last Name') !!}

    {!! input_text('first_name', 'First Name') !!}

    {!! input_text('middle_name', 'Middle Name') !!}

    {!! input_check('per_no', Constant::list_actors()) !!}

    {!! input_text('year', 'Year') !!} 

    {!! input_text('phone', 'Phone') !!}

    {!! input_text('address', 'Address') !!}

    {!! input_text('nation', 'Nation') !!}

    {!! input_text('research_area', 'Research Area') !!}

    {!! input_text('research', 'Research') !!}

    {!! Form::submit('submit') !!}

{!! Form::close() !!}

@stop
