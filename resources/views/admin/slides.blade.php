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
                                    <form action="{{ route('admin.slides.delete', [ 'id' => $slide->id ]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <h5 ><span style="width: 100%" class="badge badge-success">{{ $slide->slide_caption }}</span></h5>
                                        <button type="submit" class="btn btn-danger btn-block btn-sm">Delete</button>                            
                                    </form>
                                </div>
                            </div>                 
                        </div>                 
                    @endforeach
                @else
                    <div class="col-md-12">
                        <div class="alert alert-info" role="alert">
                            No slides added yet.
                        </div>
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
                            @if (Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('error') }}
                                </div>                                
                            @endif
                            <input name="slide" type="file" class="mb-3">
                            <input name="slide_caption" type="text" class="form-control mb-3" placeholder="Enter slide caption">
                            <button type="submit" class="btn btn-success btn-block">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>        
    </div>
@endsection