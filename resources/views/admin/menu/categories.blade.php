@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-6">
            @if ($menuCategories->count() > 0)
                    @foreach ($menuCategories as $category)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $category['category_name'] }}
                        <form action="{{ route('admin.menu.categories.delete', [ 'id' => $category['id'] ]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">delete</button>
                        </form>
                    </li>
                    @endforeach
                </ul>                                
            @else
                <div class="alert alert-info" role="alert">
                    No menu categories added yet.
                </div>                                
            @endif
        </div>

        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Add menu categories</h5>
                    <form action="{{ route('admin.menu.categories.save') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Category name</label>
                            <input name="category_name" type="text" class="form-control" placeholder="Enter menu category name">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection