@extends('layouts.layout')

@section('content')
    <h1>  Loja de Informatica - Produtos   </h1>

    @foreach ($produtos as $produto)

        <div class="produto">
            <a href= "/detalhes/{{ $produto['id'] }}" >
                <img src=" {{ $produto['img'] }}" alt="/img/produto">
                <h2> {{ $produto['name'] }}</h2>
            </a>
        </div>
        
    @endforeach
        <br>
    <a href="/produtos/create">Criar Produto</a>
@endsection
