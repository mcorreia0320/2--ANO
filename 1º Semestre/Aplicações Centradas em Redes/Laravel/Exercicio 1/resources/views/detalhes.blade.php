@extends('layouts.layout')

@section('content')
    <h1>  Loja de Informatica - Detalhes   </h1>
        <div class="detalhes">
            @isset($produto)
                <h2> {{ $produto['name'] }}</h2>
                <img src=" {{ $produto['img'] }}" alt="/img/produto">
                <p> {{ $produto['descricao'] }}</p>
                <p> $ {{ $produto['preco'] }} </p>
            @else 
                <h1> O produto nao existe </h1>
            @endisset
            <form action="/produtos/{{$produto['id']}}" method="post" style="margin-bottom: 2rem;">
                @csrf
                @method('delete')
                <input type="submit" value="Eliminar Produto" style="margin-top: 2rem; padding: 1rem; background-color: #A5292A; color: white; font-weight: bolder; border: none; border-radius: 1rem; cursor: pointer;">
            </form>
            <a href="/produtos" > Voltar aos produtos </a>
        </div>
@endsection