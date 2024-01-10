@extends('layout')
@section('content')
              <!-- Begin Page Content -->
              <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Customers
            <a href="{{url('/admin/customer/create')}}" class="float-right btn-primary btn-sm">Add New</a>
        </h6>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
        <p>{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>FullName</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Photo</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tfoot>
                <tr>
                        <th>#</th>
                        <th>FullName</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Photo</th>
                        <th>Action</th>
                        
                    </tr>
                </tfoot>
                <tbody>
                 @if($data)
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td>{{$d->full_name}}</td>
                        <td>{{$d->email}}</td>
                        <td>{{$d->mobile}}</td>
                        <td>
                        <img src="{{ asset($d->photo) }}" width= '50' height='50' class="img img-responsive" />
                        </td>
                        
                        <td>
                            <a href="{{url('admin/customer/' .$d->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{url('admin/customer/' .$d->id. '/edit')}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                            <a onclick="confirm('Are you sure to delete this data')" href="{{url('admin/customer/' .$d->id. '/delete')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                        
                    </tr>
                    @endforeach
                   @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@section('script')
 <!-- Custom styles for this page -->
 <link href="http://localhost:8000/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page level plugins -->
    <script src="http://localhost:8000/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost:8000/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="http://localhost:8000/js/demo/datatables-demo.js"></script>
    @endsection
@endsection