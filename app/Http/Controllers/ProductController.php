<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // store
    public function store(Request $request)
    {
        // validate form
        $this->validate($request, [
            // validate only pdf 
            'name' => 'required|mimes:pdf|max:2048',
            'description' => 'required',
        ]);
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->user_id = auth()->user()->id;

        // handle pdf
        if ($request->hasFile('name')) {
            $file = $request->file('name');
            $extension = $file->getClientOriginalExtension();
            $filename = Carbon::now()->toDateString() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $product->name = $filename;
        } else {
            return $request;
            $product->name = '';
        }

        $product->save();

        return redirect()->route('dashboard')->with('success', 'Product created successfully.');
    }


    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.edit', compact('product'));
    }

    // update product
    public function update(Request $request, $id)
    {

        // validate form
        $this->validate($request, [
            // validate only pdf 
            'name' => 'required|mimes:pdf|max:2048',
            'description' => 'required',
        ]);
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->user_id = auth()->user()->id;

        // jika ada file yang di upload maka gunakan file yang lama
        if ($request->hasFile('name')) {
            $file = $request->file('name');
            $extension = $file->getClientOriginalExtension();
            $filename = Carbon::now()->toDateString() . '.' . $extension;
            $file->move('uploads/product/', $filename);
            $product->name = $filename;
        } else {
            return $request;
            $product->name = '';
        }
        $product->save();

        return redirect()->route('dashboard')->with('success', 'Product updated successfully.');
    }
}