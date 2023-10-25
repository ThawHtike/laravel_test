@extends('customers.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('customers/' .$customers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" required/>
        <label>Customer Name</label></br>
        <input type="text" name="customer_name" id="customer_name" value="{{$customers->customer_name}}" class="form-control" required></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$customers->address}}" class="form-control" required></br>
          <label>Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$customers->phone}}" class="form-control" required></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop