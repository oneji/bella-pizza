@extends('layouts.site')

@section('content')
    <div class="page-bg" style=" background-image: url({{ asset('site/upload/bg-pizza.jpg') }}); "></div>
    <div id="container" class="template-contact-container">
        <!-- start container -->
        <div class="page-title-wrapper">
            <div class="page-title-outher">
                <div class="page-title-inner">
                    <span class="page-title-icon flaticon-pizza-slice"></span>
                    <h1 class="page-title">Contact</h1>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="page-wrapper">
            <div class="contact-maps">
                <div id="map_canvas" class="mapStyleClass"></div>
            </div>
            <div class="contact-info-wrapper">
                <div class="contact-details">
                    <div class="contact-detail contact-detail1">
                        <div class="contact-detail-title">Address</div>
                        <div class="contact-detail-content">
                            <p>{{ $about->address }}</p>
                        </div>
                    </div>
                    <div class="contact-detail contact-detail2">
                        <div class="contact-detail-title">Call</div>
                        <div class="contact-detail-content">
                            <p>Call us for home or work delivery at <br /> {{ $about->phone_number }}</p>
                        </div>
                    </div>
                    <div class="contact-detail contact-detail3">
                        <div class="contact-detail-title">Opening hours</div>
                        <div class="contact-detail-content">
                            <p>{{ $about->opening_hours }}</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <div role="form" class="wpcf7" id="wpcf7-f49-p15-o1" lang="en-US" dir="ltr">
                        <div class="screen-reader-response"></div>

                        <form action="{{ route('site.contact.save') }}" method="POST">
                            @csrf
                            <div class="albertos-contact-form">
                                <div class="contact-detail-title">Contact Form</div>
                                <div class="app-name">
                                    <span class="wpcf7-form-control-wrap name-input">
                                        <input name="name" type="text" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" placeholder="Enter your name" />
                                    </span>
                                </div>
                                <div class="app-phone">
                                    <span class="wpcf7-form-control-wrap email-input">
                                        <input name="email" type="email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" placeholder="Enter your email" />
                                    </span>
                                </div>
                                <span class="wpcf7-form-control-wrap appointment-message">
                                    <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" placeholder="Enter your message"></textarea>
                                </span>
                                <div class="clear"></div>

                                <div class="contact-submit">
                                    <input type="submit" value="Send message" class="wpcf7-form-control wpcf7-submit"/>
                                    <div id="msg" class="message"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
    <script type='text/javascript' src='{{ asset('site/js/contact-form.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/js/custom-inline-js.js') }}'></script>
    <script type='text/javascript' src='{{ asset('site/js/jquery.isotope.min.js') }}'></script>
@endsection