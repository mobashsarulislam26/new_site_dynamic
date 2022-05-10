@extends('admin.layouts')
@section('content')
    <div class="container">

        <a href="{{ route('cover.create') }}" class="btn btn-primary">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New Banner</a>
        <div class="container wrapper">
            <table class="table data_table table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-2">Title</th>
                        <th class="col-md-2">Image</th>
                        <th class="col-md-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productCover as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->image }}</td>
                            <td>

                                <form action="{{ route('cover.destroy', $item->id) }}" method="post">
                                    {{-- <a class="btn btn-primary" href="{{ route('cover.edit', $item->id) }}"></a> --}}

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
