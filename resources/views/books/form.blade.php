@extends('app')

@section('content')

{!! Form::model($book, ['route' => ['book_edit', $id]]) !!}
    {!! ErrorDisplay::getInstance()->DisplayAll($errors) !!}

    @if($id)
        {!! 'EDIT' !!}
    @else 
        {!! 'ADD' !!}
    @endif 

    BOOK </br>

    Name : {!! Form::text('name') !!}</br>
    Description : {!! Form::text('description') !!}

    {!! Form::submit('submit') !!}

{!! Form::close() !!}
@endsection