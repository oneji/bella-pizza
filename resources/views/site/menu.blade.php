@extends('layouts.site')

@section('content')
    <div class="page-bg" style=" background-image: url({{ asset('site/upload/bg-pizza.jpg') }}); "></div>
    <div id="container">
        <!-- start container -->
        <div class="page-title-wrapper">
            <div class="page-title-outher">
                <div class="page-title-inner">
                    <span class="page-title-icon flaticon-pizza-slice"></span>
                    <h1 class="page-title">Menu</h1>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="page-wrapper">
            <div class="offer-menu-wrapper">
                <ul id="filters" class="single-offer-category-filter option-set" data-option-key="filter">
                    @foreach ($menuCategories as $index => $category)
                        <li class="filter-cat"><a class="{{ $index === 0 ? 'selected' : null }}" href="#filter" data-option-value=".cat{{ $category['id'] }}">{{ $category['category_name'] }}</a></li>
                    @endforeach
                    {{-- <li class="filter-cat"><a class="selected" href="#filter" data-option-value=".cat1">NY style pizzas</a></li>
                    <li class="filter-cat"><a href="#filter" data-option-value=".cat2">Sweat pizzas</a></li>
                    <li class="filter-cat"><a href="#filter" data-option-value=".cat3">Pasta</a></li>
                    <li class="filter-cat"><a href="#filter" data-option-value=".cat4">Coffee & Tea</a></li> --}}
                </ul>

                <div class="offer-menu-items">
                    @foreach ($menuCategories as $index => $category)
                        @foreach ($category['menu_items'] as $idx => $item)
                            <div class="single-offer-category-item isotope-item cat{{ $category['id'] }}">
                                <div class="offer-menu2-item-single">
                                    <img class="offer-menu2-frame" src="{{ asset('site/images/frame.png') }}" />
                                    <div class="offer-menu2-shadow"></div>
                                    <div class="offer-menu2-thumb">
                                        <img class="offer-menu2-inner-frame" src="{{ asset('site/images/inner-shadow.png') }}" />
                                    </div>
                                    <div class="offer-menu2-thumb-image"><img src="{{ asset($item->cover_image) }}" width="313" height="220" alt="classic" /></div>
                                    <div class="clear"></div>
                                    <span class="offer-menu2-icon flaticon-pizza-slice"></span>
                                    <div class="offer-menu2-details">
                                        <div class="single-offer-menu2-title">{{ $item->title }}</div>
                                        <div class="single-offer-menu2-content">
                                            <p style="margin-bottom: 10px">{{ $item->description }}</p>
                                        </div>
                                        <div class="single-offer-menu2-price">{{ $item->prices }} som</div>
                                    </div>
                                </div>
                            </div>                            
                        @endforeach
                    @endforeach
                </div>
                <div class="clear"></div>
            </div>
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