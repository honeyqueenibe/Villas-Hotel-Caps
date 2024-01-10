@extends('layout')
@section('content')
              <!-- Begin Page Content -->
              <div class="container-fluid">



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit RoomTypes
        <a href="{{url('/admin/roomtype')}}" class="float-right btn-primary btn-sm">View All</a>
        </h6>
    </div>
    <div class="card-body">
        @if(Session::has('success'))
         <p class="text-success">{{session('success')}}</p>
        @endif
        <div class="table-responsive">
            <form action="{{url('admin/roomtype/'.$data->id)}}" method="post">
                @csrf
               @method('put')
                <table class="table table-bordered" >
                <tr>
                   <th>Title</th>
                   <td><input type="text" value="{{$data->title}}" name="title" class="form-control"></td>
                </tr>
                <tr>
                   <th>Price</th>
                   <td><input type="text" value="{{$data->price}}" name="price" class="form-control"></td>
                </tr>
                <tr>
                    <th>Detail</th>
                    <td><textarea name="detail" value="{{$data->detail}}" id="" cols="30" rows="10" class="form-control">
                        {{$data->detail}}
                    </textarea></td>
                </tr>
                <tr>
                                            <th>Gallery Images</th>
                                            <td>
                                                <table class="table table-bordered mt-3">
                                                    <tr>
                                                        <input type="file" multiple name="imgs[]" /> 
                                                        @foreach($data->roomtypeimgs as $image)
                                                    <td class="imgcol{{$image->id}}">
                                                        <img width="150" src="{{asset($image->img_src)}}" />
<p class="mt-2">
    <button type="button" onclick="return confirm('Are you sure you want to delete this image??')" class="btn btn-danger btn-sm delete-image" data-image-id="{{$image->id}}"><i class="fa fa-trash"></i></button>
</p>
                                                        </td>
                                                    @endforeach
                                                        
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                    
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-success btn-sm" Value="Update">
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
    <script type="text/javascript">
    $(document).ready(function(){
        $(".delete-image").on('click',function(){
            var _img_id=$(this).attr('data-image-id');
            var _vm=$(this);
            $.ajax({
                url:"{{url('admin/roomtypeimage/delete')}}/"+_img_id,
                dataType:'json',
                beforeSend:function(){
                    _vm.addClass('disabled');
                },
                success:function(res){
                    if(res.bool==true){
                        $(".imgcol"+_img_id).remove();
                    }
                    _vm.removeClass('disabled');
                }
            });
        });
    });
</script>
    @endsection
@endsection