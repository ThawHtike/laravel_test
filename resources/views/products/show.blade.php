@extends('products.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Products Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Product Name : {{ $products->product_name }}</h5>
        <p class="card-text">Price : {{ $products->price }}</p>
   
  </div>
       
    </hr>
  
  </div>
</div>