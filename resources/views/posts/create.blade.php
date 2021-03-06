<!DOCTYPE html>
<html lang="en">

<head >
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>QB PLATFORM</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css')}}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href=" {{asset('css/font-awesome.min.css') }}">



	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}" />



</head>


<body style="background-color: white">
		<!-- HEADER -->
		<header id="header">
			<!-- NAV -->
			<div id="nav">
				<!-- Top Nav -->
				<div id="nav-top">
					<div class="container">
						<!-- social -->
						<ul class="nav-social">
					        <li><a href="/"><i  ></i> <h4>QB PLATFORM</h4> </a></li>
							<li><a href="https://www.linkedin.com/in/qusai-khaled-8b308314a/"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://github.com/Qusai-khaled"><i class="fa fa-github"></i></a></li>
							<li><a href="https://qusai-khaled.github.io/BB-Website-My-Portfolio/"><i class="fa fa-globe"></i></a></li>
						</ul>
						<!-- /social -->
						<!-- search & aside toggle -->
						<div class="nav-btns">
							<button class="aside-btn"><i class="fa fa-bars"></i></button>
							<button class="search-btn"><i class="fa fa-search"></i></button>
							<div id="nav-search">
								<form method="GET" action="/results">
									{{ csrf_field()}}
									<input class="input" name="search" placeholder="Enter your search...">
								</form>
								<button class="nav-close search-close">
									<span></span>
								</button>
							</div>
						</div>
						<!-- /search & aside toggle -->
					</div>
				</div>
				<!-- /Top Nav -->

				<!-- Main Nav -->
				<!-- /Main Nav -->
				<!-- Aside Nav -->
				<div id="nav-aside">
					<ul class="nav-aside-menu">
                    <li><a href="{{route('website')}}">Home</a></li>
                    @if (! Auth::user()->profile == null)
                        <li><a href="{{route('profile')}}">Profile</a></li>
                    @else
                        <li><a href="{{route('edit')}}">Edit Profile</a></li>
                    @endif

                    @if(Auth::user()->admin)
                        <li><a href="{{route('dashboard')}}">Dashboard</a>
                    @endif
                        <li><a href="{{route('category.show')}}">Categories</a></li>
						<li><a href="{{route('tags.show')}}">Tags</a></li>
                        <li><a href="{{route('post.create')}}">Add Post</a></li>
                        <li><a  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                        </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
					</ul>
					<button class="nav-close nav-aside-close"><span></span></button>
				</div>
				<!-- /Aside Nav -->
			</div>
			<!-- /NAV -->
		</header>
		<!-- /HEADER -->

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
           <div class="row justify-content-center mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center"><strong>Create Post</strong></div>
                        <div class="card-body">
                            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field()}}
                                    <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" class="form-control form-control-lg" name="title"  placeholder="Enter title">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlSelect1" class="ml-2">Category</label>
                                        <select class="form-control form-control-lg col-md-3" name="category_id" id="category">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <label >Tags</label>
                                    <div class="form-check mb-3">
                                        @foreach ($tagss as $tag)
                                        <div>
                                            <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}"  >
                                        <label class="form-check-label ml-4"  >
                                                {{$tag->tag}}
                                            </label><br>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                    <label for="content">Post Description</label>
                                    <textarea class="form-control form-control-lg" name="content" id="content" rows="8" cols="8"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="featrued">Post Photo</label>
                                    <input type="file" class="form-control-file" name="featrued">
                                    </div>
                                <button type="submit" class="btn btn-primary btn-lg">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
</div>


@include('include.footer')
</body>
</html>
