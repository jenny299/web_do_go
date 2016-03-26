<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

	<title> Login - SmartAdmin </title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Basic Styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/new/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/new/css/font-awesome.min.css">

	<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/new/css/smartadmin-production.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/new/css/smartadmin-skins.min.css">

	<!-- SmartAdmin RTL Support is under construction-->
	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/new/css/smartadmin-rtl.min.css">

	<!-- We recommend you use "your_style.css" to override SmartAdmin
	     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/new/css/your_style.css"> -->

	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/new/css/your_style.css">

	<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
	<link rel="stylesheet" type="text/css" media="screen" href="http://localhost:8080/new/css/demo.min.css">

	<!-- FAVICONS -->
	<link rel="shortcut icon" href="http://localhost:8080/new/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="icon" href="http://localhost:8080/new/img/favicon/favicon.ico" type="image/x-icon">

	<!-- GOOGLE FONT -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

	<!-- Specifying a Webpage Icon for Web Clip
		 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
	<link rel="apple-touch-icon" href="http://localhost:8080/new/img/splash/sptouch-icon-iphone.png">
	<link rel="apple-touch-icon" sizes="76x76" href="http://localhost:8080/new/img/splash/touch-icon-ipad.png">
	<link rel="apple-touch-icon" sizes="120x120" href="http://localhost:8080/new/img/splash/touch-icon-iphone-retina.png">
	<link rel="apple-touch-icon" sizes="152x152" href="http://localhost:8080/new/img/splash/touch-icon-ipad-retina.png">

	<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<!-- Startup image for web apps -->
	<link rel="apple-touch-startup-image" href="http://localhost:8080/new/img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
	<link rel="apple-touch-startup-image" href="http://localhost:8080/new/img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
	<link rel="apple-touch-startup-image" href="http://localhost:8080/new/img/splash/iphone.png" media="screen and (max-device-width: 320px)">

</head>
<body  id="extr-page" class="animated fadeInDown">
	<div id="main" role="main">

	<!-- MAIN CONTENT -->
	<div id="content" class="container">

		<div class="row">
			
			<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-lg-offset-4">
				<div class="well no-padding">
					<form action="<?php echo APP_URL; ?>" id="login-form" class="smart-form client-form">
						<header>
							Sign In
						</header>

						<fieldset>
							
							<section>
								<label class="label">Username</label>
								<label class="input"> <i class="icon-append fa fa-user"></i>
									<input type="text" name="username">
									<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter username</b></label>
							</section>

							<section>
								<label class="label">Password</label>
								<label class="input"> <i class="icon-append fa fa-lock"></i>
									<input type="password" name="password">
									<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
								
							</section>

							<section>
								<label class="checkbox">
									<input type="checkbox" name="remember">
									<i></i>Stay signed in</label>
							</section>
						</fieldset>
						<footer>
							<button type="submit" class="btn btn-primary">
								Sign in
							</button>
						</footer>
					</form>

				</div>
				
				
				
			</div>
		</div>
	</div>

</div>
<!-- END MAIN PANEL -->
</body>
</html>

