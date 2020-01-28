@include('include.header')


	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-8 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a href="{{route('post.show', ['slug' => $first_post->slug])}}" class="post-img" ><img src="{{$first_post->featrued}}" alt="" style="height: 100% ; width: 100%"></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('categores.show', ['id' => $first_post->category->id])}}">{{$first_post->category->name}}</a>
							</div>
							<h3 class="post-title title-lg"><a href="{{route('post.show', ['slug' => $first_post->slug])}}">{{$first_post->title}}</a></h3>
							<ul class="post-meta">
                            <li><a href="#">{{$first_post->user->name}}</a></li>
								<li>{{$first_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
				<div class="col-md-4 hot-post-right">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{route('post.show', ['slug' => $second_post->slug])}}"><img src="{{$second_post->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a href="{{route('categores.show', ['id' => $second_post->category->id])}}">{{$second_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('post.show', ['slug' => $second_post->slug])}}">{{$second_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$second_post->user->name}}</a></li>
								<li>{{$second_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->

					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="{{route('post.show', ['slug' => $third_post->slug])}}"><img src="{{$third_post->featrued}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
                                    <a href="{{route('categores.show', ['id' => $third_post->category->id])}}">{{$third_post->category->name}}</a>
							</div>
							<h3 class="post-title"><a href="{{route('post.show', ['slug' => $third_post->slug])}}">{{$third_post->title}}</a></h3>
							<ul class="post-meta">
								<li><a href="author.html">{{$third_post->user->name}}</a></li>
								<li>{{$third_post->created_at->diffForHumans()}}</li>
							</ul>
						</div>
					</div>
					<!-- /post -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">Recent posts</h2>
							</div>
						</div>
						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{route('post.show', ['slug' => $first_post->slug])}}"><img src="{{$first_post->featrued}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$first_post->category->name}}</a>
									</div>
									<h3 class="post-title"><a href="{{route('post.show', ['slug' => $first_post->slug])}}">{{$first_post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$first_post->user->name}}</a></li>
										<li>{{$first_post->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{route('post.show', ['slug' => $second_post->slug])}}"><img src="{{$second_post->featrued}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$second_post->category->name}}</a>

									</div>
									<h3 class="post-title"><a href="{{route('post.show', ['slug' => $second_post->slug])}}">{{$second_post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$second_post->user->name}}</a></li>
										<li>{{$second_post->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<div class="clearfix visible-md visible-lg"></div>

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{route('post.show', ['slug' => $third_post->slug])}}"><img src="{{$third_post->featrued}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$third_post->category->name}}</a>
									</div>
									<h3 class="post-title"><a href="{{route('post.show', ['slug' => $third_post->slug])}}">{{$third_post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$third_post->user->name}}</a></li>
										<li>{{$third_post->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->

						<!-- post -->
						<div class="col-md-6">
							<div class="post">
								<a class="post-img" href="{{route('post.show', ['slug' => $fourth_post->slug])}}"><img src="{{$fourth_post->featrued}}" alt=""></a>
								<div class="post-body">
									<div class="post-category">
										<a href="category.html">{{$fourth_post->category->name}}</a>

									</div>
									<h3 class="post-title"><a href="{{route('post.show', ['slug' => $fourth_post->slug])}}">{{$fourth_post->title}}</a></h3>
									<ul class="post-meta">
										<li><a href="author.html">{{$fourth_post->user->name}}</a></li>
										<li>{{$fourth_post->created_at->diffForHumans()}}</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- /post -->
					</div>
					<!-- /row -->
                    <!-- row -->
                    @foreach ($categorie as $categorie)
                        <div class="row">
						<div class="col-md-12">
							<div class="section-title">
								<h2 class="title">{{$categorie->name}}</h2>
							</div>
						</div>
						<!-- post -->
						@foreach ($categorie->posts()->orderBy('created_at','desc')->take(3)->get() as $post)
                        <div class="col-md-4">
                                <div class="post post-sm">
                                    <a class="post-img" href="{{route('post.show', ['slug' => $post->slug])}}"><img src="{{$post->featrued}}" alt=""></a>
                                    <div class="post-body">
                                        <div class="post-category">
                                            <a href="category.html">{{$post->category->name}}</a>
                                        </div>
                                        <h3 class="post-title title-sm"><a href="{{route('post.show', ['slug' => $post->slug])}}">{{$post->title}}</a></h3>
                                        <ul class="post-meta">
                                            <li><a href="author.html">{{$post->user->name}}</a></li>
                                            <li>{{$post->created_at->diffForHumans()}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
						<!-- /post -->
					</div>
                    @endforeach
					<!-- /row -->
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

					<!-- category widget -->
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

					<!-- /post widget -->
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
