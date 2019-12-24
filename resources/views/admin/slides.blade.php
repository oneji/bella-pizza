@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="row">

            
            @if ($slides->count() > 0)
                @foreach ($slides as $slide)
                <div class="col-sm-6">   
                    <div class="card mb-2" style="width: 100%;">
                        <img class="card-img-top" src="{{ asset($slide->slide) }}">
                        <div class="card-body">
                            <button class="btn btn-danger btn-block btn-sm">Delete</button>
                        </div>
                    </div>                 
                </div>                 
                @endforeach
            @else
                <div class="alert alert-info" role="alert">
                    No slides added yet.
                </div>
            @endif
        </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.slides.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-0">
                            <input name="slides[]" type="file" multiple class="mb-3">
                            <button type="submit" class="btn btn-success btn-block">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
@endsection