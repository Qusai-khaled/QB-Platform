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
                        <div class="card-header"><strong>Edite Tag : {{$tag->tag}}</strong></div>
                        <div class="card-body">
                            <form action="{{route('tag.update',['id'=>$tag->id])}}" method="POST">
                                {{ csrf_field()}}
                                    <div class="form-group">
                                    <label for="name">Tag Name</label>
                                    <input type="text" class="form-control" name="tag"  value="{{$tag->tag}}">
                                    </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
