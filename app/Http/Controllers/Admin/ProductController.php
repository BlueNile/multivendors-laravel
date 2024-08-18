<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Session;
class ProductController extends Controller
{
    public function products(){
        Session::put("page","products");
        return view("admin.products.products");
    }
    public function create()
    {
        return view('admin.products.addproduct');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->back()->with('success', 'Product added successfully');
    }
}
