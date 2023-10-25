<?php

namespace App\Http\Controllers;

 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::all();
        return view ('products.index')->with('products', $products);
    }
 
    public function create(): View
    {
        return view('products.create');
    }
 
  
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Product::create($input);
        return redirect('products')->with('flash_message', 'Product Addedd!');
    }
 
    public function show(string $id): View
    {
        $product = Product::find($id);
        return view('products.show')->with('products', $product);
    }
 
    public function edit(string $id): View
    {
        $product = Product::find($id);
        return view('products.edit')->with('products', $product);
    }
 
    public function update(Request $request, string $id): RedirectResponse
    {
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('products')->with('flash_message', 'product Updated!');  
    }
 
    
    public function destroy(string $id): RedirectResponse
    {
        Product::destroy($id);
        return redirect('products')->with('flash_message', 'Product deleted!');
    }

}
