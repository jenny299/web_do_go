<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title')</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="Koupon HTML5 Template" />
    <meta name="description" content="Koupon - Premiun HTML5 Template for Coupons Website">
    <meta name="author" content="Tsoy">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{Asset('css/boostrap.css')}}">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="{{Asset('css/font_awesome.css')}}">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="{{Asset('css/styles.css')}}">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
<![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="{{Asset('css/mystyles.css')}}">
    <script src="{{Asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    <script src="{{Asset('js/locationpicker.jquery.js')}}"></script>


</head>


<!-- <body class="boxed" style="background-image: url(img/textures/wood-1.jpg)"> -->
<body class="boxed" style="background-image: url(<?php echo $background_config; ?>)">


    <div class="global-wrap">


        <!-- //////////////////////////////////
    //////////////MAIN HEADER///////////// 
    ////////////////////////////////////-->
        
        
        @include('header')

        <div class="gap"></div>


        <!-- //////////////////////////////////
    //////////////END MAIN HEADER////////// 
    ////////////////////////////////////-->


        <!-- //////////////////////////////////
    //////////////PAGE CONTENT///////////// 
    ////////////////////////////////////-->



        <div class="container">
            <div class="gap gap-small"></div>
                <div class="row">

                    @yield('content')
                    
                </div>
                <div class="gap"></div>
        </div>


        <!-- //////////////////////////////////
    //////////////END PAGE CONTENT///////// 
    ////////////////////////////////////-->



        <!-- //////////////////////////////////
    //////////////MAIN FOOTER////////////// 
    ////////////////////////////////////-->

        @include('footer')

        <!-- //////////////////////////////////
    //////////////END MAIN  FOOTER///////// 
    ////////////////////////////////////-->



        <!-- Scripts queries -->
        <script src="{{Asset('js/boostrap.min.js')}}"></script>
        <script src="{{Asset('js/countdown.min.js')}}"></script>
        <script src="{{Asset('js/flexnav.min.js')}}"></script>
        <script src="{{Asset('js/magnific.js')}}"></script>
        <script src="{{Asset('js/tweet.min.js')}}"></script>
        <script src="{{Asset('js/fitvids.min.js')}}"></script>
        <script src="{{Asset('js/mail.js')}}"></script>
        <script src="{{Asset('js/ionrangeslider.js')}}"></script>
        <script src="{{Asset('js/icheck.js')}}"></script>
        <script src="{{Asset('js/fotorama.js')}}"></script>
        <script src="{{Asset('js/card-payment.js')}}"></script>
        <script src="{{Asset('js/owl-carousel.js')}}"></script>
        <script src="{{Asset('js/masonry.js')}}"></script>
        <script src="{{Asset('js/nicescroll.js')}}"></script>

        <!-- Custom scripts -->
        <script src="js/custom.js"></script>
    </div>
</body>

</html>
