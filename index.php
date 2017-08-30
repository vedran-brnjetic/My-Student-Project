<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Vedran Brnjetic - croViking</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Vedran Brnjetic" />

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
		<?php include "structure/top-bar.php";?>

    <!--Top Nav-->
    <?php include "structure/top-nav.php"; ?>
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

<hr>
					<p class="lead">Check out my projects (coming soon! these are just the demo. &lt;edit&gt;<strong>Web Development</strong> projects are real&lt;\edit&gt;)</p>

					<ul class="nav nav-pills isotope-filter isotope-filter" data-sort-id="isotope-list" data-option-key="filter">
						<li data-option-value="*" class="active"><a href="#">Show All</a></li>
						<li data-option-value=".development"><a href="#">Development</a></li>
						<li data-option-value=".photography"><a href="#">Photography</a></li>
            <li data-option-value=".design"><a href="#">Design</a></li>
						<li data-option-value=".webdevelopment"><a href="#">Web Development</a></li>
					</ul>

				</div>


				<div class="row">

					<ul class="sort-destination isotope fullwidth" data-sort-id="isotope-list">

            <li class="isotope-item webdevelopment"><!-- item a2 -->
              <div class="item-box">
                <figure>
                  <a class="item-hover" href="http://endless.pro/">
                    <span class="overlay color2"></span>
                    <span class="inner">
                      <span class="block fa fa-plus fsize20"></span>
                      <strong>VIEW</strong> ENDLESS.PRO PROJECT
                    </span>
                  </a>
                  <img class="img-responsive" src="assets/images/demo/portfolio/endless-pro-website-600x403.jpg" width="260" height="260" alt="Helsingin Hitsaus Website">
                </figure>
              </div>
            </li>

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

            <li class="isotope-item webdevelopment"><!-- item a3 -->
              <div class="item-box">
                <figure>
                  <a class="item-hover" href="https://rugmaster.uk/">
                    <span class="overlay color2"></span>
                    <span class="inner">
                      <span class="block fa fa-plus fsize20"></span>
                      <strong>VIEW</strong> RUGMASTER PROJECT
                    </span>
                  </a>
                  <img class="img-responsive" src="assets/images/demo/portfolio/rugmaster-website-600x403.jpg" width="260" height="260" alt="Rugmaster.uk website">
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

            <li class="isotope-item webdevelopment"><!-- item a1 -->
							<div class="item-box">
								<figure>
									<a class="item-hover" href="http://www.helsinginhitsaus.com/">
										<span class="overlay color2"></span>
										<span class="inner">
											<span class="block fa fa-plus fsize20"></span>
											<strong>VIEW</strong> HELSINGIN HITSAUS PROJECT
										</span>
									</a>
									<img class="img-responsive" src="assets/images/demo/portfolio/helsingin-hitsaus-website-600x403.jpg" width="260" height="260" alt="Helsingin Hitsaus Website">
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
										<a href="mailto:Vedran.Brnjetic@metropolia.fi">Vedran.Brnjetic@metropolia.fi</a>
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
