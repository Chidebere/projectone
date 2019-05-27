@extends('layouts.admin')

@section('content')

<h1>Edit User</h1>

<div class="row">
<div class="col-sm-3">
    <img src="{{$user->photo ? $user->photo->file : '/images/no-picture.png'}}" alt="" class="img-responsive img-rounded">
</div>


<div class="col-sm-9">

<form method="post" action="{{ route('admin.users.update',[$user->id]) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
    <input type="hidden" name="_method" value="put">
    {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

<label for="name">Name</label>
<input type="text" name="name" class="form-control" placeholder="Enter name" value="{{ $user->name }}">
<div style="color:crimson"> {{($errors->first('name'))}}</div>

<label for="name">Email</label>
<input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ $user->email }}">
<div style="color:crimson"> {{($errors->first('email'))}}</div>


<label for="name">Password</label>
<input type="password" name="password" class="form-control" placeholder="Enter Password">


<label for="name">Role</label>
<select name="role_id" class="form-control">

    <option selected value="{{ $user->role->id }}">{{ $user->role->name }}</option>
        @foreach($roles as $role)
        <option value="{{$role->id}}">{{$role->name}}</option>
      @endforeach
</select>
<div style="color:crimson"> {{($errors->first('role_id'))}}</div>

<label for="name">Status</label>
<select name="is_active" class="form-control">
    <option selected value="{{ $user->is_active ? $user->is_active : '0' }}">{{ $user->is_active ? 'Active User' : 'Not Active User' }}</option>
    <option value="1"> Active User</option>
    <option value="0"> Not Active User</option>

</select>


<div style="color:crimson"> {{($errors->first('is_active'))}}</div>

<label for="name">User Photo</label>
<input type="file" name="photo_id" class="form-control">


<input type="submit" class="btn btn-primary" value="Update">

</form>


{{-- {{ Form::open(array('method' => 'Delete', 'route' => array('users.destroy', $user->id), 'class' => 'delete-form')) }}
	<button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>
{{ Form::close() }} --}}


{{-- {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUserController@destroy', $user->id]]) !!}
<div class="form-group">
   {!! Form::submit('Delete user', ['class'=>'btn btn-danger col-sm-6']) !!}
</div>
{!! Form::close() !!} --}}


<form method="post" action="{{route('admin.users.destroy', ['id' => $user->id])}}">
  {{ csrf_field() }}
        {!! method_field('DELETE') !!}
        <input type="submit" class="btn btn-danger" value="Delete User">
</form>

{{-- <form method="post" action="/admin/users/{{$user->id}}"> --}}
    {{-- <form action="{{ url('/admin/users', ['id' => $user->id]) }}" method="post">
    {{ csrf_field() }} --}}
    {{-- <form action="{{route('users.destroy',[$user->id])}}" method="POST">
        @method('DELETE')
        @csrf --}}
        {{-- <form method="post" action="{{ route('users.destroy',[$user->id]) }}"> --}}
    {{-- <form method="post" action="{{ route('users.destroy',['id' => $user->id]) }}"> --}}


        {{-- <form action="{{url('admin/users', ['id' => $user->id])}}" method="post">
            {{ csrf_field() }}
        <input type="hidden" name="_method" value="DELETE">
        <input type="text" name="someName" value="POKA" />
         <input type="submit" value="Delete">
    </form> --}}



</div>


{{-- @include('includes.form_error') --}}


</div>


@endsection
