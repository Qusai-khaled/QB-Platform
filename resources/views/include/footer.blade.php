
	<!-- FOOTER -->
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
                            <p> {{$settings->blog_name}}</p>
                            <p> {{$settings->phone_number}}</p>
                            <p>{{$settings->address}}</p>
                            <p>{{$settings->blog_email}}</p>
						<ul class="contact-social">
							<li><a class="social-github" href="https://github.com/Qusai-khaled"><i class="fa fa-github"></i></a></li>
                            <li><a class="social-portfolio" href="https://qusai-khaled.github.io/BB-Website-My-Portfolio/"><i class="fa fa-globe"></i></a></li>
                            <li><a class="social-linkedin" href="https://www.linkedin.com/in/qusai-khaled-8b308314a/"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
                <div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="tags-widget">
							<ul>

                                @foreach ($categoriess as $category)
                            <li><a href="{{route('categores.show', ['id' => $category->id])}}">{{$category->name}} </a></li>
                                    @endforeach
                                    <li><a href="{{route('category.show')}}">MORE .... </a></li>
                                    <li><a href="{{route('category.create')}}">ADD <i class="fa fa-plus-circle"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>

                                    @foreach ($tags as $tag)
                            <li><a href="{{route('tag.show',['id' => $tag->id])}}">{{$tag->tag}}  </a></li>
                                    @endforeach
                                    <li><a href="{{route('tags.show')}}">MORE .... </a></li>
                                    <li><a href="{{route('tag.create')}}">ADD <i class="fa fa-plus-circle"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Newsletter</h3>
						<div class="newsletter-widget">
							<form>
								<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium.</p>
								<input class="input" name="newsletter" placeholder="Enter Your Email">
								<button class="primary-button">Subscribe</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row ">
				<div class="col-md-6  m-auto">
					<div class="footer-copyright text-center">
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with
                    <i class="fa fa-heart-o" aria-hidden="true"></i> by
                    <a href="https://qusai-khaled.github.io/BB-Website-My-Portfolio/" target="_blank">Qusai Khaled</a>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->
	<!-- jQuery Plugins -->



    <!-- jQuery Plugins -->
    <script src='{{asset('js/jquery.min.js')}}'></script>
	<script src='{{asset("js/bootstrap.min.js")}}'></script>
	<script src='{{asset("js/jquery.stellar.min.js")}}'></script>
	<script src='{{asset("js/main.js")}}'></script>
