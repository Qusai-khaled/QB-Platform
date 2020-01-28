
@extends('layouts.app')

@section('content')
    <div class="container">
            @if (count($errors)>0)
                @foreach ($errors->all() as $error)
                        <div class="alert alert-warning alert-danger fade show" role="alert">
                        <strong>{{$error}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endforeach
            @endif
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header"><strong>Create User</strong></div>
                        <div class="card-body">
                            <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                    <div class="form-group">
                                    <label for="title">User Name</label>
                                    <input type="text" class="form-control" name="name"  placeholder="Enter Name">
                                    </div>
                                    <div class="form-group">
                                    <label for="title">User Email</label>
                                    <input type="email" class="form-control" name="email"  placeholder="Enter Email">
                                    </div>
                                    <div class="form-group">
                                    <label for="title">User Password</label>
                                    <input type="password" class="form-control" name="password"  placeholder="Enter password">
                                    </div>

                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
