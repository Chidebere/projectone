@extends('layouts.admin')


@section('content')



@if(Session::has('deleted_user'))
<p class="bg-danger" style="padding:5px; padding-left:10px">{{session('deleted_user')}}</p>
@elseif(Session::has('updated_user'))
<p class="bg-success" style="padding:5px; padding-left:10px"">{{session('updated_user')}}</p>
@elseif(Session::has('created_user'))
<p class="bg-success" style="padding:5px; padding-left:10px"">{{session('created_user')}}</p>
@endif




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
        <th>ACTIONS</th>
      </tr>
    </thead>
    <tbody>
        @if($users)

            @foreach($users as $user)

            <tr>
                <td>{{$user->id}}</td>
                <td><img height="50" src="{{$user->photo ? $user->photo->file : '/images/no-picture.png'}}" alt=""></td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
                {{-- <td>{{$user->role->name}}</td> --}}
                <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
                <td>{{$user->created_at->diffForHumans()}}</td>
                <td>{{$user->updated_at->diffForHumans()}} </td>
                <td>
               <div class="col-sm-4">
                   <a href="{{route('admin.users.edit', $user->id)}}"><i class="fa fa-edit" style="font-size:28px;color:blue"></i></a>
                   {{-- <a href="{{route('users.edit', $user->id)}}"><i class="fa fa-edit" style="font-size:28px;color:blue"></i></a> --}}
                </div>
               <div class="col-sm-4">
                <form method="post" action="{{route('admin.users.destroy', ['id' => $user->id])}}">
                    {{ csrf_field() }}
                    {!! method_field('DELETE') !!}
                    <button type="submit"><i class="fa fa-trash-o" style="font-size:28px;color:red"></i></button>
                    {{-- <input type="submit" class="btn btn-danger btn-sm" value="Delete"> --}}
                </form>
               </div>

                </td>
            </tr>
        @endforeach
      @endif

    </tbody>
  </table>
</div>

@endsection
