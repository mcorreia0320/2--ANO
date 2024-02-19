@extends('layouts.mobileLayout')

@section('content')
   <div id="card">
      <h1 class="text-lg font-semibold color-text text-center">Cartão Universitario</h1>
      <div class="h-60 rounded-3xl mt-2 mb-4 shadow-xl overflow-hidden">
         <img src="/assets/uma-card.jpg" alt="" class="object-cover">
      </div>
      <div class="cards flex gap-2">
         <div class="saldo card-color w-1/3 h-28 rounded-3xl flex flex-col gap-1 justify-center items-center shadow-xl ">
            <p class="text-center font-semibold text-sm">Saldo Atual</p>
            <h1 class="text-center font-light text-lg">26.53€</h1>
         </div>
         <div class="carregar card-color rounded-3xl flex flex-col gap-2 justify-center h-28 w-4/6 shadow-xl px-3 py-1">
            <h1 class="text-center font-semibold text-xs">Carregar Saldo</h1>
            <p class="text-xxs flex gap-2">Metodo: 
               <select name="" id="" class="card-color border-2 border-color rounded-full h-1 w-full text-xs">
                  <option value="" selected>Escolher metodo...</option>
                  <option value="">MB Way</option>
                  <option value="">Credit Card</option>
                  <option value="">Ref. MB</option>
               </select>
            </p>
            <p class="text-xxs flex gap-2">Quantidade: 
               <select name="" id="" class="card-color border-2 border-color rounded-full h-1 w-1/3 text-xs">
                  <option value="" selected>Escolher quantidade...</option>
                  <option value="">5</option>
                  <option value="">10</option>
                  <option value="">15</option>
                  <option value="">20</option>
                  <option value="">25</option>
                  <option value="">50</option>
               </select>
            </p>
            <div class="flex justify-end w-full">
               <button class="px-2 py-1 text-xs bg-painel text-white font-semibold rounded-full">Carregar</button>
            </div>
         </div>
      </div>
      <ul id="options" class="shadow-2xl w-full mt-5 rounded-2xl overflow-hidden">
         <li class="p-4 card-color ps-5">
             <a href="/profile/configuracoes" class="w-full flex justify-between">
                 <div class="flex  gap-5">
                     <img src="/assets/uma-card.png" alt="" width="25px" height="20px">
                     <p class="font-medium ">Solicitar emissão do cartão fisico</p>
                 </div>
                 <div>
                     &gt;
                 </div>
             </a>
         </li>
         <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
             <a href="#" class="w-full flex justify-between">
                 <div class="flex  gap-5">
                     <img src="/assets/historico.png" alt="" width="25px" height="20px">
                     <p class="font-medium ">Historico de carregamentos</p>
                 </div>
                 <div>
                     &gt;
                 </div>
             </a>
         </li>
     </ul>
   </div>
@endsection