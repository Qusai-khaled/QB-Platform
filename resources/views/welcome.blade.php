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
					        <li><a href="/"><h4>QB PLATFORM</h4> </a></li>
							<li><a href="https://www.linkedin.com/in/qusai-khaled-8b308314a/"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="https://github.com/Qusai-khaled"><i class="fa fa-github"></i></a></li>
							<li><a href="https://qusai-khaled.github.io/BB-Website-My-Portfolio/"><i class="fa fa-globe"></i></a></li>
						</ul>
						<!-- /social -->
					</div>
				</div>
			</div>
			<!-- /NAV -->
		</header>
		<!-- /HEADER -->
<div class="container">

        <div class="row mt-5 mb-5 justify-content-center">
            <h1 class="display-1">QB-Platform</h1>
        </div>
        <div class="row mt-5 mb-5 justify-content-center">
            <h3 class="mr-5 display-4"> <a href="{{ route('login') }}">Login</a></h3>
            <h3 class="ml-5 display-4"> <a href="{{ route('register') }}">Register</a></h3>
        </div>

</div>




@include('include.footer')
</body>
</html>
