@extends('admin.layouts')
@section('content')
    <h2>Add Category</h2>
    <div class='row'></div>
    <form action="{{ route('Category.store') }}" method='post'>
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">

                <label for="name">Category Name</label>
                @error('name')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}"
                    placeholder="Enter Category Name">
            </div>
            <div class="form-group col-md-6">
                <label for="slug">Slug</label>
                @error('slug')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                @enderror
                <input type="text" class="form-control" name="slug" id="email" value="{{ old('slug') }}"
                    placeholder="Enter slug">
            </div>
            <input type="submit" value="Category Add" class="btn btn-block btn-primary text-center">
    </form>
    </div>
@endsection
