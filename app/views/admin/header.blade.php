
<!DOCTYPE html>
<html lang="en-us" >
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <title> SmartAdmin </title>
     <meta name="description" content="fonz cms">



    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <script>

        base_url = '{{ url() }}/';

    </script>
    
 <!-- #CSS Links -->
    <!-- Basic Styles -->
    <link media="all" type="text/css" rel="stylesheet" href="{{url('backend/smartadmin/css/bootstrap.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{url('backend/smartadmin/css/font-awesome.min.css')}}">
    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link media="all" type="text/css" rel="stylesheet" href="{{url('backend/smartadmin/css/smartadmin-production.min.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{url('backend/smartadmin/css/smartadmin-skins.min.css')}}">
    <!-- plugins -->
    <link media="all" type="text/css" rel="stylesheet" href="{{url('backend/plugins/redactor/redactor.css')}}">
    <link media="all" type="text/css" rel="stylesheet" href="{{url('backend/plugins/datepicker/css/datepicker.css')}}">
    <!-- SmartAdmin RTL Support is under construction
         This RTL CSS will be released in version 1.5
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.min.css"> -->

    <!-- We recommend you use "your_style.css" to override SmartAdmin
         specific styles this will also ensure you retrain your customization with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->
    <!-- <link media="all" type="text/css" rel="stylesheet" href="http://qdesign.vn/osanrae/public/backend/css/your_style.css">
 -->
    <!-- #FAVICONS -->
    <link rel="shortcut icon" href="{{url('backend/smartadmin/img/favicon/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{url('backend/smartadmin/img/favicon/favicon.png')}}" type="image/x-icon">

    <!-- #GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

    <!-- #APP SCREEN / ICONS -->
    <!-- Specifying a Webpage Icon for Web Clip
         Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
    <link rel="apple-touch-icon" href="{{url('backend/smartadmin/img/splash/sptouch-icon-iphone.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('backend/smartadmin/img/splash/touch-icon-ipad.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('backend/smartadmin/img/splash/touch-icon-iphone-retina.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('backend/smartadmin/img/splash/touch-icon-ipad-retina.png')}}">

    <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    

    <!-- #PLUGINS -->

    <script src="{{url('backend/js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{url('backend/js/jquery-ui-1.10.3.min.js')}}"></script>

    <!-- Startup image for web apps -->
    <link rel="apple-touch-startup-image" href="{{url('backend/smartadmin/img/splash/ipad-landscape.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
    <link rel="apple-touch-startup-image" href="{{url('backend/smartadmin/img/splash/ipad-portrait.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="{{url('backend/smartadmin/img/splash/iphone.png')}}" media="screen and (max-device-width: 320px)">
    {{HTML::script('backend/ckeditor/ckeditor.js')}}
    {{HTML::script('backend/ckeditor/config.js')}}
    <!-- ckeditor -->
   <script type="text/javascript" src='http://maps.google.com/maps/api/js?sensor=false&libraries=places'></script>
    {{HTML::script('backend/js/locationpicker.jquery.js')}} 

    <!-- Inout Autocomplete -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- Inout Autocomplete -->   

    </head>
    <body >
                        <!-- HEADER -->
                <header id="header">
                    <div id="logo-group">

                        <!-- PLACE YOUR LOGO HERE -->
                        <span id="logo"> <img src="{{url('backend/smartadmin/img/logo.png')}}" alt="SmartAdmin"> </span>
                        <!-- END LOGO PLACEHOLDER -->                       
                    </div>

                    

                    <!-- pulled right: nav area -->
                    <div class="pull-right">

                        <!-- collapse menu button -->
                        <div id="hide-menu" class="btn-header pull-right">
                            <span> <a href="javascript:void(0);" title="Collapse Menu" data-action="toggleMenu"><i class="fa fa-reorder"></i></a> </span>
                        </div>
                        <!-- end collapse menu -->

                        
                        <!-- logout button -->
                        <div id="logout" class="btn-header transparent pull-right">
                            <span> <a href="{{ url('logout') }}" title="Sign Out" data-action="userLogout" data-logout-msg="You can improve your security further after logging out by closing this opened browser"><i class="fa fa-sign-out"></i></a> </span>
                        </div>
                        <!-- end logout button -->

                        <!-- search mobile button (this is hidden till mobile view port) -->
                        <div id="search-mobile" class="btn-header transparent pull-right">
                            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
                        </div>
                        <!-- end search mobile button -->

                        

                        <!-- fullscreen button -->
                        <div id="fullscreen" class="btn-header transparent pull-right">
                            <span> <a href="javascript:void(0);" title="Full Screen" data-action="launchFullscreen"><i class="fa fa-arrows-alt"></i></a> </span>
                        </div>
                        <!-- end fullscreen button -->

                        


                    </div>
                    <!-- end pulled right: nav area -->

                </header>
                <!-- END HEADER -->