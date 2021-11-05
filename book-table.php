<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/favicon.png" type="image/png">
	<title>FOOD HUNTING</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="vendors/linericon/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.css">
	<link rel="stylesheet" href="vendors/animate-css/animate.css">
	<!-- main css -->
	<link rel="stylesheet" href="css/style.css">
</head>

<body id="book-table">

	<!--================ Start Header Menu Area =================-->
	<div class="menu-trigger">
		<span></span>
		<span></span>
		<span></span>
	</div>
	<header class="fixed-menu">
		<span class="menu-close"><i class="fa fa-times"></i></span>
		<div class="menu-header">
			<div class="logo d-flex justify-content-center">
				<h3><span>Food</span> Hunting</h3>
			</div>
		</div>
		<div class="nav-wraper">
			<div class="navbar">
				<ul class="navbar-nav">
					<li class="nav-item"><a class="nav-link" href="index.php"><img src="img/header/nav-icon1.png" alt=""> home</a></li>
					<li class="nav-item"><a class="nav-link" href="about-us.php"><img src="img/header/nav-icon2.png" alt="">about</a></li>
					<li class="nav-item"><a class="nav-link" href="menu.php"><img src="img/header/nav-icon3.png" alt="">menu</a></li>
					<li class="nav-item"><a class="nav-link active" href="book-table.php"><img src="img/header/nav-icon4.png" alt="">Book
							Table</a></li>
					<li class="nav-item"><a class="nav-link" href="Chefs.php"><img src="img/header/nav-icon5.png" alt="">Chefs</a></li>
					
					</li>
					<li class="nav-item submenu dropdown">
						<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						 aria-expanded="false"><img src="img/header/nav-icon7.png" alt="">Blog</a>
						<ul class="dropdown-menu">
							<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
							<li class="nav-item"><a class="nav-link" href="single-blog.php">Blog Details</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="contact.php"><img src="img/header/nav-icon8.png" alt="">contact</a></li>
					<li class="nav-item"><a class="nav-link" href="login.php"><img src="img/header/nav-icon2.png" alt="">Log in</a></li>
					
				</ul>
			</div>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<div class="site-main">
		<!--================ Start Home Banner Area =================-->
		<section class="home_banner_area common-banner">
			<div class="banner_inner">
				<div class="container-fluid no-padding">
					<div class="row fullscreen">

					</div>
				</div>
			</div>
		</section>
		<!-- Start banner bottom -->
		<div class="row banner-bottom common-bottom-banner align-items-center justify-content-center">
			<div class="col-lg-8 offset-lg-4">
				<div class="banner_content">
					<div class="row d-flex align-items-center">
						<div class="col-lg-7 col-md-12">
							<h1>Book table</h1>
							<p> A unique feature here is to consider table combination to capture revenue potentials from different party sizes and at different time periods. 
							For example, a party of large size can be served by combining two or more small tables.</p>
							
							<p>A mixed integer programming (MIP) model is developed to make the reservation recommendation. 
							We propose a rolling horizon reservation policy such that the value of a particular table is periodically evaluated and updated.</p>
						</div>
						<div class="col-lg-4 col-md-12">
							<div class="banner-btn">
								<a class="primary-btn text-uppercase" href="index.php">Home</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End banner bottom -->
		<!--================ End Home Banner Area =================-->

		<!--================ Start Reservstion Area =================-->
		<section class="reservation-area section_gap_top">
			<div class="container">
				<div class="row align-items-center justify-content-center">
					<div class="col-lg-6 offset-lg-6">
						<div class="contact-form-section">
							<h1>Reservation Form</h1>
							<form   action="booktableconnect.php" method="POST" class="contact-form-area contact-page-form contact-form text-right" >
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="name" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'">
								</div>
								<div class="form-group col-md-12">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Email Address'">
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="subject" name="pnumber" placeholder="Phone Number" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Phone Number'">
								</div>
								<div class="form-group col-md-12">
									<input type="text" class="form-control" id="datepicker" name="selectdate" placeholder="Select Date & Time" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Select Date & Time'">
								</div>
								<div class="form-group col-md-3" name="npeople" >
									<div class="form-select" name="npeople">
										<select name="npeople">
											<option value="Number of people">Number of people</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
										</select>
									</div>
								</div>
								
								<div class="form-group col-md-3" name="event">
									<div class="form-select" name="event">
										<select name="event">
											<option value="Select event">Select event</option>
											<option value="Select event Dhanmondi">Select event Dhanmondi</option>
											<option value="Select event Mohammadpur">Select event Mohammadpur</option>
											<option value="Select event Gulshan">Select event Gulshan</option>
											<option value="Select event Banani">Select event Banani</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 text-center">
								
								   <input type="Submit" value="Submit">
								
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================ End Reservstion Area =================-->

		<!--================ Start Footer Area =================-->
		<footer class="footer-area overlay">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="single-footer-widget">
							<h6>Top Products</h6>
							<div class="row">
								<div class="col">
									<ul class="list">
										<li><a href="#">Managed Website</a></li>
										<li><a href="#">Manage Reputation</a></li>
										<li><a href="#">Power Tools</a></li>
										<li><a href="#">Marketing Service</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="single-footer-widget">
							<h6>Quick Links</h6>
							<div class="row">
								<div class="col">
									<ul class="list">
										<li><a href="#">Jobs</a></li>
										<li><a href="#">Brand Assets</a></li>
										<li><a href="#">Investor Relations</a></li>
										<li><a href="#">Terms of Service</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="single-footer-widget">
							<h6>Features</h6>
							<div class="row">
								<div class="col">
									<ul class="list">
										<li><a href="#">Jobs</a></li>
										<li><a href="#">Brand Assets</a></li>
										<li><a href="#">Investor Relations</a></li>
										<li><a href="#">Terms of Service</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-4 col-sm-6">
						<div class="single-footer-widget">
							<h6>Resources</h6>
							<div class="row">
								<div class="col">
									<ul class="list">
										<li><a href="#">Guides</a></li>
										<li><a href="#">Research</a></li>
										<li><a href="#">Experts</a></li>
										<li><a href="#">Agencies</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-8">
						<div class="single-footer-widget">
							<h6>Newsletter</h6>
							<p>Stay update with our latest</p>
							<div class="" id="mc_embed_signup">
								<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
								 method="get" class="form-inline">
									<div class="d-flex flex-row">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
										 required="" type="email">
										<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
										<div style="position: absolute; left: -5000px;">
											<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
										</div>
									</div>
									<div class="info"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row footer-bottom justify-content-between">
					<div class="col-lg-6">
						<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
					<div class="col-lg-2">
						<div class="social-icons">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>

			</div>
		</footer>
		<!--================ Start Footer Area =================-->
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="vendors/lightbox/simpleLightbox.min.js"></script>
	<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
	<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="vendors/jquery-ui/jquery-ui.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="vendors/counter-up/jquery.waypoints.min.js"></script>
	<script src="vendors/counter-up/jquery.counterup.js"></script>
	<script src="js/mail-script.js"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="js/gmaps.min.js"></script>
	<script src="js/theme.js"></script>
</body>

</html>