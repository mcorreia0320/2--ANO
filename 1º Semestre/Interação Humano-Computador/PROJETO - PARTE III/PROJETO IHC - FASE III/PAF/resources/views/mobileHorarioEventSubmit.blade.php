@extends('layouts.mobileProfileLayout')

@section('content')
    <div class="rounded-full shadow-2xl overflow-hidden absolute top-0 left-5 card-color p-3" style="height: 50px; width: 50px;" >
        <a href="/horario"><img src="/assets/back.png" alt="" class=""></a>
    </div>
    <h1 class="text-lg font-semibold color-text text-center mt-16">Personaliza os teus Eventos</h1>
    <form action="/horario" method="POST">
        @csrf
        <ul class="shadow-2xl w-full mt-4 rounded-2xl overflow-hidden">
            <li class="p-4 card-color ps-5">
                <input type="text" name="" id="" class="input-form" placeholder="Titulo">
            </li>
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
                <input type="text" name="" id="" class="input-form" placeholder="Nuevo Evento">
            </li>
        </ul>
        <ul class="shadow-2xl w-full mt-4 rounded-2xl overflow-hidden">
            <li class="p-4 card-color ps-5">
                <input type="number" name="" id="" class="input-form" min="1" max="31" placeholder="Dia">
            </li>
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
                <input type="text" name="" id="" class="input-form" placeholder="Empieza">
            </li>
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
                <input type="text" name="" id="" class="input-form" placeholder="Termina">
            </li>
        </ul>
        <ul class="shadow-2xl w-full mt-4 rounded-2xl overflow-hidden">
            <li class="p-4 card-color ps-5">
                <div class="flex gap-3 items-center ">
                    <p>Enviar Notificação</p>
                    <select name="" id="" class="select-form rounded-full">
                        <option value="" selected>Escolha uma opção</option>
                        <option value="">5 minutos antes</option>
                        <option value="">10 minutos antes</option>
                        <option value="">15 minutos antes</option>
                        <option value="">30 minutos antes</option>
                        <option value="">1 hora antes</option>
                    </select>
                </div>
            </li>
        </ul>
        
        <button type="submit" class="px-3 py-2 bg-painel mt-4 rounded-full text-white font-semibold">Adicionar Evento</button>
        
    </form>
@endsection