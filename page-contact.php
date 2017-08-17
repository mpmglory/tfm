<!DOCTYPE html>
	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>CONTACTS</title>
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
					<h1 class="uppercase">à propos de nous</h1>
				</div>
			</section>
			<!-- /PAGE HEADER -->



			<!-- -->
			<section>
				<div class="container">

					<!-- 
					Available heights
						height-100
						height-150
						height-200
						height-250
						height-300
						height-350
						height-400
						height-450
						height-500
						height-550
						height-600
					-->
					<!-- <div id="map3" class="height-30 margin-bottom-60"></div> -->
                    <div class="row">

						<!-- FORM -->
						<div class="col-md-9 col-sm-9">
							<h2>Ecrivez nous</h2>

							<p>
								Laissez nous un message avec vos préoccupations et vos coordonnées. Nous nous ferons plaisir de revenir vers vous.
							</p>						
							<!--
								MESSAGES
								
									How it works?
									The form data is posted to php/contact.php where the fields are verified!
									php.contact.php will redirect back here and will add a hash to the end of the URL:
										#alert_success 		= email sent
										#alert_failed		= email not sent - internal server error (404 error or SMTP problem)
										#alert_mandatory	= email not sent - required fields empty
										Hashes are handled by assets/js/contact.js

									Form data: required to be an array. Example:
										contact[email][required]  WHERE: [email] = field name, [required] = only if this field is required (PHP will check this)
										Also, add `required` to input fields if is a mandatory field. 
										Example: <input required type="email" value="" class="form-control" name="contact[email][required]">

									PLEASE NOTE: IF YOU WANT TO ADD OR REMOVE FIELDS (EXCEPT CAPTCHA), JUST EDIT THE HTML CODE, NO NEED TO EDIT php/contact.php or javascript
												 ALL FIELDS ARE DETECTED DINAMICALY BY THE PHP

									WARNING! Do not change the `email` and `name`!
												contact[name][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
												contact[email][required] 	- should stay as it is because PHP is using it for AddReplyTo (phpmailer)
							-->

							<!-- Alert Success -->
							<div id="alert_success" class="alert alert-success margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Thank You!</strong> Your message successfully sent!
							</div><!-- /Alert Success -->


							<!-- Alert Failed -->
							<div id="alert_failed" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>[SMTP] Error!</strong> Internal server error!
							</div><!-- /Alert Failed -->


							<!-- Alert Mandatory -->
							<div id="alert_mandatory" class="alert alert-danger margin-bottom-30">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Sorry!</strong> You need to complete all mandatory (*) fields!
							</div><!-- /Alert Mandatory -->


							<form action="php/contact.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<input type="hidden" name="action" value="contact_send" />

									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label for="contact:name">Full Name *</label>
												<input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
											</div>
											<div class="col-md-4">
												<label for="contact:email">E-mail Address *</label>
												<input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
											</div>
											<div class="col-md-4">
												<label for="contact:phone">Phone</label>
												<input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-8">
												<label for="contact:subject">Subject *</label>
												<input required type="text" value="" class="form-control" name="contact[subject][required]" id="contact:subject">
											</div>
											<div class="col-md-4">
												<label for="contact_department">Department</label>
												<select class="form-control pointer" name="contact[department]">
													<option value="">--- Select ---</option>
													<option value="Marketing">Marketing</option>
													<option value="Webdesign">Webdesign</option>
													<option value="Architecture">Architecture</option>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="form-group">
											<div class="col-md-12">
												<label for="contact:message">Message *</label>
												<textarea required maxlength="10000" rows="8" class="form-control" name="contact[message]" id="contact:message"></textarea>
											</div>
										</div>
									</div>

								</fieldset>

								<div class="row">
									<div class="col-md-12">
										<button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
									</div>
								</div>
							</form>

						</div>
						<!-- /FORM -->


						<!-- INFO -->
						<div class="col-md-3 col-sm-3">

							<h2>Visit Us</h2>

							<p>
								Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets.
							</p>

							<hr />

							<p>
								<span class="block"><strong><i class="fa fa-map-marker"></i> Address:</strong> Street Name, City Name, Country</span>
								<span class="block"><strong><i class="fa fa-phone"></i> Phone:</strong> <a href="tel:1800-555-1234">1800-555-1234</a></span>
								<span class="block"><strong><i class="fa fa-envelope"></i> Email:</strong> <a href="mailto:mail@yourdomain.com">mail@yourdomain.com</a></span>
							</p>

							<hr />

							<h4 class="font300">Business Hours</h4>
							<p>
								<span class="block"><strong>Monday - Friday:</strong> 10am to 6pm</span>
								<span class="block"><strong>Saturday:</strong> 10am to 2pm</span>
								<span class="block"><strong>Sunday:</strong> Closed</span>
							</p>

						</div>
						<!-- /INFO -->

					</div>

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
		
		<!-- STYLESWITCHER - REMOVE -->
		<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>

		<!-- PAGELEVEL SCRIPTS -->
		<script type="text/javascript" src="assets/js/contact.js"></script>

		<!-- 
			GMAP.JS 
			http://hpneo.github.io/gmaps/
		-->
		<script type="text/javascript" src="//maps.google.com/maps/api/js?key=AIzaSyCqCn84CgZN6o1Xc3P4dM657HIxkX3jzPY"></script>
		<script type="text/javascript" src="assets/plugins/gmaps.js"></script>
		<script type="text/javascript">

			jQuery(document).ready(function(){

				/**
					@MULTIPLE MARKERS GOOGLE MAP
				**/
				map3 = new GMaps({
					div: '#map3',
					lat: -12.043333,
					lng: -77.028333
				});
				
				// Marker 1
				map3.addMarker({
					lat: -12.043333,
					lng: -77.03,
					title: 'Lima',
					details: {
					database_id: 42,
					author: 'HPNeo'
					},
					click: function(e){
						if(console.log) {
							console.log(e);
						}
						alert('You clicked in this marker');
					}
				});
				
				// Marker 2
				map3.addMarker({
					lat: -12.042,
					lng: -77.028333,
					title: 'Marker with InfoWindow',
					infoWindow: {
						content: '<p>HTML Content</p>'
					}
				});


			});

		</script>
	</body>
</html>