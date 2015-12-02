<!DOCTYPE html>
<html>
<head>
	<title>Driving License</title>
	<meta name="site-url" content="{{url('/')}}" />
	<meta name="site-token" content="{{csrf_token()}}" />
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="{{url('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('/css/main.css')}}">
	
	
</head>
<body class="homepage">
    <div id="page-wrapper">
	@yield('content')
	</div>
	<div>
		@yield('form')
	</div>
	<!-- Footer -->
	<div id = "footer">
				<div id="footer-wrapper">
					<div id="footer" class="container">
						<header>
							<h2>Questions or comments? <strong>Get in touch:</strong></h2>
						</header>
						<div class="row">
							<div class="6u 12u(mobile)">
								<section>
									<form method="post" action="#">
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input name="name" placeholder="Name" type="text" />
											</div>
											<div class="6u 12u(mobile)">
												<input name="email" placeholder="Email" type="text" />
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<textarea name="message" placeholder="Message"></textarea>
											</div>
										</div>
										<div class="row 50%">
											<div class="12u">
												<a href="#" class="form-button-submit button icon fa-envelope">Send Message</a>
											</div>
										</div>
									</form>
								</section>
							</div>
							<div class="6u 12u(mobile)">
								<section>
									<p>Erat lorem ipsum veroeros consequat magna tempus lorem ipsum consequat Phaselamet
									mollis tortor congue. Sed quis mauris sit amet magna accumsan tristique. Curabitur
									leo nibh, rutrum eu malesuada.</p>
									<div class="row">
										<div class="6u 12u(mobile)">
											<ul class="icons">
												<li class="icon fa-home">
													1234 Somewhere Road<br />
													Nashville, TN 00000<br />
													USA
												</li>
												<li class="icon fa-phone">
													(000) 000-0000
												</li>
												<li class="icon fa-envelope">
													<a href="#">info@untitled.tld</a>
												</li>
											</ul>
										</div>
										<div class="6u 12u(mobile)">
											<ul class="icons">
												<li class="icon fa-twitter">
													<a href="#">@untitled-tld</a>
												</li>
												<li class="icon fa-instagram">
													<a href="#">instagram.com/untitled-tld</a>
												</li>
												<li class="icon fa-dribbble">
													<a href="#">dribbble.com/untitled-tld</a>
												</li>
												<li class="icon fa-facebook">
													<a href="#">facebook.com/untitled-tld</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
					<div id="copyright" class="container">
						<ul class="links">
							<li>&copy; 2015. All rights reserved.</li>
						</ul>
					</div>
				</div>
</div>

	
 <script src="js/jquery.min.js"></script>
 <script src="js/jquery.dropotron.min.js"></script>
 <script src="js/skel.min.js"></script>
 <script src="js/skel-viewport.min.js"></script>
 <script src="js/util.js"></script>
 <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script type="text/javascript" src="{{url('/js/jquery-1.11.3.min.js')}}"></script>
<script type="text/javascript" src="{{url('/js/bootstrap.min.js')}}"></script>
@yield('scripts')
</body>
</html>