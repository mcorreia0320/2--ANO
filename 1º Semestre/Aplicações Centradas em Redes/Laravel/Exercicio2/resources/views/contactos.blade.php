@extends('Layouts.layout')



@section('content')
    <h1>Loja de Carros - Detalhes</h1>

    <div class="carro">
        <img src="{{ $carro['img'] }}" width="30%" height="30%">
        <h2> {{ $carro['nome'] }}</h2>
        <p>{{$carro['descricao']}}</p>
        <a href="/carros"><button class="carro_btn" style="font-weight: bolder; color: white; cursor: pointer;">Voltar aos Carros</button></a>
    </div>
@endsection