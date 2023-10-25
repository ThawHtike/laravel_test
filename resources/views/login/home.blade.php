@extends('login.layout')
@section('content')
  
    <div class="card">
        <div class="card-header">Login Success</div>
        <div class="card-body"> 
           
   <a href="{{ url('/customers/create') }}" class="btn btn-success btn-sm" title="Add New Customer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Customer
                        </a>

                           <a href="{{ url('/products/create') }}" class="btn btn-success btn-sm" title="Add New Customer">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Product
                        </a>



        </div>
    </div>

@stop