@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                            <div class="row text-center m-auto">
                            <div class="col-md">
                                <div class="card bg-light mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Posts</div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{$post_count}}</h5>
                                            @if (! $post_count == 0 )
                                        <a class="btn btn-block btn-secondary" href="{{route('posts.show')}}">Show Posts</a>
                                                @endif
                                            </div>
                                        </div>
                            </div>
                            <div class="col-md">
                                <div class="card bg-light mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Users</div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{$users_count}}</h5>
                                            @if (! $users_count == 0 )
                                                    <a class="btn btn-block btn-secondary" href="{{route('users')}}">Show Users</a>
                                                @endif
                                            </div>
                                        </div>
                            </div>
                            <div class="col-md">
                                <div class="card bg-light mb-3" style="max-width: 18rem;">
                                        <div class="card-header">Categories</div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{$categories_count}}</h5>
                                            @if (! $categories_count == 0 )
                                                    <a class="btn btn-block btn-secondary" href="{{route('category.show')}}">Show Categories</a>
                                                @endif
                                            </div>
                                        </div>
                            </div>
                        </div>
                        </div>
                        <div class="container">
                            <div class="row text-center m-auto">
                                <div class="col-md ">
                                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Tags</div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{$tags_count}}</h5>
                                                @if (! $tags_count == 0 )
                                                    <a class="btn btn-block btn-secondary" href="{{route('tags.show')}}">Show Tags</a>
                                                @endif
                                                </div>
                                            </div>
                                </div>
                                <div class="col-md">
                                    <div class="card bg-light mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Trashed Posts</div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{$trashed_count}}</h5>
                                                @if (! $trashed_count == 0 )
                                                    <a class="btn btn-block btn-secondary" href="{{route('posts.trashed')}}">Show Trashed</a>
                                                @endif
                                                </div>
                                            </div>
                                </div>
                            </div>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
