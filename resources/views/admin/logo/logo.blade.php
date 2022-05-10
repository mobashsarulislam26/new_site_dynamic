@extends('admin.layouts')
@section('content')
    <a href="{{ route('Logo.index') }}" class="btn btn-primary">
        <i class="fa fa-plus" aria-hidden="true"></i> View Logo</a>
    <div class='container'>
        <div class="row">
            <form action="{{ route('Logo.store') }}" method="post" enctype="multipart/form-data">

                @csrf
                <div class="form-group col-md-6">
                    <label>
                        <h4>Name</h4>
                    </label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label>
                        <h4>Add image</h4>
                    </label>
                    <input type="file" class="custom-file-input" name="image_favicon">
                </div>

                <div class="post_button">
                    <input type="submit" class="btn btn-block btn-success" value="Submit" />
                </div>
            </form>
        </div>
    </div>
@endsection

@push('footer-script')
@endpush
