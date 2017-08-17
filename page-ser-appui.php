<!DOCTYPE html>
	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>QUI SOMMES NOUS?</title>
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

		<!-- REVOLUTION SLIDER -->
		<link href="assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>


	<body class="smoothscroll enable-animation" >

        <!-- wrapper -->
		<div id="wrapper">

			<!-- HEADER -->
            <?php include('header.html'); ?>
            <!-- /HEADER -->
            
			<!-- PAGE HEADER -->
			<section class="page-header page-header-xs parallax parallax-3" style="background-image:url('assets/images/new/hd/3.jpg')">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">
					<h1 class="uppercase">nos compétences</h1>
				</div>
			</section>
			<!-- /PAGE HEADER -->

            <!-- -->
			<section>
				<div class="container">

					<header class="text-center">
						<h2 class="nomargin">Nos missions à TFM</h2>
						<p class="font-lato size-20 nomargin">Nous oeuvrons activement dans ces domaines pour le bonheur de nos clients</p>
					</header>
					
					<div class="divider divider-center" id="list-ser"><!-- divider -->
						<i class="fa fa-chevron-down"></i>
					</div>
                    
                    
					<ul class="process-steps nav nav-tabs nav-justified margin-top-100">
						<li>
							<a href="#step1" data-toggle="tab">1</a>
							<h5>Gestion Forestière</h5>
						</li>
						<li>
							<a href="#step2" data-toggle="tab">2</a>
							<h5>Expertise Environnementale</h5>
						</li>
						<li>
							<a href="#step3" data-toggle="tab">3</a>
							<h5>Cartographie et Modélisation</h5>
						</li>
						<li class="active">
							<a href="#step4" data-toggle="tab">4</a>
							<h5>Appui Institutionnelle</h5>
						</li>
						<li>
							<a href="#step5" data-toggle="tab">5</a>
							<h5>Industrie du bois</h5>
						</li>
                        <li>
							<a href="#step6" data-toggle="tab">6</a>
							<h5>Module de Formation</h5>
						</li>
						<li>
							<a href="#step7" data-toggle="tab">7</a>
							<h5>Changement climatique</h5>
						</li>
					</ul>
                    
        
                    <?php include('services.html'); ?>
                    
                    
				</div>
			</section>
			<!-- / -->

			<!-- FOOTER -->
			<?php include('footer.html'); ?>
			<!-- /FOOTER -->


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
        
        <script type="text/javascript">
            
            document.getElementById('step4').setAttribute('class', 'tab-pane active');
            
        </script>

	</body>
</html>