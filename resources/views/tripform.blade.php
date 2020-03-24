			<!DOCTYPE html>
			<html lang="zxx" class="no-js">
			<head>
				<!-- Mobile Specific Meta -->
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
				<!-- Favicon-->
				<link rel="shortcut icon" href="img/fav.png">
				<!-- Author Meta -->
				<meta name="author" content="colorlib">
				<!-- Meta Description -->
				<meta name="description" content="">
				<!-- Meta Keyword -->
				<meta name="keywords" content="">
				<!-- meta character set -->
				<meta charset="UTF-8">
				<!-- Site Title -->
				<title>Adventure</title>

				<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
					<!--
					CSS
					============================================= -->
					<link rel="stylesheet" href="{{ URL::asset('css/linearicons.css') }}">
					<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
					<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
					<link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
					<link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
					<link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
					<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
				</head>
			<body>
					<!-- start banner Area -->
					<section class="banner-area" id="home">
						<!-- Start Header Area -->
						<header class="default-header">
							<nav class="navbar navbar-expand-lg  navbar-dark">
								<div class="container">
									<a class="navbar-brand" href="index.html">
										<img src="{{ URL::asset('img/logo.png') }}" alt="">
									</a>
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="text-white lnr lnr-menu"></span>
									</button>

									<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
										<ul class="navbar-nav">
											<li><a href="index">Home</a></li>
											<li><a href="about">About</a></li>									
											<li><a href="upcomingtrips">Upcoming Trips</a></li>
											<li><a href="makeyourowntrip">Make Your Own Trip</a></li>
											<li><a href="gallery">Gallery</a></li>
											<li><a href="contactus">Contact Us</a></li>
											<li><a href="login">Signup/Login</a></li>
										</ul>
									</div>						
								</div>
							</nav>
						</header>
						<!-- End Header Area -->				

				<!-- start contact Area -->		
				<section class="contact-area section-gap" id="contact">
					<div class="container">									
					@if (isset($trip))
					<form class="form-area" id="myForm" action="updatetrip/{{$trip['trip_id']}}" method="post" class="contact-form">
							@csrf
							<div class="form-group">
								<h3>Edit Trip</h3> <br>
								<input name="tripname" value = "{{$trip['trip_name']}}" onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="" type="text">
								<input name="tripsdate" type = "text" value = {{$trip['start_date']}} onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="">
								<input name="tripedate" type = "text" value = {{$trip['end_date']}} onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="">
								<input name="tripdesc" type = "text" value = "{{$trip['description']}}" onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="">
								<input name="tripprice" type = "text" value = {{$trip['price']}} onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="">
								<input name="tripseats" type = "text" value = {{$trip['number_of_seats']}} onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required=""">
								<div class="switch-wrap d-flex justify-content-between">
									<p>Female Only</p>
										<div class="primary-checkbox">
											<input name = "tripfonly" type="checkbox" id="primary-checkbox" 
											@if ($trip['female_only'] == 1) checked @endif>
											<label for="primary-checkbox"></label>
										</div>
								</div>
								<button class="primary-btn mt-20">Save Changes<span class = "lnr lnr-arrow-right"></span></button>
								<div class="alert-msg">								
								</div>
								</div>
								</form>			
								@else
								<form class="form-area" id=""myForm" action="addtrip" method="post" class="contact-form">
								@csrf
								<div class="form-group">
								<h3>Add Trip</h3><br>
								<input name="tripname" placeholder = "Trip Name" onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="" type="text">
								<input name="tripsdate" type = "text" placeholder= "Start Date in format YYYY-MM-DD" onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="">
								<input name="tripedate" type = "text" placeholder= "End Date in format YYYY-MM-DD" onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="">
								<input name="tripdesc" type = "text" placeholder= "Trip Description" onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="">
								<input name="tripprice" type = "text" placeholder= "Trip Price" onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="">
								<input name="tripseats" type = "text" placeholder= "Number of Seats" onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required=""">
								<div class="switch-wrap d-flex justify-content-between">
									<p>Female Only</p>
										<div class="primary-checkbox">
											<input name = "tripfonly" type="checkbox" id="primary-checkbox" checked>
											<label for="primary-checkbox"></label>
										</div>
								</div>
								<button class="primary-btn mt-20">Confirm<span class = "lnr lnr-arrow-right"></span></button>
								<div class="alert-msg">								
								</div>
							</div>
							</div>
					</form>		
					@endif				
				</div>
	</section>
		<!-- start footer Area -->		
		<footer class="footer-area section-gap">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
						<div class="single-footer-widget">
							<h6>Contact Us</h6>
							<p> <i class = "fa fa-home"></i> | IBA Main Campus </p>
							<p> <i class = "fa fa-phone"></i> | 0333-1234567 </p>
							<p> <i class = "fa fa-envelope"></i> | tournado@tss.com </p>
							<div class="footer-social d-flex align-items-center">
								<a href="http://www.facebook.com"><i class="fa fa-facebook"></i></a>
								<a href="http://www.twitter.com"><i class="fa fa-twitter"></i></a>
								<a href="http://www.instagram.com"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget">
						</div>
					</div>									
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>About Us</h6>
							<p>
								Traveling teaches more than four walls. Tournado aims to provide economically feasible national and international tours to the youth of this country so that they learn beyond their usual scopes.
							</p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</div>
					</div>
				</div>
			</div>
		</footer>	
		<!-- End footer Area -->	
			<script src="{{ URL::asset('/js/vendor/jquery-2.2.4.min.js') }}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="{{URL::asset('/js/vendor/bootstrap.min.js') }}"></script>
			<script src="{{URL::asset('/js/jquery.ajaxchimp.min.js') }}"></script>
			<script src="{{URL::asset('/js/jquery.magnific-popup.min.js')}}"></script>	
			<script src="{{URL::asset('/js/owl.carousel.min.js')}}"></script>			
			<script src="{{URL::asset('/js/jquery.sticky.js')}}"></script>
			<script src="{{URL::asset('/js/slick.js')}}"></script>
			<script src="{{URL::asset('/js/jquery.counterup.min.js')}}"></script>
			<script src="{{URL::asset('/js/waypoints.min.js')}}"></script>		
			<script src="{{URL::asset('/js/main.js')}}"></script>		
		</body>
	</html>