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

	<title>ArtPad | FAQ</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

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
</head>

<body>

	<div class="container" id="cartnav">
		<div class="row">
			<nav>
				<ul>
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
				<li><a href="events.php">Events</a></li>
				<li><a href="submit.php">Apply</a></li>
			</ul>
		</div>
	</div>

	<div class="container2" id="gallerytitle">
		<div class="row" style="margin-top:10px;">
			<h2 class="lead">FAQ</h2>
		</div>
	</div>

	<div class="containerform">
		<div class="row">
			<h4 class="btndraw primary">
				<a href="#"  class="toggle" gumby-trigger="#drawer1">Can I purchase art made by UCF students?</a>
			</h4>
			<div class="row">
				<div class="twelve columns">
					<div class="drawer" id="drawer1">
						<p>Yes.  You may chose art from the featured artists on Art Pad UCF.</p>
					</div>
				</div>
			</div>

			<h4 class="btndraw primary">
				<a href="#"  class="toggle" gumby-trigger="#drawer2">Can I sell my art?</a>
			</h4>
			<div class="row">
				<div class="twelve columns">
					<div class="drawer" id="drawer2">
						<p>Yes.  You may sell your art on Art Pad UCF if 1) you have created a profile with us, 2) you are an SVAD student at UCF and 3) you have a minimum of three items to display.</p>
					</div>
				</div>
			</div>

			<h4 class="btndraw primary">
				<a href="#"  class="toggle" gumby-trigger="#drawer3">What is SVAD?</a>
			</h4>
			<div class="row">
				<div class="twelve columns">
					<div class="drawer" id="drawer3">
						<p>SVAD stands for the School of Visual Art and Design at University of Central Florida.</p>
					</div>
				</div>
			</div>

			<h4 class="btndraw primary">
				<a href="#"  class="toggle" gumby-trigger="#drawer4">What is UCF?</a>
			</h4>
			<div class="row">
				<div class="twelve columns">
					<div class="drawer" id="drawer4">
						<p>University of Central Florida (UCF) is a really great school in Orlando, FL teaming with amazing talent.</p>
					</div>
				</div>
			</div>

			<h4 class="btndraw primary">
				<a href="#"  class="toggle" gumby-trigger="#drawer5">Do I need to create a profile to purchase artwork?</a>
			</h4>
			<div class="row">
				<div class="twelve columns">
					<div class="drawer" id="drawer5">
						<p>No.  You do not need to create a profile or account to purchase art; however, if you would like to make your purchasing easier, you may elect to create an account when that service is provided.</p>
					</div>
				</div>
			</div>

			<h4 class="btndraw primary">
				<a href="#"  class="toggle" gumby-trigger="#drawer6">When do you plan on providing customer profile creation?</a>
			</h4>
			<div class="row">
				<div class="twelve columns">
					<div class="drawer" id="drawer6">
						<p>Profile creation is a selective process. You must apply through the Submit Wrok form and if we approve of your art you will be provided with a means to log in and upload more art and create a profile.</p>
					</div>
				</div>
			</div>

			<h4 class="btndraw primary">
				<a href="#"  class="toggle" gumby-trigger="#drawer7">What color is better, black or gold?</a>
			</h4>
			<div class="row">
				<div class="twelve columns">
					<div class="drawer" id="drawer7">
						<p>I mean, really?...gold of course.</p>
					</div>
				</div>
			</div>

			<h4 class="btndraw primary">
				<a href="#"  class="toggle" gumby-trigger="#drawer8">Two trains leave different cities heading toward each other at different speeds. When and where do they meet?</a>
			</h4>
			<div class="row">
				<div class="twelve columns">
					<div class="drawer" id="drawer8">
						<p>Potato.</p>
					</div>
				</div>
			</div>

			<h4 class="btndraw primary">
				<a href="#"  class="toggle" gumby-trigger="#drawer9">Do you take personal checks or cash?</a>
			</h4>
			<div class="row">
				<div class="twelve columns">
					<div class="drawer" id="drawer9">
						<p>No. We only accept credit card or Paypal on the site.</p>
					</div>
				</div>
			</div>

			<h4 class="btndraw primary">
				<a href="#"  class="toggle" gumby-trigger="#drawer10">Who's the cat that won't cop out, when there's danger all about?</a>
			</h4>
			<div class="row">
				<div class="twelve columns">
					<div class="drawer" id="drawer10">
						<p>SHAFT...Right on.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer">
		<div class="row container3">
			<div class="three columns">
				<ul>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="artists.php">Artists</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="submit.php">Apply</a></li>
				</ul>
			</div>
			<div class="three columns">
				<ul>
					<li><a href="faq.php" style="color:#FFCC00;">FAQ</a></li>
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
