@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">Create Product</div>
  <div class="card-body">

      <form action="{{ url('student') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control" required></br>
        <label>Detail</label></br>
        <input type="text" name="address" id="address" class="form-control" required></br>
        <label>Price</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control" required></br>
        <label>Image</label></br>
        <input type="file" name="image" id="image" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
