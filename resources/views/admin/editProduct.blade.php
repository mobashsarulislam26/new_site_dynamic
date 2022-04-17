@extends('admin.layouts')
@section('content')
    <h2>
        Edit Product</h2>
    {{-- {{ dd($product) }} --}}

    <form action="{{ route('Product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Product Name</label>
                @error('name')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="name" id="name" value=" {{ $product->name }}">
            </div>
            <div class="form-group col-md-6">
                <label for="slug">Slug</label>
                @error('slug')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="slug" id="email"
                    value="@if (old('slug')) {{ old('slug') }} @else {{ $product->slug }} @endif ">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for=" ">Short description</label>
                @error('short_description')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror

                <textarea id="short_description" class="form-control" name="short_description" value=""
                    placeholder="short description" rows="6" cols="50">
            @if (old($product->short_description))
{{ old($product->short_description) }}@else{{ $product->short_description }}
@endif
</textarea>
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
                    cols="50">  @if (old($product->description))
{{ old($product->description) }}@else{{ $product->description }}
@endif
        </textarea>
                @error('description')
                    <span style="color: red">{{ $message }}</span>
                @enderror
            </div>

        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="sale_price">Sales Price</label>
                @error('sale_price')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="sale_price" id="sale_price"
                    value="@if (old('sale_price')) {{ old('sale_price') }} @else {{ $product->sale_price }} @endif ">
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
                        <option value="{{ $categorys->id }}"
                            {{ $product->category_id == $categorys->id ? 'selected' : '' }}>
                            {{ $product->Category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>


        <input type="submit" class="btn btn-block btn-primary text-center" value="Update Product">
        </div>

    </form>
@endsection
