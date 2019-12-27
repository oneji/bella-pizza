@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-success">
                    <div class="card-header border-success text-muted text-center">Admin panel</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="list-group">
                            <a href="{{ route('admin.about') }}" class="list-group-item list-group-item-action">About</a>
                            <a href="{{ route('admin.slides') }}" class="list-group-item list-group-item-action">Home page slides</a>
                            <a href="{{ route('admin.menu.categories') }}" class="list-group-item list-group-item-action">Menu categories</a>
                            <a href="{{ route('admin.menu.items') }}" class="list-group-item list-group-item-action">Menu items</a>
                            <a href="{{ route('admin.contact') }}" class="list-group-item list-group-item-action">Contact messages</a>
                        </div>
                    </div>

                    <div class="card-footer text-muted text-center">Choose one of the options to work with</div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
