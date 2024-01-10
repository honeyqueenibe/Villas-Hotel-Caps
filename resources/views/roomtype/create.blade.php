@extends('layout')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add RoomTypes

        <a href="{{url('/admin/roomtype')}}" class="float-right btn-primary btn-sm">View All</a>
        </h6>
    </div>
    <div class="card-body">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
        @endforeach
    @endif

        @if(Session::has('success'))
          <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form action="{{url('admin/roomtype')}}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-bordered">
                    <tr>
                        <th>Title</th>
                        <td><input type="text" name="title" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td><input type="text" name="price" class="form-control"></td>
                    </tr>
                    <tr>
                        <th>Detail</th>
                        <td><textarea name="detail" id="" cols="30" rows="10" class="form-control"></textarea></td>
                    </tr>

                    <tr>
                        <th>Gallery</th>
                        <td><input type="file" multiple name="images[]" /></td>
                     </tr>
                    
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="btn btn-success btn-sm">
                        </td>
                    </tr>
                </table>
            </form>
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