<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MarkSitko\LaravelUnsplash\Facades\Unsplash;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }
}