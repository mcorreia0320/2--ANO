@extends('layouts.mobileLayout')

@section('content')
   <div id="menu">
      <h1 class="text-lg font-semibold color-text text-center">Cantina UMA</h1>
      <div class="flex justify-center gap-4 my-3 mb-4 overflow-x-scroll">
         <button class="btn px-4 py-2 card-color rounded-full font-semibold ms-40" onclick="setActive(this)" style="min-width: 6rem;">Seg. 19/12</button>
         <button class="btn px-4 py-2 card-color rounded-full font-semibold active" onclick="setActive(this)" style="min-width: 6rem;">Ter. 20/12</button>
         <button class="btn px-4 py-2 card-color rounded-full font-semibold" onclick="setActive(this)" style="min-width: 6rem;">Quar. 21/12</button>
         <button class="btn px-4 py-2 card-color rounded-full font-semibold" onclick="setActive(this)" style="min-width: 6rem;">Quin. 22/12</button>
         <button class="btn px-4 py-2 card-color rounded-full font-semibold" onclick="setActive(this)" style="min-width: 6rem;">Sex. 23/12</button>
      </div>
      <p class="mb-4 text-lg font-light text-center px-10">Para reservar tem que fazer click na refeição da sua preferência</p>
      <hr class="border-gray-300">
      <div class="flex flex-col gap-4 my-4">
         <h1 class="text-lg font-semibold color-text text-center">Almoço</h1>
         <div class="flex justify-between">
            <a href="#1" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/almoço1.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Burguer</p>
            </a>
            <a href="#2" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/almoço2.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Mixto de Carnes e Ovo</p>
            </a>
            <a href="#3" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card-color rounded-xl p-2 shadow-lg active">
                  <img src="/assets/almoço3.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Pizza</p>
            </a>
            <a href="#4" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/almoço4.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Arroz</p>
            </a>
         </div>
      </div>
      <hr class="border-gray-300">
      <div class="flex flex-col gap-4 my-4">
         <h1 class="text-lg font-semibold color-text text-center">Jantar</h1>
         <div class="flex justify-between">
            <a href="#1" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/jantar1.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Sandwich Misto</p>
            </a>
            <a href="#2" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/jantar2.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Pão</p>
            </a>
            <a href="#3" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/jantar3.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Sandwich com Carne e Molhos</p>
            </a>
            <a href="#4" class="flex flex-col items-center gap-1  w-1/4">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/jantar4.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Salada e Verduras</p>
            </a>
         </div>
      </div>
      <hr class="border-gray-300">
      <div class="flex flex-col gap-4 my-4">
         <h1 class="text-lg font-semibold color-text text-center">Menus</h1>
         <div class="flex justify-between overflow-x-scroll">
            <a href="#1" class="flex flex-col items-center gap-1" style="min-width: 25%;">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/menu1.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Salada com agua</p>
            </a>
            <a href="#2" class="flex flex-col items-center gap-1" style="min-width: 25%;">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/menu2.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Arroz com Frango</p>
            </a>
            <a href="#3" class="flex flex-col items-center gap-1" style="min-width: 25%;">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/menu3.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Carne com salada</p>
            </a>
            <a href="#4" class="flex flex-col items-center gap-1" style="min-width: 25%;">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/menu4.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Tarte de Fresa</p>
            </a>
            <a href="#4" class="flex flex-col items-center gap-1" style="min-width: 25%;">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/menu5.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Bolo de Cereja</p>
            </a>
            <a href="#4" class="flex flex-col items-center gap-1" style="min-width: 25%;">
               <div class="card-color rounded-xl p-2 shadow-lg">
                  <img src="/assets/menu6.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Ovo Frito</p>
            </a>
         </div>
      </div>
      <hr class="border-gray-300">
      <div class="flex flex-col gap-4 my-4">
         <h1 class="text-lg font-semibold color-text">Refeição Selecionada:</h1>
         <div class="flex w-full">
            <div class="ref">
               <a href="#3" class="flex flex-col items-center gap-1  w-24">
                  <div class="card-color rounded-xl p-2 shadow-lg active">
                     <img src="/assets/almoço3.png" alt="" height="50px" width="50px">
                  </div>
                  <p class="text-xs font-semibold color-text text-center">Pizza</p>
               </a>
            </div>
            <div class="desc flex items-center pb-3">
               <p class="text-sm text-justify pe-10">Esta refeição tem de ser levantada entre as 11:00-15:30 horas</p>
            </div>
         </div>
         <a href="/menu/reservaCompleted" class="px-1 py-2 bg-painel rounded-full w-1/2 text-sm text-white font-semibold text-center">Reservar refeições</a>
      </div>
   </div>
   <script>
      function setActive(button) {
            
            var buttons = document.getElementsByClassName('btn');
            for (var i = 0; i < buttons.length; i++) {
                buttons[i].classList.remove('active');
            }


            button.classList.add('active');
        }
   </script>
@endsection