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
                        <div class="card-header"><strong>Edite Setting</strong></div>
                        <div class="card-body">
                            <form action="{{route('setting.update')}}" method="POST">
                                {{ csrf_field()}}
                                    <div class="form-group">
                                    <label for="blog_name">Blog Name</label>
                                    <input type="text" class="form-control" name="blog_name"  value="{{$setting->blog_name}}">
                                    </div>
                                    <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="tel" class="form-control" name="phone_number"  value="{{$setting->phone_number}}">
                                    </div>
                                    <div class="form-group">
                                    <label for="blog_email">Blog Email</label>
                                    <input type="email" class="form-control" name="blog_email"  value="{{$setting->blog_email}}">
                                    </div>
                                    <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address"  value="{{$setting->address}}">
                                    </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
