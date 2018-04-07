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
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css')}}">

        <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production-plugins.min.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-production.min.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-skins.min.css')}}">

        <!-- SmartAdmin RTL Support -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/smartadmin-rtl.min.css')}}"> 

        <!-- We recommend you use "your_style.css')}}" to override SmartAdmin
             specific styles this will also ensure you retrain your customization with each SmartAdmin update.
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/your_style.css')}}"> -->

        <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/demo.min.css')}}">

        <!-- #FAVICONS -->
        <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

        <!-- #GOOGLE FONT -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">


    </head>

    <body class="animated fadeInDown">



        <div id="main" role="main">

            <!-- MAIN CONTENT -->
            @yield('content')

        </div>

        <!--================================================== -->	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
        <script src="{{ asset('js/plugin/pace/pace.min.js')}}"></script>
        <script src="{{ asset('js/app.config.js')}}"></script>	
        <script src="{{ asset('js/bootstrap/bootstrap.min.js')}}"></script>

        <script src="{{ asset('js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>

        <script src="{{ asset('js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script>

        <script src="{{ asset('js/app.min.js')}}"></script>

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

    $('#loginForm').submit(function (e) {
        e.preventDefault();
        var formData = $(this).serialize();

        console.log(formData);

        $('input:submit').attr("disabled", true);

        $.ajax({
            url: "{{url('authenticateuser')}}",
            type: "POST",
            data: formData,
            dataType:"json",
            success: function (data) {
                console.log('data : '+data.status);
                if (data.status == 0) {
                    window.location = "dashboard";
                } else {
                    $('#errordiv').show();
                    $('#errormsg').html(data.message);
                }

            },
            error: function (jXHR, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });



    });

        </script>

    </body>
</html>