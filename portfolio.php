<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Atropos - Responsive Multipurpose</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/superslides.css" rel="stylesheet" type="text/css" />

		<!-- SHOP CSS -->
		<link href="assets/css/portfolio.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout-responsive.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/orange.css" rel="stylesheet" type="text/css" /><!-- orange: default style -->
		<!--<link id="css_dark_skin" href="assets/css/layout-dark.css" rel="stylesheet" type="text/css" />--><!-- DARK SKIN -->

		<!-- styleswitcher - demo only -->
		<link href="assets/css/color_scheme/orange.css" rel="alternate stylesheet" type="text/css" title="orange" />
		<link href="assets/css/color_scheme/red.css" rel="alternate stylesheet" type="text/css" title="red" />
		<link href="assets/css/color_scheme/pink.css" rel="alternate stylesheet" type="text/css" title="pink" />
		<link href="assets/css/color_scheme/yellow.css" rel="alternate stylesheet" type="text/css" title="yellow" />
		<link href="assets/css/color_scheme/darkgreen.css" rel="alternate stylesheet" type="text/css" title="darkgreen" />
		<link href="assets/css/color_scheme/green.css" rel="alternate stylesheet" type="text/css" title="green" />
		<link href="assets/css/color_scheme/darkblue.css" rel="alternate stylesheet" type="text/css" title="darkblue" />
		<link href="assets/css/color_scheme/blue.css" rel="alternate stylesheet" type="text/css" title="blue" />
		<link href="assets/css/color_scheme/brown.css" rel="alternate stylesheet" type="text/css" title="brown" />
		<link href="assets/css/color_scheme/lightgrey.css" rel="alternate stylesheet" type="text/css" title="lightgrey" />
		<!-- /styleswitcher - demo only -->

		<!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->
		<link href="assets/plugins/styleswitcher/styleswitcher.css" rel="stylesheet" type="text/css" />

		<!-- Morenizr -->
		<script type="text/javascript" src="assets/plugins/modernizr.min.js"></script>
	</head>
	<body><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->

		<!-- Top Bar -->
		<header id="topHead">
			<div class="container">

				<!-- PHONE/EMAIL -->
				<span class="quick-contact pull-left">
					<i class="fa fa-phone"></i> 1800-555-1234 &bull;
					<a class="hidden-xs" href="mailto:mail@yourdomain.com">mail@domain.com</a>
				</span>
				<!-- /PHONE/EMAIL -->

				<!-- LANGUAGE -->
				<div class="btn-group pull-right hidden-xs">
					<button class="dropdown-toggle language" type="button" data-toggle="dropdown">
						<img src="assets/images/flags/us.png" width="16" height="11" alt="EN Language" /> English <span class="caret"></span>
					</button>

					<ul class="dropdown-menu">
						<li>
							<a href="#">
								<img src="assets/images/flags/us.png" width="16" height="11" alt="EN Language" /> [US] English
							</a>
						</li>
						<li>
							<a href="#">
								<img src="assets/images/flags/de.png" width="16" height="11" alt="DE Language" /> [DE] German
							</a>
						</li>
						<li>
							<a href="#">
								<img src="assets/images/flags/fr.png" width="16" height="11" alt="FR Language" /> [FR] French
							</a>
						</li>
						<li>
							<a href="#">
								<img src="assets/images/flags/ru.png" width="16" height="11" alt="RU Language" /> [RU] Russian
							</a>
						</li>
					</ul>
				</div>
				<!-- /LANGUAGE -->


				<!-- SIGN IN -->
				<div class="pull-right nav signin-dd">
					<a id="quick_sign_in" href="page-signin.html" data-toggle="dropdown"><i class="fa fa-users"></i><span class="hidden-xs"> Sign In</span></a>
					<div class="dropdown-menu" role="menu" aria-labelledby="quick_sign_in">

						<h4>Sign In</h4>
						<form action="page-signin.html" method="post" role="form">

							<div class="form-group"><!-- email -->
								<input required type="email" class="form-control" placeholder="Username or email">
							</div>

							<div class="input-group">

								<!-- password -->
								<input required type="password" class="form-control" placeholder="Password">

								<!-- submit button -->
								<span class="input-group-btn">
									<button class="btn btn-primary">Sign In</button>
								</span>

							</div>

							<div class="checkbox"><!-- remmember -->
								<label>
									<input type="checkbox"> Remember me &bull; <a href="page-signin.html">Forgot password?</a>
								</label>
							</div>

						</form>

						<hr />

						<a href="#" class="btn-facebook fullwidth radius3"><i class="fa fa-facebook"></i> Connect With Facebook</a>
						<a href="#" class="btn-twitter fullwidth radius3"><i class="fa fa-twitter"></i> Connect With Twitter</a>
						<!--<a href="#" class="btn-google-plus fullwidth radius3"><i class="fa fa-google-plus"></i> Connect With Google</a>-->

						<p class="bottom-create-account">
							<a href="page-signup.html">Manual create account</a>
						</p>
					</div>
				</div>
				<!-- /SIGN IN -->

				<!-- CART MOBILE BUTTON -->
				<a class="pull-right" id="btn-mobile-quick-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
				<!-- CART MOBILE BUTTON -->

				<!-- LINKS -->
				<div class="pull-right nav hidden-xs">
					<a href="page-about-us.html"><i class="fa fa-angle-right"></i> About</a>
					<a href="contact-us.html"><i class="fa fa-angle-right"></i> Contact</a>
				</div>
				<!-- /LINKS -->

			</div>
		</header>
		<!-- /Top Bar -->

		<!-- TOP NAV -->
		<header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->
			<div class="container">

				<!-- Mobile Menu Button -->
				<button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
					<i class="fa fa-bars"></i>
				</button>

				<!-- Logo text or image -->
				<a class="logo" href="index.html">
					<img src="assets/images/logo.png" alt="Atropos" />
				</a>

				<!-- Top Nav -->
				<div class="navbar-collapse nav-main-collapse collapse pull-right">
					<nav class="nav-main mega-menu">
						<ul class="nav nav-pills nav-main scroll-menu" id="topMain">
							<li class="dropdown">
								<a class="dropdown-toggle" href="#">
									Home <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li class="dropdown-submenu"><a href="#">Revolution Slider V4</a>
										<ul class="dropdown-menu">
											<li><a href="revolution-half-slider.html">Half Slider</a></li>
											<li><a href="revolution-full-slider.html">Full Slider</a></li>
											<li><a href="revolution-video.html">Full Video</a></li>
											<li><a href="revolution-ken-burns.html">Ken Burns</a></li>
											<li><a href="revolution-official-1.html">More Examples</a></li>
										</ul>
									</li>
									<li><a href="start.html#rs5" data-toggle="tooltip" data-placement="top" title="" data-original-title="52 More RS5 Templates">Revolution Slider V5 &nbsp; <span class="label label-danger">new</span></a></li>
									<li class="dropdown-submenu"><a href="#">Superslides Slider</a>
										<ul class="dropdown-menu">
											<li><a href="superslides-slider-half.html">Half Slider</a></li>
											<li><a href="superslides-slider-full.html">Full Slider</a></li>
											<li><a href="superslides-video.html">Half Video</a></li>
											<li><a href="superslides-video-full.html">Full Video</a></li>
										</ul>
									</li>
									<li class="divider"></li>
									<li><a href="index-extended.html">Extended</a></li>
									<li><a href="portfolio-home.html">Portfolio</a></li>
									<li><a href="shop-home.html">Shop</a></li>
									<li><a href="realestate-home.html">Real Estate</a></li>
									<li><a href="church-home.html">Church</a></li>
									<li><a href="medical-home.html">Medical</a></li>
									<li><a href="college-home.html">College</a></li>
									<li><a href="onepage-superslides.html" target="_blank">Onepage - Superslides</a></li>
									<li><a href="onepage-revolution.html" target="_blank">Onepage - Revolution</a></li>
									<li><a href="index-more.html">More...</a></li>
								</ul>
							</li>
							<li class="dropdown mega-menu-item mega-menu-two-columns">
								<a class="dropdown-toggle" href="#">
									Pages <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="mega-menu-content">
											<div class="row">

												<div class="col-md-6">
													<ul class="sub-menu">
														<li>
															<ul class="sub-menu">

																<li><a href="shortcodes-rows.html"><i class="fa fa-star-o"></i> Shortcodes</a></li>
																<li><a href="page-about-us.html"><i class="fa fa-check-square-o"></i> About Us</a></li>
																<li><a href="page-about-me.html"><i class="fa fa-check-square-o"></i> About Me</a></li>
																<li><a href="page-team.html"><i class="fa fa-check-square-o"></i> Team</a></li>
																<li><a href="page-services.html"><i class="fa fa-check-square-o"></i> Services</a></li>
																<li><a href="page-faq.html"><i class="fa fa-check-square-o"></i> FAQ</a></li>
																<li><a href="page-support.html"><i class="fa fa-check-square-o"></i> Support</a></li>
																<li><a href="page-privacy-policy.html"><i class="fa fa-check-square-o"></i> Privacy Policy</a></li>
																<li><a href="page-terms-and-conditions.html"><i class="fa fa-check-square-o"></i> Terms Page</a></li>
																<li><a href="page-invoice.html"><i class="fa fa-check-square-o"></i> Invoice</a></li>
																<li class="dropdown-submenu">
																	<a href="#"><i class="fa fa-check-square-o"></i> Contact</a>
																	<ul class="dropdown-menu">
																		<li><a href="contact-us.html">Version 1</a></li>
																		<li><a href="contact-us-2.html">Version 2</a></li>
																		<li><a href="contact-us-3.html">Version 3</a></li>
																		<li><a href="contact-us-4.html">Version 4</a></li>
																	</ul>
																</li>
																<li><a href="page-sitemap.html"><i class="fa fa-sitemap"></i> Sitemap</a></li>
															</ul>
														</li>
													</ul>
												</div>

												<div class="col-md-6">
													<ul class="sub-menu">
														<li>
															<ul class="sub-menu">
																<li><a href="page-testimonials.html"><i class="fa fa-check-square-o"></i> Testimonials</a></li>
																<li><a href="page-pricing.html"><i class="fa fa-check-square-o"></i> Pricing</a></li>
																<li><a href="page-pricing-extended.html"><i class="fa fa-check-square-o"></i> Pricing Extended</a></li>
																<li><a href="page-signin.html"><i class="fa fa-check-square-o"></i> Login</a></li>
																<li><a href="page-signup.html"><i class="fa fa-check-square-o"></i> Register</a></li>
																<li><a href="page-404.html"><i class="fa fa-check-square"></i> 404 Error</a></li>
																<li><a href="page-maintenance.html"><i class="fa fa-check-square"></i> Maintenance</a></li>
																<li class="dropdown-submenu">
																	<a href="#"><i class="fa fa-check-square"></i> Coming Soon</a>
																	<ul class="dropdown-menu">
																		<li><a href="page-coming-soon-image.html">Coming Soon - Image</a></li>
																		<li><a href="page-coming-soon-video.html">Coming Soon - Video</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu">
																	<a href="#"><i class="fa fa-check-square"></i> Custom Header</a>
																	<ul class="dropdown-menu">
																		<li><a href="page-header-basic.html">Basic</a></li>
																		<li><a href="page-header-image.html">Image</a></li>
																		<li><a href="page-header-overlay1.html">Overlay 1</a></li>
																		<li><a href="page-header-overlay2.html">Overlay 2</a></li>
																		<li><a href="page-header-overlay3.html">Overlay 3</a></li>
																		<li><a href="page-header-delayed-parallax.html">Delayed Parallax</a></li>
																		<li><a href="page-header-standard-parallax.html">Standard Parallax</a></li>
																	</ul>
																</li>
																<li><a href="page-full-width.html"><i class="fa fa-check-square-o"></i> Full width</a></li>
																<li><a href="page-left-sidebar.html"><i class="fa fa-check-square-o"></i> Left Sidebar</a></li>
																<li><a href="page-right-sidebar.html"><i class="fa fa-check-square-o"></i> Right Sidebar</a></li>
																<li><a href="email-template.html"><i class="fa fa-envelope"></i>Email Template</a></li>
															</ul>
														</li>
													</ul>
												</div>

											</div>
										</div>
									</li>
								</ul>
							</li>
							<li class="dropdown mega-menu-item mega-menu-fullwidth">
								<a class="dropdown-toggle" href="#">
									Features <i class="fa fa-angle-down"></i>
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="mega-menu-content">
											<div class="row">
												<div class="col-md-3">
													<ul class="sub-menu">
														<li>
															<span class="mega-menu-sub-title">General Features</span>
															<ul class="sub-menu">
																<li><a href="feature-grid-system.html">Grid System</a></li>
																<li><a href="feature-icons.html">Icons</a></li>
																<li><a href="feature-pricing-tables.html"><em>Pricing Tables</em></a></li>
																<li><a href="feature-testimonials.html"><em>Testimonials</em></a></li>
																<li><a href="email-template.html"><em>Email Template</em></a></li>
																<li><a href="shortcodes-rows.html"><em>Shortcodes</em></a></li>
																<li><a href="feature-animations.html">Animations</a></li>
																<li><a href="feature-typograpy.html">Typograpy</a></li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-3">
													<ul class="sub-menu">
														<li>
															<span class="mega-menu-sub-title">Sliders</span>
															<ul class="sub-menu">
																<li><a href="feature-content-carousel.html">Content Carousel</a></li>
																<li><a href="revolution-official-1.html">(17) Premium Revolution Slider</a></li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-3">
													<ul class="sub-menu">
														<li>
															<span class="mega-menu-sub-title">Headers</span>
															<ul class="sub-menu">
																<li><a href="header-1.html">Header Version 1</a></li>
																<li><a href="header-2.html">Header Version 2</a></li>
																<li><a href="header-3.html">Header Version 3</a></li>
																<li><a href="header-4.html">Header Version 4</a></li>
															</ul>
														</li>
													</ul>
												</div>
												<div class="col-md-3">
													<ul class="sub-menu">
														<li>
															<span class="mega-menu-sub-title">Unique Bonuses</span>
															<ul class="sub-menu">
																<li><a href="onepage-superslides.html" target="_blank">Onepage - Superslides</a></li>
																<li><a href="onepage-revolution.html" target="_blank">Onepage - Revolution</a></li>
																<li><a href="email-template.html">Email Template</a></li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</li>




						</ul>
					</nav>
				</div>
				<!-- /Top Nav -->

			</div>
		</header>

		<span id="header_shadow"></span>
		<!-- /TOP NAV -->



		<!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->


		<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-angle-double-right"></i></div>
		<!-- /STYLESWITCHER -->



		<!-- WRAPPER -->
		<div id="wrapper">

			<!-- PAGE TITLE -->
			<header id="page-title"> <!-- style="background-image:url('assets/images/demo/parallax_bg.jpg')" -->
				<!--
					Enable only if bright background image used
					<span class="overlay"></span>
				-->

				<div class="container">
					<h1>Portfolio!</h1>

					<ul class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li><a href="#">Portfolio</a></li>
						<li class="active">Gallery</li>
					</ul>
				</div>
			</header>

			<section id="portfolio">

				<div class="container">

					<h2><strong>Explore</strong> my gallery</h2>

					<p class="lead">Check out my projects (coming soon! these are just the demo.)</p>

					<ul class="nav nav-pills isotope-filter isotope-filter" data-sort-id="isotope-list" data-option-key="filter">
						<li data-option-value="*" class="active"><a href="#">Show All</a></li>
						<li data-option-value=".development"><a href="#">Development</a></li>
						<li data-option-value=".photography"><a href="#">Photography</a></li>
						<li data-option-value=".design"><a href="#">Design</a></li>
					</ul>

				</div>


				<div class="row">

					<ul class="sort-destination isotope fullwidth" data-sort-id="isotope-list">

						<li class="isotope-item development"><!-- item -->
							<div class="item-box">
								<figure>
									<a class="item-hover" href="portfolio-single.html">
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> IMAGE
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/scouter-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item photography"><!-- item 2 -->
							<div class="item-box">
								<figure>
									<a class="item-hover lightbox" href="assets/images/demo/portfolio/black-kitty-600x403.jpg" data-plugin-options='{"type":"image"}'>
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> IMAGE
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/black-kitty-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item design"><!-- item 3 -->
							<div class="item-box">
								<figure>
									<a class="item-hover lightbox" href="http://player.vimeo.com/video/25076865" data-plugin-options='{"type":"iframe"}'>
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> VIDEO
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/merchant2-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item photography"><!-- item 4 -->
							<div class="item-box">
								<figure>
									<a class="item-hover" href="portfolio-single.html">
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> PROJECT
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/flippin-the-bird1-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item development"><!-- item 5 -->
							<div class="item-box">
								<figure>
									<a class="item-hover lightbox" href="assets/images/demo/portfolio/night_to_remember1-600x403.jpg" data-plugin-options='{"type":"image"}'>
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> IMAGE
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/night_to_remember1-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item design"><!-- item 6 -->
							<div class="item-box">
								<figure>
									<a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> VIDEO
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/spacebound-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item photography design"><!-- item 7 -->
							<div class="item-box">
								<figure>
									<a class="item-hover" href="portfolio-single.html">
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> PROJECT
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/be-my-guest1-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item development"><!-- item 8 -->
							<div class="item-box">
								<figure>
									<a class="item-hover lightbox" href="assets/images/demo/portfolio/black-box5-600x403.jpg" data-plugin-options='{"type":"image"}'>
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> IMAGE
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/black-box5-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item development"><!-- item -->
							<div class="item-box">
								<figure>
									<a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> VIDEO
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/weather-app-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item photography"><!-- item 2 -->
							<div class="item-box">
								<figure>
									<a class="item-hover" href="portfolio-single.html">
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> PROJECT
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/theMoose-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item design"><!-- item 3 -->
							<div class="item-box">
								<figure>
									<a class="item-hover lightbox" href="assets/images/demo/portfolio/tumblr_mopqj9QUeq1st5lhmo1_12801-600x403.jpg" data-plugin-options='{"type":"image"}'>
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> IMAGE
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/tumblr_mopqj9QUeq1st5lhmo1_12801-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

						<li class="isotope-item photography"><!-- item 4 -->
							<div class="item-box">
								<figure>
									<a class="item-hover lightbox" href="http://www.youtube.com/watch?v=W7Las-MJnJo" data-plugin-options='{"type":"iframe"}'>
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> VIDEO
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/scouter-600x403.jpg" width="260" height="260" alt="">
								</figure>
							</div>
						</li>

					</ul>

				</div><!-- /.masonry-container -->

				<div class="container">

					<!-- CALLOUT -->
          <!--
					<div class="bs-callout text-center nomargin-bottom">
						<h3>Do you like what you see? <a href="contact-us.html" target="_blank" class="btn btn-primary btn-lg">Yes, let's work together!</a></h3>
					</div>-->
					<!-- /CALLOUT -->

				</div>


			</section>

		</div>
		<!-- /WRAPPER -->



		<!-- FOOTER -->
		<footer>

			<!-- copyright , scrollTo Top -->
			<div class="footer-bar">
				<div class="container">
					<span class="copyright">Copyright &copy; Your Company, LLC . All Rights Reserved.</span>
					<a class="toTop" href="#topNav">BACK TO TOP <i class="fa fa-arrow-circle-up"></i></a>
				</div>
			</div>
			<!-- copyright , scrollTo Top -->


			<!-- footer content -->
			<div class="footer-content">
				<div class="container">

					<div class="row">


						<!-- FOOTER CONTACT INFO -->
						<div class="column col-md-4">
							<h3>CONTACT</h3>

							<p class="contact-desc">
								You can have a website like this. Just ask me.
							</p>
							<address class="font-opensans">
								<ul>
									<li class="footer-sprite address">
										Kirstinharju 3c 37<br />
										Espoo<br />
										Finland<br />
									</li>
									<li class="footer-sprite phone">
										<a href="tel:+358413639501">Phone: +358 (0)41 363 9501</a>
									</li>
									<li class="footer-sprite email">
										<a href="mailto:vedranb@metropolia.fi">vedranb@metropolia.fi</a>
									</li>
								</ul>
							</address>

						</div>
						<!-- /FOOTER CONTACT INFO -->


						<!-- FOOTER LOGO -->
						<div class="column logo col-md-4 text-center">
							<div class="logo-content">
								<!--<img class="animate_fade_in" src="assets/images/logo_footer.png" width="200" alt="" />-->
								<h4>Cro Viking</h4>
							</div>
						</div>
						<!-- /FOOTER LOGO -->


						<!-- FOOTER LATEST POSTS --><!--
						<div class="column col-md-4 text-right">
							<h3>RECENT POSTS</h3>

							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-single-sidebar-left.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>
							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-single-sidebar-left.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>
							<div class="post-item">
								<small>JANUARY 2, 2014 BY ADMIN</small>
								<h3><a href="blog-single-sidebar-left.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a></h3>
							</div>

							<a href="blog-masonry-sidebar.html" class="view-more pull-right">View Blog <i class="fa fa-arrow-right"></i></a>

						</div>-->
						<!-- /FOOTER LATEST POSTS -->

					</div>

				</div>
			</div>
			<!-- footer content -->

		</footer>
		<!-- /FOOTER -->



		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript" src="assets/plugins/jquery-2.2.3.min.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery.cookie.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery.appear.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery.isotope.js"></script>
		<script type="text/javascript" src="assets/plugins/masonry.js"></script>

		<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script type="text/javascript" src="assets/plugins/stellar/jquery.stellar.min.js"></script>
		<script type="text/javascript" src="assets/plugins/knob/js/jquery.knob.js"></script>
		<script type="text/javascript" src="assets/plugins/jquery.backstretch.min.js"></script>
		<script type="text/javascript" src="assets/plugins/superslides/dist/jquery.superslides.min.js"></script>
		<script type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script><!-- STYLESWITCHER - REMOVE ON PRODUCTION/DEVELOPMENT -->


		<script type="text/javascript" src="assets/js/scripts.js"></script>


		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
		<!--<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-XXXXX-X', 'domainname.com');
			ga('send', 'pageview');
		</script>
		-->

	</body>
</html>