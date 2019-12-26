@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>                                
                    @endif
                    <form action="{{ route('admin.about.save') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input name="address" type="text" class="form-control" placeholder="Enter address" value="{{ $about['address'] }}">
                        </div>
                        <div class="form-group">
                            <label for="instagram">Instagram link</label>
                            <input name="instagram" type="text" class="form-control" placeholder="Enter instagram" value="{{ $about['instagram'] }}">
                        </div>
                        <div class="form-group">
                            <label for="facebook">Facebook link</label>
                            <input name="facebook" type="text" class="form-control" placeholder="Enter facebook" value="{{ $about['facebook'] }}">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input name="phone_number" type="text" class="form-control" placeholder="Enter phone number" value="{{ $about['phone_number'] }}">
                        </div>
                        <div class="form-group">
                            <label for="opening_hours">Opening hours</label>
                            <textarea name="opening hours" class="form-control" rows="4" placeholder="Enter opening hours">{{ $about['opening_hours'] }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success btn-block">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection