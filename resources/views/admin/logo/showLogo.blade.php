@extends('admin.layouts')
@section('content')
    <h2>View Logo </h2>
    <div class='container'>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Logo List</h3>
                    </div>
                    <a href="{{ route('Logo.create') }}" class="btn btn-primary">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New Logo</a>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($logos as $key => $value)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $value->name }}</td>
                                        <td>
                                            <img src="{{ asset('uploads/logo/' . $value->image) }}"
                                                alt="{{ $value->name }}" width="100px" height="100px">
                                        </td>
                                        <td>
                                            <a href="{{ route('Logo.edit', $value->id) }}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <form action="{{ route('Logo.destroy', $value->id) }}" method="post"
                                                style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </ @endsection @push('footer-script') @endpush
