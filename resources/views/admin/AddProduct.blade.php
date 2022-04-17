@extends('admin.layouts')
@section('content')
    <h2>Add Product</h2>
    <div class='row'>
        <a href="{{ route('Product.index') }}" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i> View Product
        </a>

    <form action="{{ route('Product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Product Name</label>
                @error('name')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"
                    placeholder="Enter Product Name">
            </div>
            <div class="form-group col-md-6">
                <label for="slug">Slug</label>
                @error('slug')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="slug" id="email" value="{{ old('slug') }}"
                    placeholder="Enter slug">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for=" ">Short description</label>
                @error('short_description')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror

                <textarea id="short_description" class="form-control" name="short_description" value=""
                    placeholder="short description" rows="6" cols="50">{{ old('short_description') }}</textarea>
                @error('short_description')
                    <span style="color: red">{{ $message }}</span>
                @enderror


            </div>
            <div class="form-group col-md-6">
                <label for="password">Description</label>
                @error('description')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <textarea id="description" class="form-control" name="description" value="" placeholder="description" rows="6"
                    cols="50">{{ old('description') }}</textarea>
                @error('description')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address">Sales Price</label>
                @error('sale_price')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="sale_price" id="sale_price"
                    value="{{ old('sale_price') }}" placeholder="Enter sales price">
            </div>
            <div class="col-md-6">
                <label for="status">Stock Status</label><br>
                @error('stockStatus')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <select id="stockStatus" class="custom-select" name="stockStatus">
                    <option value="in_stock">in_stock</option>
                    <option value="out_of_stock">out_of_stock</option>
                </select>
            </div>

        </div>
        <div class="form-row col-md-12">
            <div class="form-group col-md-6">
                <label for="customFile">Image</label>
                @error('image')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="category_id">Category</label>
                <select class="form-control" id="item" name='category_id'>
                    <option value="">Select Category</option>
                    @foreach ($category as $categorys)
                        @if (old('category_id') == $categorys->id)
                            <option value="{{ $categorys->id }}" {{ 'selected' }}>{{ $categorys->name }}</option>
                        @else
                            <option value="{{ $categorys->id }}">{{ $categorys->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>


        <input type="submit" class="btn btn-block btn-primary text-center" value="Add Product">
        </div>

    </form>
@endsection
