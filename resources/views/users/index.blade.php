@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center"><strong>Users</strong></div>
                        <div class="card-body">
                            <table class="table text-center">
                                @if ($users->count()>0)
                <thead>
                    <tr>
                    <th scope="col-md">Img</th>
                    <th scope="col">Name</th>
                    <th scope="col">Admin</th>
                    <th scope="col">User</th>
                    <th scope="col">Permissions</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                    @foreach ($users as $user)
                    <tbody class="text-dark">
                        <tr>
                            <td >
                                @foreach ($profiles as $profile)
                                @if ($profile->user_id == $user->id)
                                <img src="{{asset($profile->avatar)}}" alt="" style="height: 50px;width: 50px">
                                @endif
                                @endforeach
                            </td>
                        <td>{{$user->name}}</td>
                        <td>@if ($user->admin)
                                <span><i class="fas fa-check text-success"></i></span>
                            @endif</td>
                        <td>
                            @if (! $user->admin)
                            <i class="fas fa-check text-success"></i>
                            @endif
                        </td>
                        <td>
                            @if ($user->admin)
                                <a  href="{{route('users.notadmin',['id' => $user->id])}}">Delete Admin</a>
                            @else
                                <a  href="{{route('users.admin',['id' => $user->id])}}">Make Admin</a>
                            @endif
                        </td>
                        <td><a  href="#">
                            <SPan><i class="fas fa-trash-alt"></i></SPan>
                        </a></td>
                        </tr>
                    </tbody>
                    @endforeach
            </table>
            @else
                <div class="row justify-content-center">
                    <div class="alert alert-warning alert-danger fade show w-50 text-center" role="alert">
                    <strong> NO Users  </strong>
                    </div>
                </div>
            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
@endsection

