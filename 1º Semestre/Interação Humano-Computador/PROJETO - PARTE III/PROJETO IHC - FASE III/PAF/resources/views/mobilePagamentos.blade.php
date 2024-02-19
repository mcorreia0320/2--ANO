@extends('layouts.mobileLayout')

@section('content')
   <div id="pagamentos">
      <h1 class="text-lg font-semibold color-text text-center">Centro de Pagamentos</h1>
      <div id="infoPayment" class="flex justify-between items-center pt-3">
         <select name="" id="" class="card-color border-0 rounded-full w-1/2 h-12">
            <option value="" selected>Filtrar Pagamentos...</option>
            <option value="">Cancelados</option>
            <option value="">Pagados</option>
            <option value="">Por Pagar</option>
            <option value="">Reembolsos</option>
            <option value="">Substituido por Prestações</option>
         </select>
         <div class="card-color w-5/12 h-20 rounded-full flex flex-col items-center gap-2 p-3">
               <h1 class="text-center font-semibold">Total</h1>
               <p class="color-text font-semibold">469,76€</p>
         </div>
      </div>
      <div id="selectPayment" class="pt-5 flex flex-col gap-4">
         <div class="service flex items-center justify-between">
            <div class="card-color w-9/12 h-14 rounded-full flex">
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Data Limite</h1>
                  <p class="text-xs pt-1">2023-12-31</p>
               </div>
               <div class="ps-2 pt-1 pb-1 overflow-scroll  w-4/12">
                  <h1 class="text-xs font-semibold">Serviço</h1>
                  <p class="text-xxs">4ª Prestação de Propinas de CET's</p>
               </div>
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Valor</h1>
                  <p class="text-xs pt-1">69,70€</p>
               </div>
            </div>
            <div class="h-14 card-color w-14 rounded-2xl flex items-center justify-center me-4">
               <input type="checkbox" name="" id="" class="big-checkbox rounded-sm">
            </div>
         </div>
         <div class="service flex items-center justify-between">
            <div class="card-color w-9/12 h-14 rounded-full flex">
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Data Limite</h1>
                  <p class="text-xs pt-1">2024-01-31</p>
               </div>
               <div class="ps-2 pt-1 pb-1 overflow-scroll  w-4/12">
                  <h1 class="text-xs font-semibold">Serviço</h1>
                  <p class="text-xxs">5ª Prestação de Propinas de CET's</p>
               </div>
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Valor</h1>
                  <p class="text-xs pt-1">69,70€</p>
               </div>
            </div>
            <div class="h-14 card-color w-14 rounded-2xl flex items-center justify-center me-4">
               <input type="checkbox" name="" id="" class="big-checkbox rounded-sm">
            </div>
         </div>
         <div class="service flex items-center justify-between">
            <div class="card-color w-9/12 h-14 rounded-full flex">
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Data Limite</h1>
                  <p class="text-xs pt-1">2024-02-29</p>
               </div>
               <div class="ps-2 pt-1 pb-1 overflow-scroll  w-4/12">
                  <h1 class="text-xs font-semibold">Serviço</h1>
                  <p class="text-xxs">6ª Prestação de Propinas de CET's</p>
               </div>
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Valor</h1>
                  <p class="text-xs pt-1">69,70€</p>
               </div>
            </div>
            <div class="h-14 card-color w-14 rounded-2xl flex items-center justify-center me-4">
               <input type="checkbox" name="" id="" class="big-checkbox rounded-sm">
            </div>
         </div>
         <div class="service flex items-center justify-between">
            <div class="card-color w-9/12 h-14 rounded-full flex">
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Data Limite</h1>
                  <p class="text-xs pt-1">2024-03-31	</p>
               </div>
               <div class="ps-2 pt-1 pb-1 overflow-scroll  w-4/12">
                  <h1 class="text-xs font-semibold">Serviço</h1>
                  <p class="text-xxs">7ª Prestação de Propinas de CET's</p>
               </div>
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Valor</h1>
                  <p class="text-xs pt-1">69,70€</p>
               </div>
            </div>
            <div class="h-14 card-color w-14 rounded-2xl flex items-center justify-center me-4">
               <input type="checkbox" name="" id="" class="big-checkbox rounded-sm">
            </div>
         </div>
         <div class="service flex items-center justify-between">
            <div class="card-color w-9/12 h-14 rounded-full flex">
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Data Limite</h1>
                  <p class="text-xs pt-1">2024-04-30</p>
               </div>
               <div class="ps-2 pt-1 pb-1 overflow-scroll  w-4/12">
                  <h1 class="text-xs font-semibold">Serviço</h1>
                  <p class="text-xxs">8ª Prestação de Propinas de CET's</p>
               </div>
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Valor</h1>
                  <p class="text-xs pt-1">69,70€</p>
               </div>
            </div>
            <div class="h-14 card-color w-14 rounded-2xl flex items-center justify-center me-4">
               <input type="checkbox" name="" id="" class="big-checkbox rounded-sm">
            </div>
         </div>
         <div class="my-3">
            <p class="color-text font-bold text-justify text-sm">Advertencia: <span class="font-normal">Se não pagar os serviços antes da data limite será aplicada uma penalização de 10 € por cada pagamento atrasado.</span></p>
         </div>
         <div id="finishPayment" class="card-color h-28 rounded-3xl py-2 px-4">
            <div class="totalPrice flex justify-between px-10">
               <h1 class="text-md font-semibold">Total Selecionado:</h1>
               <p class="text-md color-text">69,70€</p>
            </div>
            <div class="flex justify-between gap-3 mt-4">
               <button class="bg-painel rounded-full  font-semibold text-white p-3">Pagar com multibanco</button>
               <button class="bg-painel rounded-full font-semibold  text-white p-3">Pagar com cartão</button>
            </div>
         </div>
      </div>
   </div>
@endsection