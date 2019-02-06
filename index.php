
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Traveler</title>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="page">


	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">

			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.php">Traveler <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="destination.php">Airlines</a></li>
						<li class="has-dropdown">
							<a href="index.php">Travel</a>
							<ul class="dropdown">
								<li><a href="#">Tripoli</a></li>
								<li><a href="#">Benghazi</a></li>
								<li><a href="#">Mesrata</a></li>
								</ul>
						</li>
						<li><a href="hotel.php">Hotels</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/cover.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">


					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Planing Trip To Anywhere in The World??</h1>
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">

									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h2>Book Your Trip</h2>
											<form method="post">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Your Name</label>
														<input type="text" id="fullname" class="form-control" name="name">
													</div>
												</div>
                                                <div class="row form-group">
													<div class="col-md-12">
														<label for="Passport_number">Passport number</label>
														<input type="text"   id="Passport_number" class="form-control" name="passport">
													</div>
												</div>
                                                <div class="row form-group">
													<div class="col-md-12">
														<label for="Airlines">Airlines</label>
														<select name="#" id="destination" class="form-control">
															<option value="">Buraq Airline</option>
                                                            <option value="">Libyan Airline</option>
															<option value="">Afriqiyah Airline</option>
                                                            <option value="">Air Libya</option>
                                                            <option value="">Ghadames Airline</option>
                                                            <option value="">Air Kufra</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">From</label>
														<select name="#" id="destination" class="form-control">
															<option value="">Tripoli</option>
															<option value="">Benghazi</option>
															<option value="">Mesrata</option>
														</select>
													</div>
												</div>
                                                <div class="row form-group">
													<div class="col-md-12">
														<label for="destination">To</label>
														<select name="#" id="destination" class="form-control">
															<option value="">Benghazi</option>
                                                            <option value="">Tripoli</option>
															<option value="">Mesrata</option>
														</select>
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Date Travel</label>
														<input type="text" id="date-start" class="form-control">
                                                        <input type="radio" id="Flight_Hotel" >  Flight & Hotel
													</div>
												</div>
                                              

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" name="tt">
													</div>
												</div>
											</form>
										</div>

<?php
     if(isset($_POST['tt'])){
        $dbServername ="localhost";
        $dbUsername = "root";
        $dbPassword="";
        $dbName="booking";
        $conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) ;
     
                                 
       $sql = "INSERT INTO customer(first_name, passport)"
                    . "VALUES ('".$_POST['name']."','".$_POST['passport']."')";
            mysqli_query($conn,$sql);
     }
?>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</header>


	</div>

	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>How to Book A Flight Using our Website !</h2>
					<p>It Takes Only 3 Steps To succesfully Book A Trip Using Traveler....</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>The Destination</h3>
						<p>In order to Book a trip u must first choose ur destination by filling some basic info about the trip and choosing ur Destination from the home page.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>Airlines</h3>
						<p>After Choosing a Destination You Must Choose An Airline After That u may download Your ticket as a pdf file to make sure that ur flight is saved in a asafe place</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>Hotels</h3>
						<p>After Succesfully Booking your trip you may Choose a Hotel To Stay by contacting them</p>
					</div>
				</div>


			</div>
		</div>
	</div>
        

	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p>Here In Traveler we Aim to make your Booking experience as comfy and easy as possible , if you wish to contact us all you have to is Click on <a href="contact.php">Here</a>.</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Destination</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Tripoli</a></li>
							<li><a href="#">Mesrata</a></li>
							<li><a href="#">Benghazi</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Hotels</h3>
						<ul class="gtco-footer-links">
							<li><a href="#">Hotel AL-Safwa</a></li>
							<li><a href="#">Radisson Blu Al Mahary Hotel</a></li>
							<li><a href="#">Corinthia Hotel</a></li>
							<li><a href="#">Four Seasons Hotel</a></li>
							<li><a href="#">Tibesty Hotel</a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; 2019. All Rights Reserved.</small>
					</p>
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>

	

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
