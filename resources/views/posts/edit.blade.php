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
                        <div class="card-header"><strong>Edite Post :  {{$post->title}}</strong></div>
                        <div class="card-body">
                            <form action="{{route('post.update',['id'=>$post->id])}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                    <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" class="form-control" name="title"  value="{{$post->title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_id">Category</label>
                                        <select class="form-control" name="category_id" id="category">
                                            @foreach ($categories as $category)
                                                @if ($category->id == $post->category_id)
                                                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                                                @else
                                                    <option value="{{$category->id}}" >{{$category->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    <label >Tags</label>
                                    <div class="form-check">
                                        @foreach ($tags as $tag)
                                        <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}"
                                        @foreach ($post->tags as $ta)
                                        @if ($tag->id == $ta->id)
                                            checked
                                        @endif
                                        @endforeach>  {{$tag->tag}}  </label><br>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                    <label for="content">Post Description</label>
                                    <textarea class="form-control" name="content" id="content" rows="8" cols="8" >
                                        {{$post->content}}
                                    </textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="featrued">Post Photo</label>
                                    <input type="file" class="form-control-file" name="featrued">
                                    </div>
                                <button type="submit" class="btn btn-primary">Ubdate</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
