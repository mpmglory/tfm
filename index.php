<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>ACCUEIL</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- REVOLUTION SLIDER -->
		<link href="assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />
	</head>

	<!--
		AVAILABLE BODY CLASSES:
		
		smoothscroll 			= create a browser smooth scroll
		enable-animation		= enable WOW animations

		bg-grey					= grey background
		grain-grey				= grey grain background
		grain-blue				= blue grain background
		grain-green				= green grain background
		grain-blue				= blue grain background
		grain-orange			= orange grain background
		grain-yellow			= yellow grain background
		
		boxed 					= boxed layout
		pattern1 ... patern11	= pattern background
		menu-vertical-hide		= hidden, open on click
		
		BACKGROUND IMAGE [together with .boxed class]
		data-background="assets/images/boxed_background/1.jpg"
	-->
	<body class="smoothscroll enable-animation">

		<!-- wrapper -->
		<div id="wrapper">

            <!-- HEADER -->
            <?php include('header.html'); ?>
            <!-- /HEADER -->
            
			<!-- REVOLUTION SLIDER -->
			<section id="slider" class="fullwidthbanner-container roundedcorners">
				<!--
					Navigation Styles:
					
						data-navigationStyle="" theme default navigation
						
						data-navigationStyle="preview1"
						data-navigationStyle="preview2"
						data-navigationStyle="preview3"
						data-navigationStyle="preview4"
						
					Bottom Shadows
						data-shadow="1"
						data-shadow="2"
						data-shadow="3"
						
					Slider Height (do not use on fullscreen mode)
						data-height="300"
						data-height="350"
						data-height="400"
						data-height="450"
						data-height="500"
						data-height="550"
						data-height="600"
						data-height="650"
						data-height="700"
						data-height="750"
						data-height="800"
				-->
				<div class="fullscreenbanner" data-navigationStyle="preview4">
					<ul class="hide">

						<!-- SLIDE  -->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 1" data-thumb="assets/images/demo/150x99/11-min.jpg">

							<img src="assets/images/1x1.png" data-lazyload="assets/images/new/bois2.jpg" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

							<div class="overlay dark-7"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="180"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								<span class="weight-300">TFM</span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="230"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
								Spécialiste de la Gestion Forestière. 
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white"
								data-x="center"
								data-y="350"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10; width: 750px; max-width: 750px; white-space: normal; text-align:center;">
								La protection de la nature, notre priorité.
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="438"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 10;">
							</div>

						</li>
						<!-- SLIDE -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 2" data-thumb="assets/images/demo/video/neuron_thumb.jpg">

							<img src="assets/images/1x1.png" data-lazyload="assets/images/new/hd/3.jpg" alt="video" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">

							<div class="tp-caption tp-fade fadeout fullscreenvideo"
								data-x="0"
								data-y="0"
								data-speed="1000"
								data-start="1100"
								data-easing="Power4.easeOut"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1500"
								data-endeasing="Power4.easeIn"
								data-autoplay="true"
								data-autoplayonlyfirsttime="false"
								data-nextslideatend="true"
								data-volume="mute" 
								data-forceCover="1" 
								data-aspectratio="16:9" 
								data-forcerewind="on" style="z-index: 2;">

							</div>

							<div class="tp-caption customin ltl tp-resizeme text_white"
								data-x="center"
								data-y="180"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1000"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">
								<span class="weight-300">Spécialiste de la Gestion Forestière.</span>
							</div>

							<div class="tp-caption customin ltl tp-resizeme large_bold_white"
								data-x="center"
								data-y="230"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1200"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">
								BIENVENU CHEZ TFM
							</div>

							<div class="tp-caption customin ltl tp-resizeme small_light_white"
								data-x="center"
								data-y="350"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1400"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3; width: 750px; max-width: 750px; white-space: normal; text-align:center;">
								La protection de la nature, notre priorité.
							</div>

							<div class="tp-caption customin ltl tp-resizeme"
								data-x="center"
								data-y="438"
								data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-speed="800"
								data-start="1550"
								data-easing="easeOutQuad"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="1000"
								data-endeasing="Power4.easeIn" style="z-index: 3;">
							</div>

						</li>
						<!-- SLIDE  -->
						<li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 3" data-thumb="assets/images/demo/150x99/11-min.jpg">
							<img src="assets/images/1x1.png" data-lazyload="assets/images/new/hd/42.jpg" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />
							<div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>

							<div class="tp-caption very_large_text lfb ltt tp-resizeme"
								data-x="right" data-hoffset="-100"
								data-y="center" data-voffset="-100"
								data-speed="600"
								data-start="800"
								data-easing="Power4.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="500"
								data-endeasing="Power4.easeIn">
								TFM
							</div>

							<div class="tp-caption medium_light_white lfb ltt tp-resizeme"
								data-x="right" data-hoffset="-100"
								data-y="center" data-voffset="10"
								data-speed="600"
								data-start="900"
								data-easing="Power4.easeOut"
								data-splitin="none"
								data-splitout="none"
								data-elementdelay="0.01"
								data-endelementdelay="0.1"
								data-endspeed="500"
								data-endeasing="Power4.easeIn">
								Specialiste<br/>
								de la gestion forestiere.<br/>
							</div>

						</li>

					</ul>
				</div>
			</section>
			<!-- /REVOLUTION SLIDER -->



			<!-- Welcome -->
			<section>
				<div class="container">

					<div class="text-center">
						<h1 class="nomargin-bottom">TROPICAL <span>FOREST</span> MANAGEMENT</h1>
						<h2 class="col-sm-10 col-sm-offset-1 nomargin-bottom weight-300 text-muted size-20">Specialiste de la gestion forestière</h2>
					</div>
					<div class="divider divider-center divider-color"><!-- divider -->
						<i class="fa fa-chevron-down"></i>
					</div>

					
					<!-- FEATURED BOXES 3 -->
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<a href="page-coming-soon-2.html"><i class="ico-color ico-lg ico-rounded ico-hover et-recycle"></i></a>
								<h4><a href="page-coming-soon-2.html">Gestion Forestière</a></h4>
								<h5><a class="font-lato size-20" href="page-coming-soon-2.html">Petite description du service.</a></h5>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<a href="page-coming-soon-2.html"><i class="ico-color ico-lg ico-rounded ico-hover et-global"></i></a>
								<h4><a href="page-coming-soon-2.html">Expertise Environnementale</a></h4>
								<h5><a class="font-lato size-20" href="page-coming-soon-2.html">Petite description du service.</a></h5>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<a href="page-coming-soon-2.html"><i class="ico-color ico-lg ico-rounded ico-hover et-gears"></i></a>
								<h4><a href="page-coming-soon-2.html">Industrie du bois</a></h4>
								<h5><a class="font-lato size-20" href="page-coming-soon-2.html">Petite description du service.</a></h5>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<a href="page-coming-soon-2.html"><i class="ico-color ico-lg ico-rounded ico-hover et-caution"></i></a>
								<h4><a href="page-coming-soon-2.html">Changement climatique</a></h4>
								<h5><a class="font-lato size-20" href="page-coming-soon-2.html">Petite description du service.</a></h5>
							</div>
						</div>

						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<a href="page-coming-soon-2.html"><i class="ico-color ico-lg ico-rounded ico-hover et-map"></i></a>
								<h4><a href="page-coming-soon-2.html">Cartographie et Modélisation</a></h4>
								<h5><a class="font-lato size-20" href="page-coming-soon-2.html">Petite description du service.</a></h5>
							</div>
						</div>
						<div class="col-md-4 col-xs-6">
							<div class="text-center">
								<a href="page-coming-soon-2.html"><i class="ico-color ico-lg ico-rounded ico-hover et-happy"></i></a>
								<h4><a href="page-coming-soon-2.html">Appui Institutionnel</a></h4>
								<h5><a class="font-lato size-20" href="page-coming-soon-2.html">Petite description du service.</a></h5>
							</div>
						</div>

					</div>
					<!-- /FEATURED BOXES 3 -->

				</div>
			</section>
			<!-- / -->

			<!-- PARALLAX -->
			<section class="parallax parallax-1" style="background-image: url('assets/images/new/bois22.jpg');">
				<div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">

					<div class="text-center">
						<h3 class="nomargin">Restez connectés</h3>
					</div>

					<ul class="margin-top-0 social-icons list-unstyled list-inline">
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-facebook"></i>
								<h4>Facebook</h4>
								<span>Abonne-toi</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-twitter"></i>
								<h4>Twitter</h4>
								<span>Follow Nous</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-youtube"></i>
								<h4>Youtube</h4>
								<span>Nos Vidéos</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-instagram"></i>
								<h4>Instagram</h4>
								<span>Nos Images</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="#">
								<i class="fa fa-linkedin"></i>
								<h4>Linkedin</h4>
								<span>Verifiez notre identité</span>
							</a>
						</li>
                        <li>
							<a target="_blank" href="#">
								<i class="fa fa-snapchat"></i>
								<h4>Snapchat</h4>
								<span>Restez identités</span>
							</a>
						</li>
					</ul>

				</div>

			</section>
			<!-- /PARALLAX -->

			<!-- CALLOUT -->
			<div class="alert alert-transparent bordered-bottom nomargin">
				<div class="container">

					<div class="row">

						<div class="col-md-9 col-sm-12"><!-- left text -->
							<h3>Accompagne les entreprises et les institutions depuis <span><strong>07 ans.</strong></span> </h3>
							<p class="font-lato weight-300 size-20 nomargin-bottom">
								Nous tenons à nos engagements !
							</p>
						</div><!-- /left text -->

						
						<div class="col-md-3 col-sm-12 text-right"><!-- right btn -->
							<a href="page-contact-3.html" class="btn btn-primary btn-lg">Nous contacter</a>
						</div><!-- /right btn -->

					</div>

				</div>
			</div>
			<!-- /CALLOUT -->

            <?php include('footer.html'); ?>

		</div>
		<!-- /wrapper -->


		<!-- SCROLL TO TOP -->
		<a href="#" id="toTop"></a>


		<!-- PRELOADER -->
		<div id="preloader">
			<div class="inner">
				<span class="loader"></span>
			</div>
		</div><!-- /PRELOADER -->


		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="assets/plugins/jquery/jquery-2.2.3.min.js"></script>

		<script type="text/javascript" src="assets/js/scripts.js"></script>
		

		<!-- REVOLUTION SLIDER -->
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="assets/js/view/demo.revolution_slider.js"></script>
	</body>
</html>