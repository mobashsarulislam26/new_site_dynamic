@extends('admin.layouts')
@section('content')
    <h2>Add Category</h2>
    <div class='row'></div>
    <form action="{{ route('Category.update', $category->id) }}" method='post'>
        @csrf
        @method('put')
        <div class="form-row">
            <div class="form-group col-md-6">

                <label for="name">Category Name</label>
                @error('name')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}"
                    placeholder="Enter Category Name">
            </div>
            <div class="form-group col-md-6">
                <label for="slug">Slug</label>
                @error('slug')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="slug" id="email" value="{{ $category->slug }}"
                    placeholder="Enter slug">
            </div>
            <input type="submit" value="Update Category" class="btn btn-block btn-primary text-center">
    </form>
    </div>
@endsection
