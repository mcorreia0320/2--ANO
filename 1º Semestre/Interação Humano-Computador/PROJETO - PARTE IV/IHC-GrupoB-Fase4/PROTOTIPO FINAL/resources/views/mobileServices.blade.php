@extends('layouts.mobileLayout')

@section('content')
  <div id="services">
      <h1 class="text-lg font-semibold color-text text-center">Serviços</h1>
      <div class="flex my-4 justify-center gap-2 w-full">
         <input type="text" class="card-color border-0 rounded-full px-10" placeholder="Sabes o que procuras?">
         <div class="flex items-center justify-center rounded-full card-color h-12 w-14 cursor-pointer">
            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
         </div>
      </div>
      <div class="services flex flex-col gap-5">
         <div class="flex justify-between mt-2">
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/autocarros.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Autocarros</p>
            </a>
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/parking.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Parking</p>
            </a>
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/pautas.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Pautas</p>
            </a>
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/historico.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Histórico</p>
            </a>
         </div>
         <div class="flex justify-between mt-2">
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/info-uma.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Informação da Universidade</p>
            </a>
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/cacifo.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Aluguer de Cacifos</p>
            </a>
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/biblioteca.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Biblioteca</p>
            </a>
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/youprint.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text">You Print</p>
            </a>
         </div>
         <div class="flex justify-between mt-2">
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/privacidade.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Privacidade</p>
            </a>
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/apoio.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Apoio ao Estudante</p>
            </a>
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/bolsas.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Bolsas de Estudo</p>
            </a>
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/requirementos.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Requerimentos</p>
            </a>
         </div>
         <div class="flex justify-center mt-2">
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/ofertas.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Ofertas de Emprego</p>
            </a>
            <a href="#" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card bg-painel rounded-xl p-2 shadow-lg">
                  <img src="/assets/votações.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Votações para o Conselho Geral</p>
            </a>
         </div>
      </div>
  </div>
@endsection