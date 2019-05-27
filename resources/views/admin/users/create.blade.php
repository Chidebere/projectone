@extends('layouts.admin')

@section('content')

<h1>Create Users</h1>




<div class="col-sm-9">


    <form method="post" action="{{ route('admin.users.store') }}" enctype="multipart/form-data">
        @csrf
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}

    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name">
    <div style="color:crimson"> {{($errors->first('name'))}}</div>

    <label for="name">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter email">
    <div style="color:crimson"> {{($errors->first('email'))}}</div>


    <label for="name">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter Password">
    <div style="color:crimson"> {{($errors->first('password'))}}</div>


    <label for="name">Role</label>
    <select name="role_id" class="form-control">
            <option value=""> Choose Role</option>
            @foreach($roles as $role)
            <option value="{{$role->id}}">{{$role->name}}</option>
          @endforeach
    </select>
    <div style="color:crimson"> {{($errors->first('role_id'))}}</div>


    <label for="name">Status</label>
    <select name="is_active" class="form-control">
        <option value=""> Choose Status</option>
        <option value="1"> Active User</option>
        <option value="0"> Not Active User</option>
    </select>
    <div style="color:crimson"> {{($errors->first('is_active'))}} </div>


    <label for="name">User Photo</label>
    <input type="file" name="photo_id" class="form-control">



    <input type="submit" class="btn btn-primary" value="Create">

    </form>

</div>


{{-- @include('includes.form_error') --}}





@endsection
