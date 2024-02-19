<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oculo;

class ApiController extends Controller
{
    public function index(){

        $products = Oculo::all();

        return response()->json($products);
    }

    public function show($id){
        $product = Oculo::find($id);
        return response()->json($product);
    }
}
