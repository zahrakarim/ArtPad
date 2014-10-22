<?php session_start();?>
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

	<title>Student Talks - Gumby</title>
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

	<?php

	//MYSQL: 
		$mysqli = new mysqli("sulley.cah.ucf.edu","ka247238","mason95","ka247238");

		if (isset($_GET['id'])) //Catergory ID in catalog
			if($_GET['id'] != null){
				$proID = intval($_GET['id']);
				$proID = intval($proID);
			}

		$id = $proID;

		$productquery = "SELECT * FROM artpad WHERE id=".$id." LIMIT 1";

		if ($result = $mysqli->query($productquery)) {
			while ($row = $result->fetch_assoc()) {
				$name = $row["name"];
				$bio = $row["bio"];
				$bioimg = $row["bioimg"];
				$art01 = $row["art01"];
				$art02 = $row["art02"];
				$art03 = $row["art03"];
				$title01 = $row["title01"];
				$title02 = $row["title02"];
				$title03 = $row["title03"];
				$price01 = $row["price01"];
				$price02 = $row["price02"];
				$price03 = $row["price03"];
				$artdes01 = $row["artdes01"];
				$artdes02 = $row["artdes02"];
				$artdes03 = $row["artdes03"];

				if ($id==1) {
					$artid1=1;
					$artid2=2;
					$artid3=3;
				}
				if ($id==2) {
					$artid1=4;
					$artid2=5;
					$artid3=6;
				}
				if ($id==3) {
					$artid1=7;
					$artid2=8;
					$artid3=9;
				}
				if ($id==4) {
					$artid1=10;
					$artid2=11;
					$artid3=12;
				}
				if ($id==5) {
					$artid1=13;
					$artid2=14;
					$artid3=15;
				}
				if ($id==6) {
					$artid1=16;
					$artid2=17;
					$artid3=18;
				}
				if ($id==7) {
					$artid1=19;
					$artid2=20;
					$artid3=21;
				}
				if ($id==8) {
					$artid1=22;
					$artid2=23;
					$artid3=24;
				}
				if ($id==9) {
					$artid1=25;
					$artid2=26;
					$artid3=27;
				}
				if ($id==10) {
					$artid1=28;
					$artid2=29;
					$artid3=30;
				}
				if ($id==11) {
					$artid1=31;
					$artid2=32;
					$artid3=33;
				}
				if ($id==12) {
					$artid1=34;
					$artid2=35;
					$artid3=36;
				}
				if ($id==13) {
					$artid1=37;
					$artid2=38;
					$artid3=39;
				}
				if ($id==14) {
					$artid1=40;
					$artid2=41;
					$artid3=42;
				}
				if ($id==15) {
					$artid1=43;
					$artid2=44;
					$artid3=45;
				}

				if(isset($_SESSION['cart'])) {$cart_count = count($_SESSION["cart"]);}
				else {
					$cart_count=0;
				}

	echo '
	<div class="modal" id="modal1">
		<div class="content">
			<a class="close switch" gumby-trigger="|#modal1">close</a>
			<div class="row">
				<div class="eleven columns centered text-center">
					<img id="modalimg" src="img/'.$art01.'">
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modal2">
		<div class="content">
			<a class="close switch" gumby-trigger="|#modal2">close</a>
			<div class="row">
				<div class="eleven columns centered text-center">
					<img id="modalimg" src="img/'.$art02.'">
				</div>
			</div>
		</div>
	</div>

	<div class="modal" id="modal3">
		<div class="content">
			<a class="close switch" gumby-trigger="|#modal3">close</a>
			<div class="row">
				<div class="eleven columns centered text-center">
					<img id="modalimg" src="img/'.$art03.'">
				</div>
			</div>
		</div>
	</div>

	<div class="container" id="cartnav">
		<div class="row">
			<nav>
				<ul>
					<li><a href="cart.php">Cart ( '.$cart_count.' )</a></li>
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
				<li><a href="submit.php">Submit Work</a></li>
			</ul>
		</div>
	</div>';

				echo '
				<div class="container2" id="gallerytitle">
					<div class="row" style="margin-top:10px;">
						<h2 class="lead">'.$name.'</h2>
					</div>
					<div class="row">
						<div class="six columns center">
							<img src="img/'.$bioimg.'" alt="">
						</div>
						<div class="six columns">
							<p>'.$bio.'</p>
						</div>
					</div>
				</div>

				<div class="containerart">
					<div class="row">
						<div class="four columns">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/'.$art01.'" alt=""></a>
							<h4>'.$title01.'</h4>
							<p>'.$artdes01.'</p>
							<p>$'.$price01.'</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id='.$artid1.'">Add to Cart</a></p>
						</div>

						<div class="four columns">
							<a href="#" class="switch" gumby-trigger="#modal2"><img src="img/thumb/'.$art02.'" alt=""></a>
							<h4>'.$title02.'</h4>
							<p>'.$artdes02.'</p>
							<p>$'.$price02.'</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id='.$artid2.'">Add to Cart</a></p>
						</div>

						<div class="four columns">
							<a href="#" class="switch" gumby-trigger="#modal3"><img src="img/thumb/'.$art03.'" alt=""></a>
							<h4>'.$title03.'</h4>
							<p>'.$artdes03.'</p>
							<p>$'.$price03.'</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id='.$artid3.'">Add to Cart</a></p>
						</div>
					</div>
				</div>
				';
			}
		}
	?>

	<div class="footer">
		<div class="row container3">
			<div class="three columns">
				<ul>
					<li><a href="gallery.php">Gallery</a></li>
					<li><a href="artists.php">Artists</a></li>
					<li><a href="events.php">Events</a></li>
					<li><a href="submit.php">Submit Work</a></li>
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
