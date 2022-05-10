@extends('admin.layouts')
@section('content')
    <h2> Add banner </h2>
    <div class="container"></div>
        <div class="row">
              <a href="{{ route('cover.index') }}" class="btn btn-primary">
        <i class="fa fa-plus" aria-hidden="true"></i> show Banner</a>
            <div class="col-md-12">
                <form action="{{ route('cover.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" id="image" placeholder="Enter image">
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection
