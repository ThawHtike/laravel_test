@extends('customers.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Customers Page</div>
  <div class="card-body">
      
      <form action="{{ url('customers') }}" method="post">
        {!! csrf_field() !!}
        <label>Customer Name</label></br>
        <input type="text" name="customer_name" id="customer_name" class="form-control" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control" required></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control" required></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop