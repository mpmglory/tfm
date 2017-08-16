<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Smarty - Multipurpose + Admin</title>
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
            
            
			<!-- PAGE HEADER -->
			<section class="page-header page-header-xs parallax parallax-3" style="background-image:url('assets/images/new/hd/3.jpg')">
				<div class="overlay dark-5"><!-- dark overlay [1 to 9 opacity] --></div>

				<div class="container">
					<h1 class="uppercase">nos clients</h1>
				</div>
			</section>
			<!-- /PAGE HEADER -->


			<!-- -->
			<section>
				<div class="container">
                    
        					
					<div class="row">

						<!-- LEFT COLUMNS -->
						<div class="col-md-9 col-sm-9 ">

							<ul class="row clients-dotted list-inline">
								<li class="col-md-3 col-sm-3 col-xs-6">
									<a href="#">
										<img class="img-responsive" src="assets/images/new/brands/1.jpg" alt="client" />
									</a>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<a href="#">
										<img class="img-responsive" src="assets/images/new/brands/2.jpg" alt="client" />
									</a>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<a href="#">
										<img class="img-responsive" src="assets/images/new/brands/3.jpg" alt="client" />
									</a>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<a href="#">
										<img class="img-responsive" src="assets/images/new/brands/4.jpg" alt="client" />
									</a>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<a href="#">
										<img class="img-responsive" src="assets/images/new/brands/5.jpg" alt="client" />
									</a>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<a href="#">
										<img class="img-responsive" src="assets/images/new/brands/6.jpg" alt="client" />
									</a>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<a href="#">
										<img class="img-responsive" src="assets/images/new/brands/7.jpg" alt="client" />
									</a>
								</li>
								<li class="col-md-3 col-sm-3 col-xs-6">
									<a href="#">
										<img class="img-responsive" src="assets/images/new/brands/8.jpg" alt="client" />
									</a>
								</li>
                                
							</ul>


						</div>
						<!-- /LEFT COLUMNS -->

						<!-- RIGHT COLUMNS -->
						<div class="col-md-3 col-sm-3">

							<h4>Ils nous font entièrement<strong> confiance</strong></h4>
							<p><em>Afin de mener à bien nos multiples missions, nous travaillont avec un pannel de partenaires présents partout dans le monde.</em></p>

							<hr />

							<h4><strong>Nous</strong> contacter</h4>
							<form action="#" method="post" class="sky-form clearfix">

								<label class="input">
									<i class="ico-prepend fa fa-user"></i>
									<input type="text" placeholder="Votre nom">
								</label>

								<label class="input">
									<i class="ico-prepend fa fa-envelope"></i>
									<input type="text" placeholder="Adresse e-mail">
								</label>

								<label class="textarea">
									<i class="ico-prepend fa fa-comment"></i>
									<textarea rows="3" placeholder="Tapez votre message..."></textarea>
								</label>

								<button class="btn btn-primary btn-sm pull-right">Envoyer le message</button>

							</form>

						</div>
						<!-- /RIGHT COLUMNS -->

					</div>
                    
                    
				</div>
			</section>
			<!-- / -->
            
            <!-- PARALLAX -->
                    <section class="parallax parallax-2" style="background-image: url('assets/images/new/bois1.jpg');">
                        <div class="overlay dark-7"><!-- dark overlay [1 to 9 opacity] --></div>

                        <div class="container text-center">

                            <h2 class="font-raleway margin-bottom-10">
                                <span class="countTo" data-speed="4000">1377</span> clients
                            </h2>

                            <h3 class="size-25">Ils sont <span>satisfaits</span>. Nous sommes <span>heureux</span>!</h3>

                        </div>

                    </section>
            <!-- /PARALLAX -->

            
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
		
		<!-- STYLESWITCHER - REMOVE -->
		<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>
	</body>
</html>