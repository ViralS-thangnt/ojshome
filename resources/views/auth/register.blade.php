@extends('layout.bg-black.bg_black')

@section('page-title')
Register
@stop

@section('title')
Register
@stop

@section('content')
{!! Form::open(['url' => 'auth/register']) !!}
    {!! ErrorDisplay::getInstance()->DisplayAll($errors) !!}
    <div class="row">
        <div class="col-xs-12 col-md-6">
            {!! Form::input_text('username', 'Name') !!}

            {!! Form::input_text('email', 'Email', 'email') !!}

            {!! Form::input_select('degree_id', 'Degree', Constant::list_degree()) !!}

            {!! Form::input_select('academic_id', 'Academic', Constant::list_academic()) !!}

            {!! Form::input_text('password', 'Password', 'password') !!}

            {!! Form::input_text('password_confirmation', 'Password Confirm', 'password') !!}

            {!! Form::input_check('actor_no', Constant::list_actors()) !!}
        </div>

        <div class="col-xs-12 col-md-6">
            {!! Form::input_text('last_name', 'Last Name') !!}

            {!! Form::input_text('first_name', 'First Name') !!}

            {!! Form::input_text('middle_name', 'Middle Name') !!}


            {!! Form::input_text('year', 'Year') !!} 

            {!! Form::input_text('phone', 'Phone') !!}

            {!! Form::input_text('address', 'Address') !!}

            {!! Form::input_text('nation', 'Nation') !!}

            {!! Form::input_text('research_area', 'Research Area') !!}

            {!! Form::input_text('research', 'Research') !!}

             {!! Form::button_submit('Submit') !!}
        </div>
    </div>

{!! Form::close() !!}
@stop

