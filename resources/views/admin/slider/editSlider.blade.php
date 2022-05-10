@extends('admin.layouts')
@section('content')
    <h2> Edit Slider </h2>
    <form action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="title">Title</label>
                    @error('title')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="title" id="name" value="{{ $slider->title  }}"
                    slider
                        placeholder="Enter your title">
                </div>
                <div class="form-group col-md-6">
                    <label for="slug">SUB Title</label>
                    @error('sub_title')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="sub_title" id="email" value="{{ $slider->sub_title }}"
                        placeholder="Enter Your sub title">
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
                   <label for="sub_title">Button Text</label>
                    @error('button_text')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                    <input type="text" class="form-control" name="button_text" id="button_text" value="{{ $slider->button_text }}"
                        placeholder="Enter button text">
                </div>
            </div>


            <input type="submit" class="btn btn-block btn-primary text-center" value="Add Product">
    </div>

    </form>
@endsection
