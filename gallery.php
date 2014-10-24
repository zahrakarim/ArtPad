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

	<title>ArtPad | Gallery</title>
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
	function myFunction(thisimg) {
		document.getElementById("modalimg").src = thisimg;
	}
	</script>
</head>

<body>

	<div class="modal" id="modal1">
		<div class="content">
			<a class="close switch" gumby-trigger="|#modal1">close</a>
			<div class="row">
				<div class="eleven columns centered text-center">
					<img id="modalimg" src="">
				</div>
			</div>
		</div>
	</div>

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
				<li><a href="gallery.php" style="color:#FFCC00;">Gallery</a></li>
				<li><a href="artists.php">Artists</a></li>
				<li><a href="events.php">Events</a></li>
				<li><a href="submit.php">Apply</a></li>
			</ul>
		</div>
	</div>

	<div class="container2" id="gallerytitle">
		<div class="row" style="margin-top:10px;">
			<h2 class="lead">Gallery</h2>
		</div>
		<div class="row">
			<div class="ten columns">
				<p>This art here is. Fanny pack Wes Anderson jean shorts roof party squid, cliche Truffaut bespoke ethical. PBRB slow-carb actually pug. Fashion axe mumblecore mixtape, asymmetrical blog Etsy you probably haven't heard of them food truck Pinterest.</p>
			</div>
		</div>
	</div>

	<div class="containerart">
		<div class="row">
			<section class="pill tabs">
				<ul class="tab-nav">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
				</ul>
				<div class="tab-content active">
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist01_01.png" onclick="myFunction('img/artist01_01.png')"></a>
							<h4 class="center" style="font-size:25.2px;">The Head and The Hand</h4>
							<h6 class="center"><a href="artistsbio.php?id=1">Robert Nicholson</a></h6>
							<p class="center">$85</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=1">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist01_02.png" onclick="myFunction('img/artist01_02.png')"></a>
							<h4 class="center">Introspect</h4>
							<h6 class="center"><a href="artistsbio.php?id=1">Robert Nicholson</a></h6>
							<p class="center">$85</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=2">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist01_03.png" onclick="myFunction('img/artist01_03.png')"></a>
							<h4 class="center">Heavensent : Hellbent</h4>
							<h6 class="center"><a href="artistsbio.php?id=1">Robert Nicholson</a></h6>
							<p class="center">$120</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=3">Add to Cart</a></p>
						</div>
					</div>
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist02_01.png" onclick="myFunction('img/artist02_01.png')"></a>
							<h4 class="center">Squirrel</h4>
							<h6 class="center"><a href="artistsbio.php?id=2">Maria Catalina Olivares</a></h6>
							<p class="center">$44.99</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=4">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist02_02.png" onclick="myFunction('img/artist02_02.png')"></a>
							<h4 class="center">Beagle</h4>
							<h6 class="center"><a href="artistsbio.php?id=2">Maria Catalina Olivares</a></h6>
							<p class="center">$62.99</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=5">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist02_03.png" onclick="myFunction('img/artist02_03.png')"></a>
							<h4 class="center">Raccoon</h4>
							<h6 class="center"><a href="artistsbio.php?id=2">Maria Catalina Olivares</a></h6>
							<p class="center">$44.99</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=6">Add to Cart</a></p>
						</div>
					</div>
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist03_01.png" onclick="myFunction('img/artist03_01.png')"></a>
							<h4 class="center">Float</h4>
							<h6 class="center"><a href="artistsbio.php?id=3">Adam Lehman</a></h6>
							<p class="center">$75</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=7">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist03_02.png" onclick="myFunction('img/artist03_02.png')"></a>
							<h4 class="center">Flagler Storm</h4>
							<h6 class="center"><a href="artistsbio.php?id=3">Adam Lehman</a></h6>
							<p class="center">$125</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=8">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist03_03.png" onclick="myFunction('img/artist03_03.png')"></a>
							<h4 class="center">Tega Cay</h4>
							<h6 class="center"><a href="artistsbio.php?id=3">Adam Lehman</a></h6>
							<p class="center">$75</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=9">Add to Cart</a></p>
						</div>
					</div>
				</div>

				<div class="tab-content">
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=4">Herman Leyva</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=10">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=4">Herman Leyva</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=11">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=4">Herman Leyva</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=12">Add to Cart</a></p>
						</div>
					</div>
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist05_01.png" onclick="myFunction('img/artist05_01.png')"></a>
							<h4 class="center">Still Life 08/2014</h4>
							<h6 class="center"><a href="artistsbio.php?id=5">Matthew Perez</a></h6>
							<p class="center">$9.95</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=13">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist05_02.png" onclick="myFunction('img/artist05_02.png')"></a>
							<h4 class="center">Distorted Shades</h4>
							<h6 class="center"><a href="artistsbio.php?id=5">Matthew Perez</a></h6>
							<p class="center">$29.95</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=14">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist05_03.png" onclick="myFunction('img/artist05_03.png')"></a>
							<h4 class="center">Decorative Baseball</h4>
							<h6 class="center"><a href="artistsbio.php?id=5">Matthew Perez</a></h6>
							<p class="center">$14.95</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=15">Add to Cart</a></p>
						</div>
					</div>
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist06_01.png" onclick="myFunction('img/artist06_01.png')"></a>
							<h4 class="center">Healing Arts Poster</h4>
							<h6 class="center"><a href="artistsbio.php?id=6">Nico Guidicessi</a></h6>
							<p class="center">$29.99</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=16">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist06_02.png" onclick="myFunction('img/artist06_02.png')"></a>
							<h4 class="center">Florida Food &#38; Wine Festival</h4>
							<h6 class="center"><a href="artistsbio.php?id=6">Nico Guidicessi</a></h6>
							<p class="center">$34.99</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=17">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist06_03.png" onclick="myFunction('img/artist06_03.png')"></a>
							<h4 class="center">Tatlin Tower</h4>
							<h6 class="center"><a href="artistsbio.php?id=6">Nico Guidicessi</a></h6>
							<p class="center">$24.99</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=18">Add to Cart</a></p>
						</div>
					</div>
				</div>

				<div class="tab-content">
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=7">Carly Downey</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=19">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=7">Carly Downey</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=20">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=7">Carly Downey</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=21">Add to Cart</a></p>
						</div>
					</div>
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist08_01.png" onclick="myFunction('img/artist08_01.png')"></a>
							<h4 class="center">Honey Bee</h4>
							<h6 class="center"><a href="artistsbio.php?id=8">Kyrstin DiMercurio</a></h6>
							<p class="center">$8.5</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=22">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist08_02.png" onclick="myFunction('img/artist08_02.png')"></a>
							<h4 class="center">Record Player</h4>
							<h6 class="center"><a href="artistsbio.php?id=8">Kyrstin DiMercurio</a></h6>
							<p class="center">$22</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=23">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist08_03.png" onclick="myFunction('img/artist08_03.png')"></a>
							<h4 class="center">Teapot</h4>
							<h6 class="center"><a href="artistsbio.php?id=8">Kyrstin DiMercurio</a></h6>
							<p class="center">$22</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=24">Add to Cart</a></p>
						</div>
					</div>
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=9">Nathalie Vazquez</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=25">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=9">Nathalie Vazquez</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=26">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=9">Nathalie Vazquez</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=27">Add to Cart</a></p>
						</div>
					</div>
				</div>

				<div class="tab-content">
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=10">Logan La Vigne</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=28">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=10">Logan La Vigne</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=29">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=10">Logan La Vigne</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=30">Add to Cart</a></p>
						</div>
					</div>
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=11">George Wright</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=31">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=11">George Wright</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=32">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=11">George Wright</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=33">Add to Cart</a></p>
						</div>
					</div>
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist12_01.png" onclick="myFunction('img/artist12_01.png')"></a>
							<h4 class="center">Grayish</h4>
							<h6 class="center"><a href="artistsbio.php?id=12">Shelaine Roustio</a></h6>
							<p class="center">$25</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=34">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist12_02.png" onclick="myFunction('img/artist12_02.png')"></a>
							<h4 class="center">Troubled Motion</h4>
							<h6 class="center"><a href="artistsbio.php?id=12">Shelaine Roustio</a></h6>
							<p class="center">$30</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=35">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist12_03.png" onclick="myFunction('img/artist12_03.png')"></a>
							<h4 class="center">The Queenie</h4>
							<h6 class="center"><a href="artistsbio.php?id=12">Shelaine Roustio</a></h6>
							<p class="center">$25</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=36">Add to Cart</a></p>
						</div>
					</div>
				</div>

				<div class="tab-content">
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist13_01.png" onclick="myFunction('img/artist13_01.png')"></a>
							<h4 class="center">Paper Zampo&#241;a</h4>
							<h6 class="center"><a href="artistsbio.php?id=13">Marcos Oliva-Huam&#225;n</a></h6>
							<p class="center">$270</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=37">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist13_02.png" onclick="myFunction('img/artist13_02.png')"></a>
							<h4 class="center">Paper Zampo&#241;a Abstraction</h4>
							<h6 class="center"><a href="artistsbio.php?id=13">Marcos Oliva-Huam&#225;n</a></h6>
							<p class="center">$200</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=38">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist13_03.png" onclick="myFunction('img/artist13_03.png')"></a>
							<h4 class="center">Flight to Freedom</h4>
							<h6 class="center"><a href="artistsbio.php?id=13">Marcos Oliva-Huam&#225;n</a></h6>
							<p class="center">$70</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=39">Add to Cart</a></p>
						</div>
					</div>
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=14">Rachel Peshek</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=40">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=14">Rachel Peshek</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=41">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/img_silence_demo.jpg" onclick="myFunction('img/img_silence_demo.jpg')"></a>
							<h4 class="center">Title</h4>
							<h6 class="center"><a href="artistsbio.php?id=14">Rachel Peshek</a></h6>
							<p class="center">Price</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=42">Add to Cart</a></p>
						</div>
					</div>
					<div class="row">
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist15_01.png" onclick="myFunction('img/artist15_01.png')"></a>
							<h4 class="center">Wildlife Portrait - Lion</h4>
							<h6 class="center"><a href="artistsbio.php?id=15">Sheng Yi Liu (Isa Liu)</a></h6>
							<p class="center">$30</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=43">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist15_02.png" onclick="myFunction('img/artist15_02.png')"></a>
							<h4 class="center">Spiderweb Thoughts</h4>
							<h6 class="center"><a href="artistsbio.php?id=15">Sheng Yi Liu (Isa Liu)</a></h6>
							<p class="center">$5</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=44">Add to Cart</a></p>
						</div>
						<div class="four columns image center">
							<a href="#" class="switch" gumby-trigger="#modal1"><img src="img/thumb/artist15_03.png" onclick="myFunction('img/artist15_03.png')"></a>
							<h4 class="center">Spawn Fan Art</h4>
							<h6 class="center"><a href="artistsbio.php?id=15">Sheng Yi Liu (Isa Liu)</a></h6>
							<p class="center">$10</p>
							<p class="medium oval btn default addtocart center"><a href="addtocart.php?id=45">Add to Cart</a></p>
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
					<li><a href="gallery.php" style="color:#FFCC00;">Gallery</a></li>
					<li><a href="artists.php">Artists</a></li>
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
