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

	<title>ArtPad | Terms</title>
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
			<h2 class="lead">Terms and Conditions</h2>
		</div>
	</div>

	<div class="containerform">
		<div class="row">
			<p><strong>1 &nbsp;Acceptance The Use Of Art Pad UCF Terms and Conditions</strong></p>
<p>Your  access  to  and  use  of  Art Pad UCF is  subject exclusively to these Terms and Conditions. You will not use the Website for any purpose that is unlawful or prohibited by these Terms and Conditions. By using  the  Website  you  are  fully  accepting  the  terms,  conditions  and disclaimers contained in this notice. If you do not accept these Terms and Conditions you must immediately stop using the Website.</p>

<p><strong>2 &nbsp;Credit card details</strong></p>
<p>Insert your credit card policy</p>

<p><strong>3 &nbsp;LEGAL ADVICE</strong></p>
<p>The contents of Art Pad UCF website do not constitute advice and should not be relied upon in making or refraining from making, any decision. <br /> All material contained on Art Pad UCF is provided without any or warranty of any kind. You use the material on Art Pad UCF at your own discretion</p>

<p><strong>4 &nbsp;CHANGE OF USE</strong></p>
<p>Art Pad UCF reserves the right to:<br /> 4.1 &nbsp;change or remove (temporarily or permanently) the Website or any part of it without notice and you confirm that Art Pad UCF shall not be liable to you for any such change or removal and.<br /> 4.2 &nbsp;change these Terms and Conditions at any time, and your continued use of the Website following any changes shall be deemed to be your acceptance of such change.</p>

<p><strong>5 &nbsp;Links to Third Party Websites</strong></p>
<p>Art Pad UCF Website may include links to third party websites that are controlled and maintained by others. Any link to other websites is not an endorsement of such websites and you acknowledge and agree that we are not responsible for the content or availability of any such sites.</p>

<p><strong>6 &nbsp;COPYRIGHT</strong></p>
<p>6.1 &nbsp;All  copyright,  trade  marks  and  all  other  intellectual  property  rights  in  the Website and its content (including without limitation the Website design, text, graphics and all software and source codes connected with the Website) are owned by or   licensed to Art Pad UCF or otherwise used by Art Pad UCF as permitted by law.<br /> 6.2 &nbsp;In accessing the Website you agree that you will access the content solely for your personal, non-commercial use. None of the content may be downloaded, copied, reproduced, transmitted, stored, sold or distributed without the prior written consent of the copyright holder. This excludes the downloading, copying and/or printing of pages of the Website for personal, non-commercial home use only.</p>

<p><strong>7 &nbsp;LINKS TO AND FROM OTHER WEBSITES</strong></p>
<p>7.1 &nbsp;Throughout this Website you may find links to third party websites. The provision of a link to such a website does not mean that we endorse that website. If you visit any website via a link on this Website you do so at your own risk.<br /> 7.2 &nbsp;Any party wishing to link to this website is entitled to do so provided that the conditions below are observed:<br /> &nbsp;&nbsp;&nbsp;(a) &nbsp;you do not seek to imply that we are endorsing the services or products of another party unless this has been agreed with us in writing;<br /> &nbsp;&nbsp;&nbsp;(b) &nbsp;you do not misrepresent your relationship with this website; and<br/> &nbsp;&nbsp;&nbsp;(c) ;&nbsp;the website from which you link to this Website does not contain offensive or otherwise  controversial content or, content that infringes any intellectual property rights or other rights of a third party.<br /> 7.3 &nbsp;By linking to this Website in breach of our terms, you shall indemnify us for any loss or damage suffered to this Website as a result of such linking.</p>

<p><strong>8 &nbsp; DISCLAIMERS AND LIMITATION OF LIABILITY</strong></p>
<p>8.1 &nbsp;The Website is provided on an AS IS and AS AVAILABLE basis without any representation or endorsement made and without warranty of any kind whether express or implied, including but not limited to the implied warranties of satisfactory quality, fitness for a particular purpose, non-infringement, compatibility, security and accuracy.<br /> 8.2 &nbsp;To the extent permitted by law, Art Pad UCF will not be liable for any indirect or consequential loss or damage whatever (including without limitation loss of business, opportunity, data, profits) arising out of or in connection with the use of the Website.<br /> 8.3 &nbsp;Art Pad UCF makes no warranty that the functionality of the Website will be uninterrupted or error free, that defects will be corrected or that the Website or the server that makes it available are free of viruses or anything else which may be harmful or destructive.<br /> 8.4 &nbsp;Nothing in these Terms and Conditions shall be construed so as to exclude or limit the liability of Art Pad UCF for death or personal injury as a result of the negligence of Art Pad UCF or that of its employees or agents.</p>

<p><strong>9 &nbsp;INDEMNITY</strong></p>
<p>You agree to indemnify and hold Art Pad UCF and its employees and agents harmless from and against all liabilities, legal fees, damages, losses, costs and other expenses in relation to any claims or actions brought against Art Pad UCF arising out of any breach by you of these Terms and Conditions or other liabilities arising out of your use of this Website.</p>

<p><strong>10 &nbsp;SEVERANCE</strong></p>
<p>If any of these Terms and Conditions should be determined to be invalid, illegal or unenforceable for any reason by any court of competent jurisdiction then such Term or Condition shall be severed and the remaining Terms and Conditions shall survive and remain in full force and effect and continue to be binding and enforceable.</p>

<p><strong>11 &nbsp;WAIVER</strong></p>
<p>If you breach these Conditions of Use and we take no action, we will still be entitled to use our rights and remedies in any other situation where you breach these Conditions of Use.</p>

<p><strong>12 &nbsp;GOVERNING LAW</strong></p>
<p>These Terms and Conditions shall be governed by and construed in accordance with the law of United States and you hereby submit to the exclusive jurisdiction of the United States courts.</p>

<p><strong>13 &nbsp;OUR CONTACT DETAILS</strong></p>
<p><strong>Our Office Address:</strong></p>
<ul>
    <li>1234 Pegasus Dr</li>
    <li>Orlando</li>
    <li>32803</li>
    <li>United States</li>
    <li>4075555555</li>
</ul>
<p>For any further information please email <a href='mailto:jonathan@jonnyroboto.com' style="font-weight:600;"> Art Pad UCF </a>Team</p>
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
					<li><a href="faq.php">FAQ</a></li>
					<li><a href="terms.php" style="color:#FFCC00;">Terms</a></li>
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
