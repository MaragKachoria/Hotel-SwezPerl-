<?php
error_reporting(0);
include('db.php');
session_start();

$qry = "SELECT countdeluxe FROM incr";
$exe = mysqli_query($con, $qry);
$row = mysqli_fetch_row($exe);

$qrysi = "SELECT countsingle FROM incr";
$exesi = mysqli_query($con, $qrysi);
$rowsi = mysqli_fetch_row($exesi);

$qryg = "SELECT countguest FROM incr";
$exeg = mysqli_query($con, $qryg);
$rowg = mysqli_fetch_row($exeg);

$qrys = "SELECT countsuper FROM incr";
$exes = mysqli_query($con, $qrys);
$rows = mysqli_fetch_row($exes);

$usrmail = $_SESSION['mail'];
$uname = "SELECT fname FROM signin WHERE email = '$usrmail'";
$uquery = mysqli_query($con, $uname);
$usrrow = mysqli_fetch_row($uquery);

$ulname = "SELECT lname FROM signin WHERE email = '$usrmail'";
$ulquery = mysqli_query($con, $ulname);
$usrlrow = mysqli_fetch_row($ulquery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Site Fav Icon -->
	<link rel="shortcut icon" href="swez.ico" type="image/x-icon">
	
	<style>
		#btn {
			outline: none;
		}

		#nt {
			position: relative;
			bottom: 30px;
			left: 30px;
		}

		@media screen and (min-width:320px) and (max-width: 480px) {
			#guestr {
				margin-top: 25px;
			}

			#singler {
				margin-top: 25px;
			}

			#nt {
				position: relative;
				left: 40px;
			}

			#sel {
				position: relative;
				bottom: 10px;
			}
		}

		@media screen and (min-width:768px) and (min-height: 1024px) {
			#guestr {
				margin-top: 25px;
			}

			#singler {
				position: relative;
				bottom: 450px;
			}

			#nt {
				position: relative;
				left: 35px;
			}
		}

		@media screen and (min-width:769px) and (max-width: 1024px) {

			#nt {
				position: relative;
				left: 5px;
			}
		}

		@media screen and (min-width:481px) and (max-width: 767px) {
			#guestr {
				margin-top: 25px;
			}

			#singler {
				margin-top: 25px;
			}

			#nt {
				position: relative;
				left: 25px;
			}

			#sel {
				position: relative;
				bottom: 10px;
			}
		}

		@media screen and (max-width:280px) {
			#guestr {
				margin-top: 25px;
			}

			#singler {
				margin-top: 25px;
			}

			#star {
				position: relative;
				top: 15px;
			}

			#nt {
				position: absolute;
				top: 310px;
				left: 40px;
			}

			#selz {
				position: relative;
				top: 14px;
			}

			#sel {
				position: relative;
				top: 5px;
			}
		}

		input[type=number]::-webkit-inner-spin-button,
		input[type=number]::-webkit-outer-spin-button {
			-webkit-appearance: none;
			margin: 0;
		}

		#logo {
			right: 120px;
		}

		@media screen and (min-width:280px) and (max-width:1300px) {
			#logo {
			right: 25px;
			}
		}
	</style>
	<title>SWEZ PEARL</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
	<!--//fonts-->
	<!-- Sweet alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
</head>

