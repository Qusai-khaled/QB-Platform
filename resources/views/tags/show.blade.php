@include('include.header')
<!-- PAGE HEADER -->
<div class="row " style="background-color: black ">
			<div class="col-md-10 text-center m-auto">
                    <h1 class="text-light mt-4">{{$title}} Tag</h1>
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
                    @if ( ! $num == 0)



					@foreach ($tag->posts as $post)

					<!-- post -->
					<div class="post post-row">
						<a class="post-img" href="{{route('post.show', ['slug' => $post->slug])}}"><img src="{{asset($post->featrued)}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">

								<a href="{{route('post.show', ['slug' => $post->slug])}}">{{$post->title}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('post.show', ['slug' => $post->slug])}}">{{$post->updated_at->toFormattedDateString()}}</a></h3>
							<ul class="post-meta">
								<li><a  href="{{route('post.show', ['slug' => $post->slug])}}">{{$post->user->name}}</a></li>
								<li>{{$post->created_at->toFormattedDateString()}}</li>
							</ul>
							<p>{{$post->content}}</p>
						</div>
					</div>
					<!-- /post -->
                	@endforeach
		 <br>


                    @else
                        <div class="post post-row">
 						<div class="post-body">
							<div class="post-category">

 							</div>
 							<ul class="post-meta">
									<h1>  No   Tags </h1>
 							</ul>
 						</div>
					</div>
                    @endif
				</div>
				<div class="col-md-4">
                    <div class="aside-widget">
						<div class="section-title">
							<h2 class="title">ADD POST</h2>
						</div>
						<div class="social-widget">
                        <a  href="{{route('post.create')}}"><button type="button" class="btn btn-outline-success btn-lg btn-block mb-3"><h3>ADD POST</h3><i class="fa fa-plus-circle fa-4x"></i></button></a>
					    </div>
                    </div>
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

					<!-- tags widget -->
					<div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Tags</h2>
						</div>
						<div class="category-widget">
							<ul>
                                    @foreach ($tags as $tag)
                            <li><a href="{{route('tag.show',['id' => $tag->id])}}">{{$tag->tag}} </a></li>
                                    @endforeach
                            <li><a href="{{route('tags.show')}}">MORE ..... </a></li>
                            <li><a href="{{route('tag.create')}}">ADD <i class="fa fa-plus-circle"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /tags widget -->

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
