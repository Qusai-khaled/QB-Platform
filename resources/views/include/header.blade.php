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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

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
					        <li><a href="/website"><i  ></i> <h4>QB PLATFORM</h4> </a></li>
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
				<div id="nav-bottom">
					<div class="container">
						<!-- nav -->
						<ul class="nav-menu mt-2">
                                <h2>Categories</h2>
							@foreach ($categoriess as $category)
							<li><a href="{{route('categores.show', ['id' => $category->id])}}">{{$category->name}}</a></li>
                            @endforeach
                            <li><a href="{{route('category.show')}}">MORE ....</a></li>
                            <li><a href="{{route('category.create')}}">ADD <i class="fa fa-plus-circle"></i></a></li>

						</ul>
						<!-- /nav -->
					</div>
				</div>
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
                        <li><a href="{{route('dashboard')}}">Admin Dashboard</a>
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
