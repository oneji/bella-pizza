<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">

    <!-- for mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon" />
    <link rel="icon" href="images/favicon.ico" type="image/x-ico" />
    <title>Bella Pizza</title>

    <link rel='stylesheet' href='{{ asset('site/rs-slider/css/settings.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/animsition.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/font-awesome.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/simple-line-icons.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/pe-icon-7-stroke.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/flaticon.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/owl.carousel.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/jquery.easy-pie-chart.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/owl.transitions.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/style.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/media.css') }}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{ asset('site/css/custom_script.css') }}' type='text/css' media='all' />

    <link href='http://fonts.googleapis.com/css?family=Merriweather%3A%2C400%7CPatua+One%3A400&amp;ver=1.0.0' rel='stylesheet' type='text/css' media='all' />
    <link href="http://fonts.googleapis.com/css?family=Patua+One:400" rel="stylesheet" property="stylesheet" type="text/css" media="all">


</head>

<body class="home page-template page-template-template-home page-template-template-home-php page page-id-7">
    <div class="animsition global-wrapper">
        <div id="header" class="header-wrapper">
            <div class="logo">
                <a href="{{ route('site.home') }}" title="Bella Pizza"><img class="logoImage" src="{{ asset('site/images/logo.png') }}" alt="Bella Pizza logo" /></a>
                <div class="clear"></div>
            </div>
            @component('site.components.menu')
            @endcomponent

            <div class="clear"></div>

            @component('site.components.footer')
            @endcomponent
        </div>

        @component('site.components.mobile-menu')
        @endcomponent

        <div class="container-wrapper">
            @yield('content')
            <div class="clear"></div>
        </div>
        
        @component('site.components.mobile-footer')
        @endcomponent
    </div>

    
    <script type='text/javascript' src='{{ asset('site/js/jquery/jquery.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/js/jquery/jquery-migrate.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/rs-slider/js/jquery.themepunch.tools.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/rs-slider/js/jquery.themepunch.revolution.min.js') }}'></script>
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyD3rVzWhxb6EGiqAD9HSrKb22gTo2HTqoA&amp;ver=1.0'></script>
    
    @yield('scripts')    
</body>
</html>