<?php $page_type="blog";?>
<?php include 'structure/htmlhead.php';?>

	<body><!-- Available classes for body: boxed , pattern1...pattern10 . Background Image - example add: data-background="assets/images/boxed_background/1.jpg"  -->
    <!-- Top Bar -->
		<?php include "structure/top-bar.php";?>

    <!--Top Nav-->
    <?php include "structure/top-nav.php"; ?>


		<span id="header_shadow"></span>
		<!-- /TOP NAV -->

    <!-- WRAPPER -->
		<div id="wrapper">

			<!-- PAGE TITLE -->
			<?php include 'structure/page_header.php'; ?>

			<?php include 'web-dev.php'; ?>

		</div>
		<!-- /WRAPPER -->



		<!-- FOOTER -->
		<?php include 'structure/page_footer.php'; ?>
		<!-- /FOOTER -->



		<!-- JAVASCRIPT FILES -->
		<?php include 'structure/js.php'; ?>


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
