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

	<title>ArtPad | Artists</title>
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
</head>

<body>

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
				<li><a href="artists.php" style="color:#FFCC00;">Artists</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="submit.php">Apply</a></li>
			</ul>
		</div>
	</div>

	<div id="artistbanner">
		<div class="valign">
			<div>
				<h1 class="center">Artists</h1>
			</div>
		</div>
	</div>

	<div class="containerart">
		<div class="row">
			<section class="pill tabs">
				<ul class="tab-nav">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
				</ul>
				<div class="tab-content active">
					<div class="row">
						<div class="four columns image">
							<a href="artistsbio.php?id=1"><img src="img/artist01.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=1">Robert Nicholson</a></h4>
						</div>
						<div class="four columns image">
							<a href="artistsbio.php?id=2"><img src="img/artist02.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=2">Maria Catalina Olivares</a></h4>
						</div>
						<div class="four columns image">
							<a href="artistsbio.php?id=3"><img src="img/artist03.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=3">Adam Lehman</a></h4>
						</div>
					</div>
					<div class="row">
						<div class="four columns image">
							<a href="artistsbio.php?id=4"><img src="img/artist04.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=4">Herman Leyva</a></h4>
						</div>
						<div class="four columns image">
							<a href="artistsbio.php?id=5"><img src="img/artist05.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=5">Matthew Perez</a></h4>
						</div>
						<div class="four columns image">
							<a href="artistsbio.php?id=6"><img src="img/artist06.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=6">Nico Guidicessi</a></h4>
						</div>
					</div>
					<div class="row">
						<div class="four columns image">
							<a href="artistsbio.php?id=7"><img src="img/artist07.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=7">Carly Downey</a></h4>
						</div>
						<div class="four columns image">
							<a href="artistsbio.php?id=8"><img src="img/artist08.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=8">Kyrstin DiMercurio</a></h4>
						</div>
						<div class="four columns image">
							<a href="artistsbio.php?id=9"><img src="img/artist09.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=9">Nathalie Vazquez</a></h4>
						</div>
					</div>
				</div>
				<div class="tab-content">
					<div class="row">
						<div class="four columns image">
							<a href="artistsbio.php?id=10"><img src="img/artist10.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=10">Logan La Vigne</a></h4>
						</div>
						<div class="four columns image">
							<a href="artistsbio.php?id=11"><img src="img/artist11.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=11">George Wright</a></h4>
						</div>
						<div class="four columns image">
							<a href="artistsbio.php?id=12"><img src="img/artist12.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=12">Shelaine Roustio</a></h4>
						</div>
					</div>
					<div class="row">
						<div class="four columns image">
							<a href="artistsbio.php?id=13"><img src="img/artist13.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=13">Marcos Oliva-Huam&#225;n</a></h4>
						</div>
						<div class="four columns image">
							<a href="artistsbio.php?id=14"><img src="img/artist14.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=14">Rachel Peshek</a></h4>
						</div>
						<div class="four columns image">
							<a href="artistsbio.php?id=15"><img src="img/artist15.png"></a>
							<h4 class="center"><a href="artistsbio.php?id=15">Sheng Yi Liu (Isa Liu)</a></h4>
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
					<li><a href="artists.php" style="color:#FFCC00;">Artists</a></li>
					<li><a href="events.php">Events</a></li>
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
