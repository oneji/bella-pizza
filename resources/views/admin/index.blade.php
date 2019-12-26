@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin panel</div>

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
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
