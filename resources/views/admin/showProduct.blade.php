 @extends('admin.layouts')
 @section('content')
     <div class="container">

         <div class="card">
             <div class="card-body">
                 <a href="{{ route('Product.create') }}" class="btn btn-primary">
                     <i class="fa fa-plus" aria-hidden="true"></i> Add New Product
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
                                 <th class="">#</th>
                                 <th class="col-md-1">Name</th>
                                 <th class="col-md-1">Slug</th>
                                 <th class="col-md-2">Short Description</th>
                                 <th class="col-md-2">Description</th>
                                 <th class="col-md-1">Sales price</th>
                                 <th class="col-md-1">Stock Status</th>
                                 <th class="col-md-2">Image</th>
                                 {{-- <th class="col-md-2">Images</th> --}}
                                 <th class="col-md-2">category name</th>
                                 <th class="col-md-2">Actions</th>
                             </tr>
                         </thead>
                         <tbody>
                             @foreach ($product as $item)
                                 <tr>
                                     <td>{{ $loop->iteration }}</td>
                                     <td>{{ $item->name }}</td>
                                     <td>{{ $item->slug }}</td>
                                     <td>{{ $item->short_description }}</td>
                                     <td>{{ $item->description }}</td>
                                     <td>{{ $item->sale_price }}</td>
                                     <td>{{ $item->stockStatus }}</td>
                                     <td>{{ $item->image }}</td>
                                     {{-- <td>{{ $item->images }}</td> --}}
                                     <td>{{ $item->Category->name }}</td>



                                     <td>

                                         <form action="{{ route('Product.destroy', $item->id) }}" method="post">
                                             <a class="btn btn-primary"
                                                 href="{{ route('Product.edit', $item->id) }}">Edit</a>

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
         </div>
     </div>
 @endsection
