@extends('products.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">
      
      <form action="{{ url('products') }}" method="post">
        {!! csrf_field() !!}
        <label>Product Name</label></br>
        <input type="text" name="product_name" id="product_name" class="form-control" required></br>
        <label>Price</label></br>
        <input type="number" name="price" id="price" class="form-control" required></br>
     
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop