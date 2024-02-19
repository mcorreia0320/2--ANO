@extends('layouts.layout')

@section('content')
    <h1> Loja de Informatica - Criar Produto</h1>
    <p class="message">{{session('message')}}</p>
    <div class="detalhes" style="display: flex; justify-content: center; align-items: center; margin-bottom: 2rem;">
        <form action="/produtos" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="name">Nome do Produto:</label>
            <input type="text" name="name" style="margin-right: 10px;">
            
            <label for="desc">Descrição do Produto:</label>
            <input type="text" name="desc" style="margin-right: 10px;">
            
            <label for="img">Imagem:</label>
            <input type="file" name="img" style="margin-right: 10px;">
            
            <label for="price">Preço:</label>
            <input type="number" name="price" style="margin-right: 10px;">
            <br>
            <input type="submit" value="Criar Produto" style="margin-top: 2rem; padding: 1rem; background-color: #A5292A; color: white; font-weight: bolder; border: none; border-radius: 1rem; cursor: pointer;">
        </form>
    </div>
    <a href="/produtos">Voltar aos Produtos</a>
@endsection