@extends('layouts.mobileLayout')

@section('content')
   <div id="home">
      <a href="/chat" class="my-2 rounded-2xl w-full flex p-4 justify-between card-color items-center">
            <img src="/assets/notifi2.png" alt="" height="60px" width="60px">
            <p class="pe-16 font-semibold text-white text-2xl">Grupo da Turma</p>
            <p class="font-semibold text-white text-2xl">></p>
      </a>
      <div id="process" class="ps-2 pt-5 flex flex-col gap-4">
         <h1 class="text-lg font-semibold color-text">Estado dos Processos</h1>
         <div class="card-color h-12 rounded-full flex justify-between items-center">
            <h1 class="text-xs pe-3 p-3 border-e-2 border-blue-400 w-3/4">Emissão do cartão UMA</h1>
            <p class="text-xs flex items-center h-full p-3 text-center">Confirmado</p>
         </div>
         <div class="card-color h-12 rounded-full flex justify-between items-center">
            <h1 class="text-xs pe-3 p-3 border-e-2 border-blue-400 w-3/4">Solicitude de reunião com o Professor</h1>
            <p class="text-xs flex items-center h-full p-3 text-center">Em Revisão...</p>
         </div>
      </div>
      <div class="titles flex justify-between pt-3 px-6">
         <h1 class="text-lg font-semibold color-text ps-4">Aulas</h1>
         <h1 class="text-lg font-semibold color-text">Pagamentos por Liquidar</h1>
      </div>
      <div id="container-cards" class="flex justify-between pt-5 gap-6">
         <div id="aulas" class="w-2/6 flex flex-col gap-4">
            <div class="card-color h-28 rounded-2xl p-1 shadow-xl pt-3" style="width: 100%;">
               <h1 class="text-xs text-center">Arquitectura de Dispositivos</h1>
               <p class="text-xxs text-center mt-1">Prof. David Jardim</p>
               <p class="text-xs text-center mt-1 color-text font-bold">9:00-12:30</p>
               <p class="text-xs text-center mt-2 font-bold">AULA 31</p>
            </div>
            <div class="card-color h-28 rounded-2xl p-1 shadow-xl pt-3" style="width: 100%;">
               <h1 class="text-xs text-center">Aplicações Centradas em Redes</h1>
               <p class="text-xxs text-center mt-1">Prof. Hugo Perdigão</p>
               <p class="text-xs text-center mt-1 color-text font-bold">15:00-17:00</p>
               <p class="text-xs text-center mt-2 font-bold">AULA 26</p>
            </div>
            <div class="card-color h-28 rounded-2xl p-1 shadow-xl pt-3" style="width: 100%;">
               <h1 class="text-xs text-center">Interação Humano-Computador</h1>
               <p class="text-xxs text-center mt-1">Prof. Eduardo Teles</p>
               <p class="text-xs text-center mt-1 color-text font-bold">19:00-21:00</p>
               <p class="text-xs text-center mt-2 font-bold">AULA 30</p>
            </div>
         </div>
         <div id="pagamentos" class="w-2/3 flex flex-col gap-3">
            <div class="card-color h-16 rounded-full flex justify-between items-center">
               <h1 class="text-xs text-center pe-3 p-3 border-e-2 border-blue-400">3ª prestação de propina de CET's</h1>
               <p class="text-xs flex items-center h-full p-3">69,79€</p>
            </div>
            <div class="card-color h-16 rounded-full flex justify-between items-center">
               <h1 class="text-xs text-center pe-3 p-3 border-e-2 border-blue-400">4ª prestação de propina de CET's</h1>
               <p class="text-xs flex items-center  h-full p-3">69,79€</p>
            </div>
            <div class="card-color h-16 rounded-full flex justify-between items-center">
               <h1 class="text-xs text-center pe-3 p-3 border-e-2 border-blue-400">5ª prestação de propina de CET's</h1>
               <p class="text-xs flex items-center h-full p-3">69,79€</p>
            </div>
            <div class="card-color h-16 rounded-full flex justify-between items-center">
               <h1 class="text-xs text-center pe-3 p-3 border-e-2 border-blue-400">6ª prestação de propina de CET's</h1>
               <p class="text-xs flex items-center  p-3">69,79€</p>
            </div>
            <div class="card-color h-16 rounded-full flex justify-between items-center">
               <h1 class="text-xs text-center pe-3 p-3 border-e-2 border-blue-400">7ª prestação de propina de CET's</h1>
               <p class="text-xs flex items-center h-full p-3">69,79€</p>
            </div>
         </div>
      </div>
   </div>
@endsection