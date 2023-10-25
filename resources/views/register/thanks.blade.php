@extends('customers.layout')
@section('content')
  
    <div class="card">
        <div class="card-header">Contact Form</div>
        <div class="card-body"> 
           <h2> Thanks You !!!!!!! Register Success !!! </h2>

           <a href="{{ url('/') }}" class="btn btn-success" title="Add New User">
                            <i class="fa fa-plus" aria-hidden="true"></i> Login Here
                        </a>

        </div>
    </div>

@stop