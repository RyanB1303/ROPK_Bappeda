<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> SmartAdmin </title>
		<meta name="description" content="">
		<meta name="author" content="">
			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo TEMPLATE_ASSETS; ?>css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo TEMPLATE_ASSETS; ?>css/font-awesome.min.css">

		<!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo TEMPLATE_ASSETS; ?>css/smartadmin-production.css">
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo TEMPLATE_ASSETS; ?>css/smartadmin-skins.css">

		<!-- SmartAdmin RTL Support is under construction
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo TEMPLATE_ASSETS; ?>css/smartadmin-rtl.css"> -->

		<!-- We recommend you use "your_style.css" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo TEMPLATE_ASSETS; ?>css/your_style.css"> -->

		<!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="<?php echo TEMPLATE_ASSETS; ?>css/demo.css">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="<?php echo TEMPLATE_ASSETS; ?>img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="<?php echo TEMPLATE_ASSETS; ?>img/favicon/favicon.ico" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="<?php echo TEMPLATE_ASSETS; ?>http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="<?php echo TEMPLATE_ASSETS; ?>img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo TEMPLATE_ASSETS; ?>img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo TEMPLATE_ASSETS; ?>img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo TEMPLATE_ASSETS; ?>img/splash/touch-icon-ipad-retina.png">
		
		<!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		
		<!-- Startup image for web apps -->
		<link rel="apple-touch-startup-image" href="<?php echo TEMPLATE_ASSETS; ?>img/splash/ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
		<link rel="apple-touch-startup-image" href="<?php echo TEMPLATE_ASSETS; ?>img/splash/ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
		<link rel="apple-touch-startup-image" href="<?php echo TEMPLATE_ASSETS; ?>img/splash/iphone.png" media="screen and (max-device-width: 320px)">

	</head>
	<body class="">

		<!-- HEADER -->
		<header id="header">
			<div id="logo-group">

				<!-- PLACE YOUR LOGO HERE -->
				<span id="logo"> <img src="<?php echo TEMPLATE_ASSETS; ?>img/logo.png" alt="SmartAdmin"> </span>
				<!-- END LOGO PLACEHOLDER -->
			</div>

			<!-- pulled right: nav area -->
			<div class="pull-right">

				<!-- collapse menu button -->
				<div id="hide-menu" class="btn-header pull-right">
					<span> <a href="<?php echo TEMPLATE_ASSETS; ?>javascript:void(0);" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
				</div>
				<!-- end collapse menu -->

				<!-- logout button -->
				<div id="logout" class="btn-header transparent pull-right">
					<span> <a href="<?php echo TEMPLATE_ASSETS; ?>login.html" title="Sign Out" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
				</div>
				<!-- end logout button -->

				<!-- fullscreen button -->
				<div id="fullscreen" class="btn-header transparent pull-right">
					<span> <a href="<?php echo TEMPLATE_ASSETS; ?>javascript:void(0);" onclick="launchFullscreen(document.documentElement);" title="Full Screen"><i class="fa fa-fullscreen"></i></a> </span>
				</div>
				<!-- end fullscreen button -->

			</div>
			<!-- end pulled right: nav area -->

		</header>
		<!-- END HEADER -->

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a href="<?php echo TEMPLATE_ASSETS; ?>javascript:void(0);" id="show-shortcut">
						<img src="<?php echo TEMPLATE_ASSETS; ?>img/avatars/sunny.png" alt="me" class="online" /> 
						<span>
							john.doe 
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive-->
			<nav>
				<ul>
					<li class="">
						<a href="<?php echo TEMPLATE_ASSETS; ?>ajax/dashboard.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
					</li>
					<li>
						<a href="<?php echo TEMPLATE_ASSETS; ?>ajax/widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
					</li>
					<li>
						<a href="<?php echo TEMPLATE_ASSETS; ?>ajax/gallery.html"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Gallery</span></a>
					</li>
					
				</ul>
			</nav>
			<span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

		</aside>
		<!-- END NAVIGATION -->

		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> <span id="refresh" class="btn btn-ribbon" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true" data-reset-msg="Would you like to RESET all your saved widgets and clear LocalStorage?"><i class="fa fa-refresh"></i></span> </span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<!-- This is auto generated -->
				</ol>
				<!-- end breadcrumb -->
			</div>
			<!-- END RIBBON -->

			<!-- MAIN CONTENT -->
			<div id="content">

			</div>
			<!-- END MAIN CONTENT -->

		</div>
		<!-- END MAIN PANEL -->

		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo TEMPLATE_ASSETS; ?>js/plugin/pace/pace.min.js"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="<?php echo TEMPLATE_ASSETS;?>js/libs/jquery-2.0.2.min.js"></script>
		<script src="<?php echo TEMPLATE_ASSETS;?>js/libs/jquery-ui-1.10.3.min.js"></script>

		<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

		<!-- BOOTSTRAP JS -->
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/bootstrap/bootstrap.min.js"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/notification/SmartNotification.min.js"></script>

		<!-- JARVIS WIDGETS -->
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/smartwidgets/jarvis.widget.min.js"></script>

		<!-- EASY PIE CHARTS -->
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

		<!-- SPARKLINES -->
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/plugin/sparkline/jquery.sparkline.min.js"></script>

		<!-- JQUERY VALIDATE -->
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/plugin/jquery-validate/jquery.validate.min.js"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/plugin/masked-input/jquery.maskedinput.min.js"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/plugin/select2/select2.min.js"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

		<!-- browser msie issue fix -->
		<script src="<?php echo TEMPLATE_ASSETS; ?>js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

	</body>

</html>