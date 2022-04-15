@extends('admin.layouts')
@section('content')
    <h2>Logo Add Page</h2>
    <div class="container">
        <form action="{{ route('Logo.store') }}" method="post" enctype="multipart/form-data">

            @csrf
            <div class="image">
                {{-- <label>
                    <h4>Add image</h4>
                </label> --}}
                <input type="file" class="custom-file-input" name="image_logo">
            </div>

            <div class="post_button">
                <input type="submit" class="btn btn-success" value="Add Logo" />
            </div>
        </form>
    </div>
@endsection

@push('footer-script')
@endpush