<body>
	<!-- header -->
	<div class="w3_navigation">
		<div class="container" style="height: 100px;">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" style="position: relative; top: 18px;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<h1><a class="navbar-brand" href="index.php"><img src="swez.png" width="115px" height="90px" alt="" id="logo" style="position: relative; bottom: 12px;">
						<!-- SWEZ <span>PEARL</span> -->
							<!-- <p class="logo_w3l_agile_caption">Your Dreamy Resort</p> -->
						</a></h1>
					<!-- <?php if (isset($_SESSION['mail'])) {
					?>
						<div class="btn-group">
							<button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" value=" <?php echo $usrrow[0] . " " . $usrlrow[0]; ?> ">
							<?php echo $usrrow[0] . " " . $usrlrow[0]; ?>
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Action</a></li>
								<li><a class="dropdown-item" href="#">Another action</a></li>
								<li><a class="dropdown-item" href="#">Something else here</a></li>
								<li>
									<hr class="dropdown-divider">
								</li>
								<li><a class="dropdown-item" href="sign/logout.php">Logout</a></li>
							</ul>
						</div>
					<?php
					} ?> -->
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1" style="margin-top: 18px;">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<!-- <li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li> -->
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
							<?php
							if (!isset($_SESSION['mail'])) { ?>
								<li class="menu__item"><a href="sign/signin.php" class="menu__link">Sign in / Login</a></li>
							<?php }
							if (isset($_SESSION['mail'])) {
							?>
								<!-- Example single danger button -->

								<li class="menu__item"><a href="sign/logout.php" class="menu__link">Logout</a></li>
							<?php } ?>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
	<!-- //header -->
	<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									
									<h4>SWEZ PEARL</h4>
									<center>
										<h3>We know what you love</h3>
									</center>
									<p>Welcome to our hotels</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>SWEZ PEARL</h4>
									<h3>Stay with friends & families</h3>
									<p>Come & enjoy precious moment with us</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h4>SWEZ PEARL</h4>
									<h3>want luxurious vacation?</h3>
									<p>Get accommodation today</p>
									<div class="agileits_w3layouts_more menu__item">
										<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
		<div class="thim-click-to-bottom">
			<a href="#about" class="scroll">
				<i class="fa fa-long-arrow-down" aria-hidden="true"></i>
			</a>
		</div>
	</div>
	<!-- //banner -->
	<!--//Header-->
	<!-- //Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>SWEZ <span>PEARL</span></h4>
					<img src="images/1.jpg" alt=" " class="img-responsive">
					<center>
						<h5>We know what you love</h5>
					</center>
					<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
				</div>
			</div>
		</div>
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="agileits_banner_bottom">
				<h3><span>Experience a good stay, enjoy fantastic offers</span> Find our friendly welcoming reception</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">MASTER BEDROOMS</h4>
							<span class="cbp-ig-category">SWEZ PEARL</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">SEA VIEW BALCONY</h4>
							<span class="cbp-ig-category">SWEZ PEARL</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">LARGE CAFE</h4>
							<span class="cbp-ig-category">SWEZ PEARL</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI COVERAGE</h4>
							<span class="cbp-ig-category">SWEZ PEARL</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner-bottom -->
	<!-- /about -->
	<div class="about-wthree" id="about">
		<div class="container">
			<div class="ab-w3l-spa">
				<h3 class="title-w3-agileits title-black-wthree">About Our SWEZ PEARL</h3>
				<p class="about-para-w3ls">The Vibrant Swez Pearl is Well Known for it's Lush Green Campus and magnificent amenities and it's located at the peaceful and enjoyable environment. We Provide The quality room services, The quantity of the things you need. Our resort is the choice of families and friends for the vactions. So why're you waiting? Just come at Swez and enjoy the best. Thanks for visit.</p>
				<img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
				<div class="w3l-slider-img">
					<img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
				</div>
				<div class="w3ls-info-about">
					<h4>You'll love all the amenities we offer!</h4>
					<p>Choose the swez and enjoy the best </p>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //about -->
	<!--sevices-->
	<div class="advantages">
		<div class="container">
			<div class="advantages-main">
				<h3 class="title-w3-agileits">Our Services</h3>
				<div class="advantage-bottom">
					<div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
						<div class="advantage-block ">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
							<h4>Stay First, Pay After! </h4>
							<p>We're offering you the stay first, pay after service. Means you've to stay here first, and pay after your luxurious stay.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>

						</div>
					</div>
					<div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
						<div class="advantage-block">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<h4>24 Hour Restaurant</h4>
							<p>Our restaurant is always open. Means you can enjoy our delicious meal at any time. Relish the food service of swez.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>24-hour Concierge service</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//sevices-->
	<!-- team -->
	<!-- <div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Meet Our Team</h3>
			<div id="horizontalTab">
					<ul class="resp-tabs-list">
					<li>
						<img src="images/teams1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams4.jpg" alt=" " class="img-responsive" />
					</li>
					</ul>
					<div class="resp-tabs-container">
					<div class="tab1">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Lucas Jimenez</h4>
							<span>Manager</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab2">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Sarah Connor</h4>
							<span>Receptionist</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>	
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab3">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Ivan Simpson</h4>
							<span>Manager</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab4">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Marc Gutierrez</h4>
							<span>Receptionist</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						<div class="social-bnr-agileits footer-icons-agileinfo">
							<ul class="social-icons3">
								<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
								<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
								<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
								<li><a href="#" class="fa fa-rss icon-border rss"> </a></li>
							</ul>
						</div>							
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
			</div>
	</div>
