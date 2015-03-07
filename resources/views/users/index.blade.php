@extends('layout.master.master')
<!-- Page Title -->
@section('title')

<h1>User Management</h1>

@stop

<!-- Main content -->
@section('content')
<a href="{!! url('user/form') !!}">Create new user</a>
<table class="table">
<thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Actor</th>
        <th colspan="2">Operations</th>
    </tr>
</thead>

<tbody>
    @foreach($users as $user)
    <tr>
        <td>{{$user->username}}</td>
        <td>{{$user->email}}</td>
        <td>{{Constant::actor($user->per_no)}}</td>
        <td><a href="{!! url('user/form/'. $user->id) !!}">Edit</a></td>
        <td><a href="{!! url('user/'. $user->id) !!}" class="delete">Delete</a></td>
    </tr>
    @endforeach
</tbody>
</table>
<form method="post" id="form-delete">
<input type="hidden" name="_method" value="DELETE" />
<input type="hidden" name="_token" value="{{ csrf_token() }}" />
</form>
<script type="text/javascript">
    $(document).ready(function(){
        $('a.delete').click(function(){
            if (confirm('Are you sure you want to delete this user ?')) {
                $('#form-delete').attr('action', $(this).attr('href')).submit();    
            }

            return false;
        });
    })
</script>
@stop
