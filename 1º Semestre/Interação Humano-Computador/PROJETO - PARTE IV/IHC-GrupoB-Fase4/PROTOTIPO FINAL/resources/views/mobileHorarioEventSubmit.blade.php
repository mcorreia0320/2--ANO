@extends('layouts.mobileLayout')

@section('content')
    <div class="rounded-full shadow-2xl overflow-hidden absolute top-0 left-5 card-color p-3" style="height: 50px; width: 50px;" >
        <a href="/horario"><img src="/assets/back.png" alt="" class=""></a>
    </div>
    <h1 class="text-lg font-semibold color-text text-center mt-16">Personaliza os teus Eventos</h1>
    <div>
        
        <ul class="shadow-2xl w-full mt-4 rounded-2xl overflow-hidden">
            <li class="p-4 card-color ps-5">
                <input type="text" name="" id="titulo" class="input-form" placeholder="Titulo">
            </li>
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
                <input type="text" name="" id="" class="input-form" placeholder="Nuevo Evento">
            </li>
        </ul>
        <ul class="shadow-2xl w-full mt-4 rounded-2xl overflow-hidden">
            <li class="p-4 card-color ps-5">
                <label for="date"></label>
                <input type="date" name="date" id="date" class="input-form text-gray-500">
            </li>
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200 flex gap-3 items-center">
                <label for="timeInit" class="font-semibold w-[20%]">Inicio:</label>
                <input type="time" name="timeInit" id="timeInit" class="input-form text-gray-500  w-[80%]">
            </li>
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200 flex gap-3 items-center">
                <label for="timeInit" class="font-semibold w-[20%]">Fim:</label>
                <input type="time" name="timeEnd" id="timeEnd" class="input-form text-gray-500 w-[80%]">
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
                        <option value="">Não notificar</option>
                    </select>
                </div>
            </li>
        </ul>
        
        <button type="submit" class="px-3 py-2 bg-painel mt-4 rounded-full text-white font-semibold">Adicionar Evento</button>
        
    </div>

    <script>
        var date = document.getElementById('date');
        date.addEventListener('change', function(){
            if(date.value == ""){
                date.classList.add('text-gray-500');
            }else{
                date.classList.remove('text-gray-500');
            }
        })
        var timeInit = document.getElementById('timeInit');
        timeInit.addEventListener('change', function(){
            if(timeInit.value == ""){
                timeInit.classList.add('text-gray-500');
            }else{
                timeInit.classList.remove('text-gray-500');
            }
        })
        var timeEnd = document.getElementById('timeEnd');
        timeEnd.addEventListener('change', function(){
            if(timeEnd.value == ""){
                timeEnd.classList.add('text-gray-500');
            }else{
                timeEnd.classList.remove('text-gray-500');
            }
        })
    </script>
@endsection