</div> -->
	<!-- //team -->
	<!-- Gallery -->
	<section class="portfolio-w3ls" id="gallery"><br><br>
		<h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>SWEZ PEARL</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</section>
	<!-- //gallery -->
	<!-- rooms & rates -->
	<div class="plans-section" id="rooms">
		<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
			<div class="priceing-table-main">
				<div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r1.jpg" alt=" " class="img-responsive" />
							<h4>Deluxe Room</h4>
						</div>
						<div class="price-gd-bottom">

							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" id="star" aria-hidden="true"></i></li>
									<?php if ($row[0] == 1) { ?>
										<li><a href="#" class="menu__link" id="selz" data-toggle="modal" data-target="#deluxe">Details</a></li>
									<?php } ?>
									<?php if ($row[0] == 0) { ?>
										<div>
											<li id="sel"><a href="#" class="menu__link" data-toggle="modal" style="margin-top: 5px; position: relative; bottom: 6px;" data-target="#deluxe">Details</a></li>
										</div>
									<?php } ?>
								</ul>
							</div>
							<div class="price-selet">
								<?php if ($row[0] == 1) { ?>
									<h3><span>&#8377;</span>3000</h3>
									<a href="admin/reservedeluxe.php">Book Now</a>
								<?php } ?>
								<?php if ($row[0] == 0) { ?>
									<h3><span id="nt">Not available</span></h3>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>

				<!-- Deluxe Modal -->
				<div class="modal fade" id="deluxe" tabindex="-1" role="dialog">
					<!-- Modal1 -->
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4>SWEZ <span>PEARL</span></h4>
								<img src="images/g4.jpg" alt=" " class="img-responsive">
								<center>
									<h5>Deluxe room</h5>
								</center>
								<p>The luxurious deluxe room is a room for couples. Our deluxe room is the choice of couples. This room includes all the emenities and comfortability what you want.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Superior Modal -->
				<div class="modal fade" id="superior" tabindex="-1" role="dialog">
					<!-- Modal1 -->
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4>SWEZ <span>PEARL</span></h4>
								<img src="images/super.jpeg" alt=" " class="img-responsive">
								<center>
									<h5>Superior room</h5>
								</center>
								<p>This is the most premium and luxurious room of our resort. The superior room provides all the amenities and services which you want. Enjoy the superiorness of this super comfortable superior room.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Guest House Modal -->
				<div class="modal fade" id="guest" tabindex="-1" role="dialog">
					<!-- Modal1 -->
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4>SWEZ <span>PEARL</span></h4>
								<img src="images/guesthouse.jpeg" alt=" " class="img-responsive">
								<center>
									<h5>Guest house</h5>
								</center>
								<p>The lavish guest house is a stay for families. The guest house is the choice of families. The guest house includes a sea view room which makes it more enjoyable.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Single Modal -->
				<div class="modal fade" id="single" tabindex="-1" role="dialog">
					<!-- Modal1 -->
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4>SWEZ <span>PEARL</span></h4>
								<img src="images/single.jpg" alt=" " class="img-responsive">
								<center>
									<h5>Single room</h5>
								</center>
								<p>This elementary stay is comfortable for whom who don't want any luxurious amenities. Our single room is a cheap stay compare to other stays. It's a choice of middle class people. This room includes some basic and general emenities.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-3 price-grid " id="luxuryr">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r2.jpg" alt=" " class="img-responsive" />
							<h4>Superior Room</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" id="star" aria-hidden="true"></i></li>
									<?php if ($rows[0] == 1) { ?>
										<li><a href="#" id="selz" class="menu__link" data-toggle="modal" data-target="#superior">Details</a></li>
									<?php } ?>
									<?php if ($rows[0] == 0) { ?>
										<div>
											<li id="sel"><a href="#" class="menu__link" data-toggle="modal" style="margin-top: 5px; position: relative; bottom: 6px;" data-target="#superior">Details</a></li>
										</div>
									<?php } ?>
								</ul>
							</div>
							<div class="price-selet">
								<?php if ($rows[0] == 1) { ?>
									<h3><span>&#8377;</span>3500</h3>
									<a href="admin/reservesuperior.php">Book Now</a>
								<?php } ?>
								<?php if ($rows[0] == 0) { ?>
									<h3><span id="nt">Not available</span></h3>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost" id="guestr">
					<div class="price-block agile">
						<div class="price-gd-top">
							<img src="images/r3.jpg" alt=" " class="img-responsive" />
							<h4>Guest House</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" id="star" aria-hidden="true"></i></li>
									<?php if ($rowg[0] == 1) { ?>
										<li><a href="#" class="menu__link" id="selz" data-toggle="modal" data-target="#guest">Details</a></li>
									<?php } ?>
									<?php if ($rowg[0] == 0) { ?>
										<div>
											<li id="sel"><a href="#" class="menu__link" data-toggle="modal" style="margin-top: 5px; position: relative; bottom: 5px;" data-target="#guest">Details</a></li>
										</div>
									<?php } ?>
								</ul>
							</div>
							<div class="price-selet">
								<?php if ($rowg[0] == 1) { ?>
									<h3><span>&#8377;</span>4500</h3>
									<a href="admin/reserveguest.php">Book Now</a>
								<?php } ?>
								<?php if ($rowg[0] == 0) { ?>
									<h3><span id="nt">Not available</span></h3>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost" id="singler">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/r4.jpg" alt=" " class="img-responsive" />
							<h4>Single Room</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" id="star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" id="star" aria-hidden="true"></i></li>
									<?php if ($rowsi[0] == 1) { ?>
										<li><a href="#" class="menu__link" id="selz" data-toggle="modal" data-target="#single">Details</a></li>
									<?php } ?>
									<?php if ($rowsi[0] == 0) { ?>
										<div>
											<li id="sel"><a href="#" class="menu__link" data-toggle="modal" style="margin-top: 5px; position: relative; bottom: 6px;" data-target="#single">Details</a></li>
										</div>
									<?php } ?>
								</ul>
							</div>
							<div class="price-selet">
								<?php if ($rowsi[0] == 1) { ?>
									<h3><span>&#8377;</span>2000</h3>
									<a href="admin/reservesingle.php">Book Now</a>
								<?php } ?>
								<?php if ($rowsi[0] == 0) { ?>
									<h3><span id="nt">Not available</span></h3>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--// rooms & rates -->
	<!-- visitors -->
	<!-- <div class="w3l-visitors-agile">
		<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">What other visitors experienced</h3>
		</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus.
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula,
									at imperdiet urna. </p>
								<h5>Julia Rose</h5>
								<p>Germany</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus.
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula,
									at imperdiet urna. </p>
								<h5>Jahnatan Smith</h5>
								<p>United States</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus.
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula,
									at imperdiet urna. </p>
								<h5>Rosalind Cloer</h5>
								<p>Italy</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/c4.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h4>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									Worth to come again
								</h4>
								<p>Sed tempus vestibulum lacus blandit faucibus.
									Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula,
									at imperdiet urna. </p>
								<h5>Amie Bublitz</h5>
								<p>Switzerland</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div> -->
	<!-- visitors -->
	<!-- contact -->
	<section class="contact-w3ls" id="contact">
		<div class="container">
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
				<div class="contact-agileits">
					<h4>Contact Us</h4>
					<!-- <p class="contact-agile2">Sign Up For Our News Letters</p> -->
					<form method="post" name="sentMessage" id="contactForm">
						<div class="control-group form-group">

							<label class="contact-p1">Full Name:</label>
							<input type="text" class="form-control" name="name" id="name" required>
							<p class="help-block"></p>

						</div>
						<div class="control-group form-group">

							<label class="contact-p1">Phone Number:</label>
							<input type="number" maxlength="10" class="form-control" name="phone" id="phone" required>
							<p class="help-block"></p>

						</div>
						<div class="control-group form-group">

							<label class="contact-p1">Email Address:</label>
							<input type="email" class="form-control" name="email" id="email" required>
							<p class="help-block"></p>

						</div>

						<div class="control-group form-group">

							<label class="contact-p1">Your query:</label>
							<textarea name="query" class="form-control" id="query" cols="3" rows="7" required style="background-color: transparent; color: white; font-size: large; resize: none;"></textarea>
							<p class="help-block"></p>

						</div>

						<input type="submit" name="sub" id="btn" value="Send Now" class="btn btn-primary">
					</form>
					<?php
					if (isset($_POST['sub'])) {
						$name = $_POST['name'];
						$phone = $_POST['phone'];
						$email = $_POST['email'];
						$qr = $_POST['query'];
						$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`query`) VALUES ('$name','$phone','$email',now(),'$qr')";
						$qry = mysqli_query($con, $sql);
					?>
						<script>
							function demo() {
								swal("Your query has been sent successfully", "You'll got response from us in mail", "success").then(function() {
									window.location.href = "#contact";
								});
							}
							demo();
						</script>
					<?php } ?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
				<h4>Connect With Us</h4>
				<p class="contact-agile1"><strong>Phone : 89172 40820</strong></p>
				<p class="contact-agile1"><strong>Email : swezpearl@gmail.com</strong> <a href=""></a></p>
				<p class="contact-agile1"><strong>Address :</strong> Near rotary dolls museum,Yagnik Road, Rajkot,Gujarat.</p>

				<!-- <div class="social-bnr-agileits footer-icons-agileinfo">
					<ul class="social-icons3">
						<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
						<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

					</ul>
				</div> -->
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662"></iframe> -->
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<!-- /contact -->
	<div class="copy">
		<p>© 2023 SWEZ PEARL . All Rights Reserved | Design by <a href="index.php">SWEZ PEARL</a> </p>
	</div>
	<!--/footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- contact form -->
	<script src="js/jqBootstrapValidation.js"></script>

	<!-- /contact form -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function() {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- gallery popup -->
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //gallery popup -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function(slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!-- //flexSlider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function() {
			// Slideshow 4
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: false,
				speed: 500,
				namespace: "callbacks",
				before: function() {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function() {
					$('.events').append("<li>after event fired.</li>");
				}
			});

		});
	</script>
	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!--tabs-->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function() {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true, // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function(event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--//tabs-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>

	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>

	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	<!-- Sweet alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- Number MaxLength JS -->
	<script>
		document.querySelectorAll('input[type="number"]').forEach(input => {
			input.oninput = () => {
				if (input.value.length > input.maxLength) {
					input.value = input.value.slice(0, input.maxLength);
				}
			};
		});
	</script>
</body>

</html>