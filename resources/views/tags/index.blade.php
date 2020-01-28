
@include('include.header')
<!-- PAGE HEADER -->
        <div class="row " style="background-color: black ">
			<div class="col-md-10 text-center m-auto">
                    <h1 class="text-light mt-3 mb-3"><strong>Tags</strong></h1>
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

                <div class="row">
					@foreach ($tagss as $tag)
                            <div class="col-md-6 mb-3 text-center">
                                <div class="card m-auto" >
                                <div class="card-body">
                                <h5 class="card-title"><a  href="{{route('tag.show',['id' => $tag->id])}}"><h3>{{$tag->tag}}</h3> </a></h5>
                                    <a href="{{route('tag.show',['id' => $tag->id])}}" class="btn btn-outline-success btn-block btn-lg mb-4" ><h4>Show</h4></a>
                                    @if (Auth::user()->admin)
                                    <a href="{{route('tag.edit',['id' => $tag->id])}}" class="btn btn-outline-secondary btn-block btn-lg mb-4"><h4>Edit</h4></a>
                                    <a href="{{route('tag.delete',['id' => $tag->id])}}" class="btn btn-outline-danger btn-block btn-lg mb-4"><h4>delet</h4></a>
                                    @endif
                                </div>
                                </div>
                        </div>
                    @endforeach
                </div>
				</div>

				<div class="col-md-4">
                    <div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Add Tags</h2>
						</div>
						<div class="social-widget">
                        <a  href="{{route('tag.create')}}"><button type="button" class="btn btn-outline-success btn-lg btn-block mb-3"><h3>Add Tags</h3><i class="fa fa-plus-circle fa-4x"></i></button></a>
					    </div>
                    </div>
                    <div class="aside-widget">
						<div class="section-title">
							<h2 class="title">Add Post</h2>
						</div>
						<div class="social-widget">
                        <a  href="{{route('post.create')}}"><button type="button" class="btn btn-outline-success btn-lg btn-block mb-3"><h3>Add Post</h3><i class="fa fa-plus-circle fa-4x"></i></button></a>
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
