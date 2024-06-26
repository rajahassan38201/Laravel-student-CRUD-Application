@extends('students.layout')
@section('content')

<div class="card">
  <div class="card-header">Edit Product</div>
  <div class="card-body">

      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" required />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$students->name}}" class="form-control" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$students->address}}" class="form-control" required></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$students->mobile}}" class="form-control" required></br>

        <img
            src="/products/{{$students->image}}"
            class="rounded-circle" width="50px" height="50px"
            alt="image"/>
        <br><br><br>
        <button class="btn btn-danger">update</button>


    </form>

  </div>
</div>

@stop
