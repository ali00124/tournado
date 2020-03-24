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
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>
			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<!-- Start Header Area -->
				<header class="default-header">
					<nav class="navbar navbar-expand-lg  navbar-dark">
						<div class="container">
							<a class="navbar-brand" href="index.html">
								<img src="img/logo.png" alt="">
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
			</section>

			<!-- start contact Area -->		
			<section class="contact-area section-gap" id="contact">
				<div class="container">									
					<form class="form-area " id="myForm" action="updateuser" method="post" class="contact-form">
						<div class="form-group">
							<h3>Edit Profile</h3><br>
							<input name="epname" placeholder = {{ Auth::user()->name }} onfocus="this.placeholder = "" onblur="this.placeholder = "" class="common-input mb-20 form-control" required="" type="text">
							<input name="epemail" placeholder= {{ Auth::user()->email }} pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" class="common-input mb-20 form-control" required="" type="text">
							<input name="eppassword" placeholder= "******" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" class="common-input mb-20 form-control" required="" type="password">
							<button class="primary-btn mt-20">Confirm<span class = "lnr lnr-arrow-right"></span></button>
							<div class="alert-msg">								
							</div>
						</div>
					</div>
				</form>						

			</div>

			<div class="section-top-border">
				<div class="container">
					<h3 class="mb-30">Booking Information</h3>
					<div class="progress-table-wrap">
						<div class="progress-table">
							<div class="table-head">
								<div class="serial">#</div>
								<div class="serial">Trip Name</div>
								<div class="serial">Departure Date</div>
								<div class="serial">Booking Date</div>
								<div class="serial">Price</div>
								<div class="serial">People</div>
								<div class="serial">Cancel Booking</div>
							</div>
							<div class="table-row">
								<div class="serial">01</div>
								<div class="serial">Gorakh Hill Station</div>
								<div class="serial">18-03-2018</div>
								<div class="serial">15-03-2018</div>
								<div class="serial">2,00,000 PKR</div>
								<div class="serial">10</div>
								<div class="serial">Cancel</div>
							</div>
							<div class="table-row">
								<div class="serial">02</div>
								<div class="serial">Gorakh Hill Station</div>
								<div class="serial">18-03-2018</div>
								<div class="serial">15-03-2018</div>
								<div class="serial">2,00,000 PKR</div>
								<div class="serial">10</div>
								<div class="serial">NaN</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<div class="container">
		<div class="row justify-content-left d-flex">
			<div class="mt-40">
				<h3 class = "pb-20">Manage Testimonials</h3>
				<div class="item">
					<div class="caption text-center mt-20">
						<h4 class="text-uppercase">It was a great trip!</h4>
						<blockquote class="generic-blockquote">
						I thouroughly enjoyed the time that we spent at Gorakh Hill Station. It was an amazing journey full of adventure, music, and photography. 
						</blockquote>
						<h6> -Tabish Muzaffar on March 15, 2018. </h6>
					</div>
				</div>
				<div class="item">
					<div class="caption text-center mt-20">
						<h4 class="text-uppercase">It was a great trip!</h4>
						<blockquote class="generic-blockquote">
						I thouroughly enjoyed the time that we spent at Gorakh Hill Station. It was an amazing journey full of adventure, music, and photography. 
						</blockquote>
						<h6> -Tabish Muzaffar on March 15, 2018. </h6>
					</div>
				</div>
				<button class = "primary-btn">Add Testimonial<span class = "lnr lnr-arrow-right"></span></button>
			</div>
		</div>
	</div>	
</section>
<!-- End project Area -->


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
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>	
	<script src="js/owl.carousel.min.js"></script>			
	<script src="js/jquery.sticky.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/waypoints.min.js"></script>		
	<script src="js/main.js"></script>	
</body>
</html>