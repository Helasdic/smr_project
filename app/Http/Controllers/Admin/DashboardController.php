<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Response;

class DashboardController extends Controller
{
    // dashboard admin
    public function index()
    {
        // view product with paginate desc
        $products = Product::orderBy('id', 'desc')->paginate(25);
        return view('admin.dashboard', compact('products'));
    }

    // create view
    public function create()
    {
        return view('admin.create');
    }



    public function download($id)
    {
        $file = Product::find($id);
        $file_path = public_path('uploads/product/' . $file->name);
        return response()->download($file_path);
    }
}