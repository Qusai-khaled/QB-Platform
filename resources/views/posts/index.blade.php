@extends('layouts.app')

@section('content')
        <div class="container">
            @if ($posts->count()>0)
            <div class="row ">
                @foreach ($posts as $post)
                    <div class="col-md-4 mb-3 ">
                        <div class="card m-auto" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset($post->featrued)}}" alt="Card image cap" style="height: 13rem;">
                        <div class="card-body">
                        <h5 class="card-title">Title : {{$post->title}}</h5>
                            <p class="card-text">Auther : {{$post->user->name}}</p>
                            <p class="card-text">Created_at : {{$post->created_at}}</p>
                            <a  href="{{route('post.show', ['slug' => $post->slug])}}" class="btn btn-primary">Show
                            <span><i class="far fa-eye"></i></span></a>
                            @if (Auth::user()->admin || Auth::user()->id == $post->user_id)
                                <a  href="{{route('post.edit',['id' => $post->id])}}" class="btn btn-primary">Edit
                                <span><i class="fas fa-edit"></i></span></a>
                                <a  href="{{route('post.delete',['id' => $post->id])}}" class="btn btn-primary">Delete
                                <span><i class="fas fa-trash-alt"></i></span></a>
                            @endif

                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @else
                <div class="row justify-content-center">
                    <div class="alert alert-warning alert-danger fade show w-50 text-center" role="alert">
                    <strong> NO Posts  </strong>
                    </div>
                </div>
            @endif
        </div>
@endsection

