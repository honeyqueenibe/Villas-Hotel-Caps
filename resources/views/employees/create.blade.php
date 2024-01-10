@extends('layout')

@section('content')
<div class="card" style="margin: 20px;">
  <div class="card-header">Create New Employee</div>
  <div class="card-body">
       
      <form action="{{ url('/admin/employee') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                            @endif

                            @if(Session::has('success'))
                            <p class="text-success">{{session('success')}}</p>
                            @endif
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input class="form-control" name="photo" type="file" id="photo">
 
         
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@endsection