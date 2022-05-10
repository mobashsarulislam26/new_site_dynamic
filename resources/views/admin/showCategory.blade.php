@extends('admin.layouts')
@section('content')
    <h3>show category </h3>

    <div class="card">
        <div class="card-body">
            <a href="{{ route('Category.create') }}" class="btn btn-primary">
                <i class="fa fa-plus" aria-hidden="true"></i> Add New Category
            </a>
            <br />
            <br />

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="container wrapper">
                <table class="table data_table table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="col-md-1">#</th>
                            <th class="col-md-3">Name</th>
                            <th class="col-md-3">Slug</th>
                            <th class="col-md-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $categoryee)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $categoryee->name }}</td>
                                <td>{{ $categoryee->slug }}</td>
                                <td>
                                    <form action="{{ route('Category.destroy', $categoryee->id) }}" method="post">
                                        <a class="btn btn-primary"
                                            href="{{ route('Category.edit', $categoryee->id) }}">Edit</a>

                                        @csrf
                                        @method('delete')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
     
                    @endsection
