@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-menu-category-tab" data-toggle="pill" href="#v-pills-menu-category" role="tab" aria-controls="v-pills-menu-category" aria-selected="true">Menu categories</a>
                    <a class="nav-link" id="v-pills-menu-item-tab" data-toggle="pill" href="#v-pills-menu-item" role="tab" aria-controls="v-pills-menu-item" aria-selected="false">Menu items</a>
                  </div>                  
            </div>
            <div class="col-md-10">

            </div>
            </div>
        </div>
    </div>
@endsection