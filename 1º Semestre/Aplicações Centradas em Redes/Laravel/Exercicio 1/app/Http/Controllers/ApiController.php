<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ApiController extends Controller
{
    function index()
    {
        $products = Products::all();
        return response()->json($products);
    }

    function show($id)
    {
        $product = Products::find($id);
        return response()->json($product);
    }
}
