<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Customer;
use Illuminate\View\View;

class CustomerController extends Controller
{
    public function index(): View
    {
        $customers = Customer::all();
        return view ('customers.index')->with('customers', $customers);
    }
 
    public function create(): View
    {
        return view('customers.create');
    }
 
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Customer::create($input);
        return redirect('customers')->with('flash_message', 'Customer Addedd!');
    }
 
    public function show(string $id): View
    {
        $customer = Customer::find($id);
        return view('customers.show')->with('customers', $customer);
    }
 
    public function edit(string $id): View
    {
        $customer = Customer::find($id);
        return view('customers.edit')->with('customers', $customer);
    }
 
    public function update(Request $request, string $id): RedirectResponse
    {
        $customer = Customer::find($id);
        $input = $request->all();
        $customer->update($input);
        return redirect('customers')->with('flash_message', 'customer Updated!');  
    }
 
    
    public function destroy(string $id): RedirectResponse
    {
        Customer::destroy($id);
        return redirect('customers')->with('flash_message', 'Customer deleted!');
    }

}
