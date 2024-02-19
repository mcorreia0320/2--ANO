@extends('Layouts.layout')


@section('content')
<h1>Loja de Carros - Ver Carros</h1>


<div class="carros">
    @foreach ($carros as $carro)
    
        <div class="carro">
            <a href="/detalhes/{{$carro['id']}}">
                <img src="{{ $carro['img'] }}" width="250px" height="200px">
                    <h2> {{ $carro['nome'] }}</h2>
            </a>
        </div>
    @endforeach
</div>
@endsection