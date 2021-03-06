<?php session_start(); ?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>ArtPad | Events</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">


	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
		 However, there is a blank style.css in the css directory should you prefer -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/gumby.css">
	<link rel="stylesheet" href="sass/_custom.css">

	<script src="js/libs/modernizr-2.6.2.min.js"></script>

	<script type="text/javascript">
		function mysubmit() {
			var myform = document.getElementById("myForm");
			myform.reset();
		}
	</script>
</head>

<body>

	<div class="modal" id="modalform">
		<div class="content" id="formmodal">
			<a class="close switch" gumby-trigger="|#modalform">close</a>
			<div class="row">
				<div class="eleven columns centered text-center">
					<h2>Thank You.</h2>
					<p>We will get back to you.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container" id="cartnav">
		<div class="row">
			<nav>
				<ul>
					<li><a href="account.php">My Account</a></li>
					<li><a href="cart.php">Cart ( <?php 
						if(isset($_SESSION['cart'])) {$cart_count = count($_SESSION["cart"]); echo $cart_count;}
						else {
							echo '0';
						}
					?> )</a></li>
				</ul>
			</nav>
		</div>
	</div>

	<div class="navbar" id="nav1" gumby-fixed="top">
		<div class="row">
			<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><img src="img/menu.png" alt=""></a>
			<a href="index.php" class="four columns logo"><img src="img/logo.png" /></a>
			<ul class="eight columns">
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="artists.php">Artists</a></li>
				<li><a href="events.php" style="color:#FFCC00;">Events</a></li>
				<li><a href="submit.php">Apply</a></li>
			</ul>
		</div>
	</div>

	<div id="gallerybanner">
		<div class="valign">
			<div>
				<h1 class="center">Events</h1>
			</div>
		</div>
	</div>

	<div class="containerevents">
		<div class="row">
			<section class="vertical tabs">
					<ul class="tab-nav three columns">
						<li class="active"><a href="#">This Month</a></li>
						<li><a href="#">Next Month</a></li>
						<li><a href="#">Far In Time</a></li>
					</ul>
					<div class="tab-content nine columns active">
						<div class="row colorevents">
							<div class="three columns">
								<img src="img/mic.svg" alt="">
							</div>
							<div class="nine columns">
								<h3>Professor Burell's Gallery Talk</h3>
								<p>October 28th, 2014 at 2:00 PM</p>
								<p>UCF Art Gallery</p>
								<p>Join Professor Burell for his gallery talk!</p>
							</div>
						</div>
						<div class="row colorevents">
							<div class="three columns">
								<img src="img/mic.svg" alt="">
							</div>
							<div class="nine columns">
								<h3>Professor Reedy's Gallery Talk</h3>
								<p>October 30th, 2014 at 10:00 AM</p>
								<p>UCF Art Gallery</p>
								<p>Join Professor Reedy for his gallery talk!</p>
							</div>
						</div>
						<div class="row colorevents">
							<div class="three columns">
								<img src="img/gallery.svg" alt="">
							</div>
							<div class="nine columns">
								<h3>Art Gallery Opening</h3>
								<p>November 1st, 2014 at 8:00 PM</p>
								<p>University of Central Florida</p>
								<p>Join us for an evening of tastful art, wine and company!</p>
							</div>
						</div>
					</div>
					<div class="tab-content nine columns">
						<div class="row colorevents">
							<div class="three columns">
								<img src="img/nights.svg" alt="">
							</div>
							<div class="nine columns">
								<h3>November Nights</h3>
								<p>November 7th, 2014 at 9:00 PM</p>
								<p>Pegasus Ballroom, Student Union</p>
								<p>Join us for a night filled with critiques and discussion of famous works (art to be discussed will be deterimed by participants)</p>
							</div>
						</div>
						<div class="row colorevents">
							<div class="three columns">
								<img src="img/work.svg" alt="">
							</div>
							<div class="nine columns">
								<h3>Student Work Time</h3>
								<p>November 22nd, 2014 at 5:30 PM</p>
								<p>UCF Student Union</p>
								<p>Need some peer's opinions about your work or just a nice quiet enviorment to have some coffee and work? Join us!</p>
							</div>
						</div>
					</div>
					<div class="tab-content nine columns">
						<div class="row colorevents">
							<div class="three columns">
								<img src="img/crit.svg" alt="">
							</div>
							<div class="nine columns">
								<h3>Faux Final Critique</h3>
								<p>December 4th, 2014 at 3:00 PM</p>
								<p>UCF Student Union</p>
								<p>Sometimes a professor's opinon is very different from your own, especially when it comes to your own. Come to the union and gt opinions about your work from peers and professors alike (right in time for exams and final critiques)!</p>
							</div>
						</div>
					</div>
				</section>
		</div>
	</div>

	<div class="footer">
		<div class="row container3">
			<div class="three columns">
				<ul>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="artists.php">Artists</a></li>
					<li><a href="events.php" style="color:#FFCC00;">Events</a></li>
					<li><a href="submit.php">Apply</a></li>
				</ul>
			</div>
			<div class="three columns">
				<ul>
					<li><a href="faq.php">FAQ</a></li>
					<li><a href="terms.php">Terms</a></li>
				</ul>
			</div>
			<div class="four columns push_two">
				<ul class="four_up tiles">
					<li><a href="#"><img src="img/facebook.png"></a></li>
					<li><a href="#"><img src="img/twitter.png"></a></li>
					<li><a href="#"><img src="img/instagram.png"></a></li>
					<li><a href="#"><img src="img/pinterest.png"></a></li>
				</ul>
			</div>
		</div>
	</div>
	


	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>

	<!--
	Include gumby.js followed by UI modules followed by gumby.init.js
	Or concatenate and minify into a single file -->
	<script gumby-touch="js/libs" src="js/libs/gumby.js"></script>
	<script src="js/libs/ui/gumby.retina.js"></script>
	<script src="js/libs/ui/gumby.fixed.js"></script>
	<script src="js/libs/ui/gumby.skiplink.js"></script>
	<script src="js/libs/ui/gumby.toggleswitch.js"></script>
	<script src="js/libs/ui/gumby.checkbox.js"></script>
	<script src="js/libs/ui/gumby.radiobtn.js"></script>
	<script src="js/libs/ui/gumby.tabs.js"></script>
	<script src="js/libs/ui/gumby.navbar.js"></script>
	<script src="js/libs/ui/jquery.validation.js"></script>
	<script src="js/libs/gumby.init.js"></script>

	<!--
	Google's recommended deferred loading of JS
	gumby.min.js contains gumby.js, all UI modules and gumby.init.js

	Note: If you opt to use this method of defered loading,
	ensure that any javascript essential to the initial
	display of the page is included separately in a normal
	script tag.

	<script type="text/javascript">
	function downloadJSAtOnload() {
	var element = document.createElement("script");
	element.src = "js/libs/gumby.min.js";
	document.body.appendChild(element);
	}
	if (window.addEventListener)
	window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
	window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
	</script> -->

	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>

	<!-- Change UA-XXXXX-X to be your site's ID -->
	<!--<script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>-->

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

  </body>
</html>
