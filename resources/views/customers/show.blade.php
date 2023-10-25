@extends('customers.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Customers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Customer Name : {{ $customers->customer_name }}</h5>
        <p class="card-text">Address : {{ $customers->address }}</p>
        <p class="card-text">Phone : {{ $customers->phone }}</p>
   
  </div>
       
    </hr>
  
  </div>
</div>