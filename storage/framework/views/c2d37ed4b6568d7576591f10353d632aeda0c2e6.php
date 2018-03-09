<!DOCTYPE html>
<html lang="en-us" id="extr-page">
    <head>
        <meta charset="utf-8">
        <title> SmartAdmin</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- #CSS Links -->
        <!-- Basic Styles -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/font-awesome.min.css')); ?>">

        <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-production-plugins.min.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-production.min.css')); ?>">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-skins.min.css')); ?>">

        <!-- SmartAdmin RTL Support -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/smartadmin-rtl.min.css')); ?>"> 

        <!-- We recommend you use "your_style.css')}}" to override SmartAdmin
             specific styles this will also ensure you retrain your customization with each SmartAdmin update.
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/your_style.css')); ?>"> -->

        <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo e(asset('css/demo.min.css')); ?>">

        <!-- #FAVICONS -->
        <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

        <!-- #GOOGLE FONT -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">


    </head>

    <body class="animated fadeInDown">

        <header id="header">

            <div id="logo-group">
                <span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
            </div>

            <span id="extr-page-header-space"> <span class="hidden-mobile hiddex-xs">Need an account?</span> <a href="register.html" class="btn btn-danger">Create account</a> </span>

        </header>

        <div id="main" role="main">

            <!-- MAIN CONTENT -->
            <?php echo $__env->yieldContent('content'); ?>

        </div>

        <!--================================================== -->	

        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
        <script src="<?php echo e(asset('js/plugin/pace/pace.min.js')); ?>"></script>

        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script> if (!window.jQuery) {
    document.write('<script src="<?php echo e(asset('js / libs / jquery - 3.2.1.min.js')); ?>"><\/script>');}</script>

        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script> if (!window.jQuery.ui) {
    document.write('<script src="js/libs/jquery-ui.min.js"><\/script>');}</script>

        <!-- IMPORTANT: APP CONFIG -->
        <script src="<?php echo e(asset('js/app.config.js')); ?>"></script>

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events 		
        <script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

        <!-- BOOTSTRAP JS -->		
        <script src="<?php echo e(asset('js/bootstrap/bootstrap.min.js')); ?>"></script>

        <!-- JQUERY VALIDATE -->
        <script src="<?php echo e(asset('js/plugin/jquery-validate/jquery.validate.min.js')); ?>"></script>

        <!-- JQUERY MASKED INPUT -->
        <script src="<?php echo e(asset('js/plugin/masked-input/jquery.maskedinput.min.js')); ?>"></script>

        <!--[if IE 8]>
                
                <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
                
        <![endif]-->

        <!-- MAIN APP JS FILE -->
        <script src="<?php echo e(asset('js/app.min.js')); ?>"></script>

        <script>
runAllForms();

$(function () {
// Validation
    $("#login-form").validate({
// Rules for form validation
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 3,
                maxlength: 20
            }
        },

// Messages for form validation
        messages: {
            email: {
                required: 'Please enter your email address',
                email: 'Please enter a VALID email address'
            },
            password: {
                required: 'Please enter your password'
            }
        },

// Do not change code below
        errorPlacement: function (error, element) {
            error.insertAfter(element.parent());
        }
    });
});
        </script>

    </body>
</html>