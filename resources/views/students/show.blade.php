@extends('students.layout')
@section('content')


<div class="card">
  <div class="card-header">Product Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Detail : {{ $students->address }}</p>
        <p class="card-text">Price : {{ $students->mobile }}</p>
        <img
            src="/products/{{$students->image}}"
            class="rounded-circle" width="50px" height="50px"
            alt="image"/>
        </div>

    </hr>

  </div>
</div>
