@extends('layouts.admin')


@section('content')


<h1>Users</h1>
<div class="col-md-12">
<table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>PHOTO</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>ROLE</th>
        <th>STATUS</th>
        <th>CREATED-AT</th>
        <th>UPDATED-AT</th>
      </tr>
    </thead>
    <tbody>
        @if($users)

            @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->photo ? $user->photo->file : '/images/no-picture.png'}}" alt=""></td>
                <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
                <td>{{$user->email}}</td>
                <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
                {{-- <td>{{$user->role->name}}</td> --}}
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}}</td>
            </tr>
        @endforeach
      @endif

    </tbody>
  </table>
</div>

@endsection
