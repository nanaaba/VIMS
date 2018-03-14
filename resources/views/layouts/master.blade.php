<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

		<title> VIMS </title>
		<meta name="description" content="">
		<meta name="author" content="">
			
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Basic Styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css')}}">

		<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production-plugins.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production.min.css')}}">
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-skins.min.css')}}">

		<!-- SmartAdmin RTL Support  -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-rtl.min.css')}}">

		<!-- We recommend you use "your_style.css')}}" to override SmartAdmin
		     specific styles this will also ensure you retrain your customization with each SmartAdmin update.
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/your_style.css')}}"> -->

		<!-- Demo purpose only: goes with demo.js')}}, you can delete this css when designing your own WebApp -->
		<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/demo.min.css')}}">

		<!-- FAVICONS -->
		<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
		<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

		<!-- GOOGLE FONT -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

		<!-- Specifying a Webpage Icon for Web Clip 
			 Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
		<link rel="apple-touch-icon" href="img/splash/sptouch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="img/splash/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="img/splash/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="img/splash/touch-icon-ipad-retina.png">

	</head>
	
	
	<body class="smart-style-4">

		 @include('layouts.header')

            @include('layouts.nav')
		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

		<!-- MAIN PANEL -->
		<div id="main" role="main">
                @yield('content')

		
		</div>
	
	 @include('layouts.footer')
         
         @yield('customjs')

	</body>

</html>