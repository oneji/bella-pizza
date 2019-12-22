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
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-menu-category" role="tabpanel" aria-labelledby="v-pills-menu-category-tab">
                        <div class="row">
                            <div class="col-sm-6">
                                @if ($menuCategories->count() > 0)                                
                                    <div class="list-group">
                                        @foreach ($menuCategories as $category)
                                            <button type="button" class="list-group-item list-group-item-action">{{ $category['category_name'] }}</button>
                                        @endforeach
                                    </div>                                
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
                                        <form action="{{ route('admin.menu.categories') }}" method="POST">
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
                        
                        
                    </div>

                    <div class="tab-pane fade" id="v-pills-menu-item" role="tabpanel" aria-labelledby="v-pills-menu-item-tab">
                        <div class="row">
                            <div class="col-sm-12 mb-2">
                                <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter">Add menu item</button>

                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <form enctype="multipart/form-data" method="POST" action="{{ route('admin.menu.items') }}">
                                    @csrf
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Menu item</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="title" class="col-form-label">Item title</label>
                                                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter item title">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="description" class="col-form-label">Item description</label>
                                                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter item description">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="prices" class="col-form-label">Item prices</label>
                                                        <input type="text" class="form-control" id="prices" name="prices" placeholder="Example: 25 / 30 / 50 / 60">
                                                    </div>

                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                              <span class="input-group-text">Cover image</span>
                                                            </div>
                                                            <div class="custom-file">
                                                              <input type="file" name="cover_image" class="custom-file-input" id="inputGroupFile01">
                                                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <select class="form-control" name="menu_category_id">
                                                            <option disabled>Choose menu category</option>
                                                            @foreach ($menuCategories as $category)
                                                                <option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary btn-sm">Add menu item</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                                                         
                                @if ($menuItems->count() > 0)
                                    @foreach ($menuItems as $item)
                                        <div class="col-sm-4">   
                                            <div class="card" style="width: 18rem;">
                                                <img class="card-img-top" src="{{ asset($item['cover_image']) }}" alt="Card image cap">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $item['title'] }}</h5>
                                                    <p class="card-text">{{ $item['description'] }}</p>
                                                </div>
                                            </div>  
                                        </div>                              
                                    @endforeach
                                @else
                                    <div class="alert alert-info" role="alert">
                                        No menu items added yet.
                                    </div>
                                @endif
                            
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection