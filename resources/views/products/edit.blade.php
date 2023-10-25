@extends('products.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('products/' .$products->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$products->id}}" id="id" />
        <label>Product Name</label></br>
        <input type="text" name="product_name" id="product_name" value="{{$products->product_name}}" class="form-control" required></br>
        <label>Price</label></br>
        <input type="number" name="price" id="price" value="{{$products->price}}" class="form-control" required></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop