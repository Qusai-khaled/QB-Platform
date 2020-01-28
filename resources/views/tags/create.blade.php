



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
            <div class="row justify-content-center mt-5">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header text-center"><strong><h3>Create Tags</h3></strong></div>
                        <div class="card-body">
                            <form action="{{route('tag.store')}}" method="POST">
                                {{ csrf_field()}}
                                    <div class="form-group">
                                    <label for="name"><h4>Tag Name</h4></label>
                                    <input type="text" class="form-control form-control-lg" name="tag"  placeholder="Enter Name">
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
