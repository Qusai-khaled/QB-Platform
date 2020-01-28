@include('include.header')

		<!-- PAGE HEADER -->
		<div class="page-header">
			<div class="page-header-bg" style="background-image: url('{{asset($post->featrued)}}'); background-size: cover;background-position: 0px 50%; " ></div>
			<div class="container">
				<div class="row">
					<div class="col-md-offset-1 col-md-10 text-center">
						<h1 class="text-uppercase">{{$title}}</h1>
						<p class="lead">{{$post->category->name}}</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /PAGE HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">
						<div class="section-row">
                            <div class="section-title">
									<h3 class="title">User info</h3>
								</div>
                                <div class="row">
                                    <div class="col-7">
								<h1>{{$post->user->name}}</h1>
								<ul class="contact-social">
										@if ($post->user->profile->facebook != '' )
										<li><a href="{{$post->user->profile->facebook}}" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
										@endif
										@if ($post->user->profile->twitter != '' )
										<li><a href="{{$post->user->profile->twitter}}" class="social-twitter"><i class="fa fa-twitter"></i></a></li>
										@endif
										@if ($post->user->profile->github != '' )
										<li><a href="{{$post->user->profile->github}}" class="social-github"><i class="fa fa-github"></i></a></li>
										@endif
                                </ul>
                                    <br>
                                <p>{{$post->user->email }}</p>
                                <p>{!! $post->user->profile->about !!}</p>
                                @if (Auth::user()->id == $post->user_id)
                                <a  href="{{route('edit')}}"><button type="button" class="btn btn-outline-success"><h3>Edit Profile</h3><i class="fa fa-edit fa-4x"></i></button></a>
                                @endif
                                </div>
                                <div class="col-4">
                                <img class="post-img w-100 rounded-circle" src="{{asset($post->user->profile->avatar)}}" alt="">
                                </div>
                                </div>
						</div>



					<div class="section-row">
						<div class="section-title">
							<h3 class="title">{{$title}}</h3>
						</div>
						<h1>{{$post->created_at->toFormattedDateString()}}</h1>
                        <p>{!! $post->content !!}</p>
                        @if (Auth::user()->id == $post->user_id)
                            <a  href="{{route('post.delete',['id' => $post->id])}}" class="btn btn-danger">Delete
                            <span><i class="fas fa-trash-alt"></i></span></a>
                            <br>
                            <br>
                            <br>
                        @endif

						@foreach($post->tags as $tag)
						<a href="{{route('tag.show', ['id' => $tag->id])}}"
							class="badge badge-pill badge-danger"
						style="background-color: #ee4266;">{{ $tag->tag }}</a>
						@endforeach
				    </div>


					<div class="section-row ">
                        <div class="section-title">
                            </div>
                            <br>
                            <div class="col text-center">
                                @if ($prev)
                            <a href="{{route('post.show', ['slug' => $prev->slug])}}"
                                class="badge badge-danger"> Prev <i class="fa fa-arrow-left"></i></a>
                            @endif

                            @if ($next)
                            <a href="{{route('post.show', ['slug' => $next->slug])}}"
                                class="badge badge-danger"><i class="fa fa-arrow-right"></i> Next </a>
                            @endif


                                </div>

                        </div>



						@include('include.disqus')
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

							<h2 class="title">Social Media</h2>
						</div>
						<div class="social-widget mb-lg-5">
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
                    </div>
					<!-- /newsletter widget -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

	<!-- /SECTION -->

	@include('include.footer')

    <!-- jQuery Plugins -->
    {{-- <script id="dsq-count-scr" src="//qb-platform.disqus.com/count.js" async></script> --}}


</body>

</html>
