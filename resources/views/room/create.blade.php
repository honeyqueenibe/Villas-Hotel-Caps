@extends('layout')
@section('content')
              <!-- Begin Page Content -->
              <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Add Room
        <a href="{{url('admin/rooms')}}" class="float-right btn-primary btn-sm">View All</a>
        </h6>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
         <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form action="{{url('admin/rooms')}}" method="post">
                @csrf
            <table class="table table-bordered" >
                <tr>
                    <th>Select Room Type</th>
                    <td>
                        <select name="rt_id" class="form-control">
                            <option value="o">--- Select ---</option>
                            @foreach($roomtypes as $rt)
                            <option value="{{$rt->id}}">{{$rt->title}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <th>Title</th>
                    <td><input type="text" name="title" class="form-control"></td>
                </tr>
                <tr>
                    <td colsapn="2">
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