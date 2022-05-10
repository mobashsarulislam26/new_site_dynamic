@extends('admin.layouts')
@section('content')
    <div class="container">
        <h2> Add Slider </h2>
        <a href="{{ route('slider.create') }}" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New Slider </a>
        <div class="container wrapper">
            <table class="table data_table table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-2">Title</th>
                        <th class="col-md-2">Sub Title</th>
                        <th class="col-md-2">Image</th>
                        <th class="col-md-2">Button_text</th>
                        <th class="col-md-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sliders as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->sub_title }}</td>
                            <td>{{ $item->image }}</td>
                            <td>{{ $item->button_text }}</td>
                            <td>
                                <form action="{{ route('slider.destroy', $item->id) }}" method="post">
                                    <a class="btn btn-primary" href="{{ route('slider.edit', $item->id) }}">Edit</a>

                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
