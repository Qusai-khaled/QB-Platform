@include('include.header')
<!-- PAGE HEADER -->
<div class="row " style="background-color: black ; margin-top: 10px">
			<div class="col-md-10 text-center m-auto">
                    <h1 class="text-light mt-4">{{$title}} </h1>
                    <h2 class="text-light">It Owns {{$num}} Posts</h2>
			</div>
</div>
<!-- /PAGE HEADER -->
	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">


					@if ($posts->count() > 0)
					@foreach ( $posts as $post)

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{route('post.show', ['slug' => $post->slug])}}"><img src="{{$post->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">

								<a href="{{route('post.show', ['slug' => $post->slug])}}">{{$post->title}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('post.show', ['slug' => $post->slug])}}">{{$post->updated_at->toFormattedDateString()}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">John Doe</a></li>
								<li>{{$post->created_at->toFormattedDateString()}}</li>
							</ul>
							<p>{!!$post->content!!}</p>
						</div>
					</div>
					<!-- /post -->
                	@endforeach

					@else



					<!-- post -->
					<div class="post post-row">
 						<div class="post-body">
							<div class="post-category">

 							</div>
 							<ul class="post-meta">
									<h1>  No results found !!!   </h1>
 							</ul>
 						</div>
					</div>
					<!-- /post -->

					@endif












		 <br>


				</div>

				<div class="col-md-4">


					<!-- social widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget">
							<ul>
								<li>
									<a href="#" class="social-facebook">
										<i class="fa fa-facebook"></i>
										<span>21.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-twitter">
										<i class="fa fa-twitter"></i>
										<span>10.2K<br>Followers</span>
									</a>
								</li>
								<li>
									<a href="#" class="social-google-plus">
										<i class="fa fa-google-plus"></i>
										<span>5K<br>Followers</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- /social widget -->

					<!-- category widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Categories</h2>
						</div>
						<div class="category-widget">
							<ul>
								<li><a href="#">Lifestyle <span>451</span></a></li>
								<li><a href="#">Fashion <span>230</span></a></li>
								<li><a href="#">Technology <span>40</span></a></li>
								<li><a href="#">Travel <span>38</span></a></li>
								<li><a href="#">Health <span>24</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /category widget -->

					<!-- newsletter widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Newsletter</h2>
						</div>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
					<!-- /newsletter widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

@include('include.footer')

</body>

</html>
