@extends('layouts.site')

@section('content')
    <div class="page-bg" style=" background-image: url({{ asset('site/upload/bg-pizza.jpg') }}); "></div>
    <div id="container">
        <!-- start container -->
        <div class="page-title-wrapper">
            <div class="page-title-outher">
                <div class="page-title-inner">
                    <span class="page-title-icon flaticon-pizza-slice"></span>
                    <h1 class="page-title">About us</h1>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="page-wrapper">
            <h1>Located in the heart of Dushanbe, Bella Pizza brings the taste of New York pizza to Tajikistan.</h1>
            <p>Born out of a dream to build a quality pizza business, Bella Pizza opened in December 2016 and is located at the Dom Pechat area at the corner of Rudaki Road - just across from the "twin towers" building and close to the Cafina TV station.</p>
            <p>Since our launch, Bella Pizza has been on a journey to both develop great pizzas, pastas and authentic Italian coffees. We look forward to serving you soon! Contact us</p>
            <p><img class="aligncenter size-full wp-image-63" src="{{ asset('site/upload/vegies.jpg') }}" alt="" width="550" /></p>
            <div class="clear"></div>
        </div>
        <!-- end page wrapper -->
    </div>
    <!-- end container -->
    <div class="clear"></div>
@endsection

@section('scripts')
    <script type='text/javascript' src='{{ asset('site/js/modernizr.custom.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/js/jquery.animsition.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/js/superfish.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/js/waypoints.min.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/js/jquery.mobilemenu.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/js/custom.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/js/custom-inline-js.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/js/jquery.isotope.min.js') }}'></script>
@endsection