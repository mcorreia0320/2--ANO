<?php

namespace App\Http\Controllers;
use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    function welcome(){
        return view("welcome");
    }

    function carros(){
        $cars = Carro::all();
        return view("carros", ['carros' => $cars]);
    }

    function detalhes($id){
        $carro = Carro::find($id);
        return view("detalhes", ["carro"=> $carro]);
    }
}
