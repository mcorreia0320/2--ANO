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
            <div class="flex flex-col items-center gap-1  w-1/4 cursor-pointer">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/almoço1.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Burguer</p>
            </div>
            <div class="flex flex-col items-center gap-1  w-1/4 cursor-pointer">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/almoço2.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Mixto de Carnes e Ovo</p>
            </div>
            <div class="flex flex-col items-center gap-1  w-1/4 cursor-pointer">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/almoço3.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Pizza</p>
            </div>
            <div class="flex flex-col items-center gap-1  w-1/4 cursor-pointer">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/almoço4.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Arroz</p>
            </div>
         </div>
      </div>
      <hr class="border-gray-300">
      <div class="flex flex-col gap-4 my-4">
         <h1 class="text-lg font-semibold color-text text-center">Jantar</h1>
         <div class="flex justify-between">
            <div class="flex flex-col items-center gap-1  w-1/4 cursor-pointer">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/jantar1.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Sandwich Misto</p>
            </div>
            <div class="flex flex-col items-center gap-1  w-1/4 cursor-pointer">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/jantar2.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Pão</p>
            </div>
            <div class="flex flex-col items-center gap-1  w-1/4 cursor-pointer">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/jantar3.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Sandwich com Carne e Molhos</p>
            </div>
            <div class="flex flex-col items-center gap-1  w-1/4 cursor-pointer">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/jantar4.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Salada e Verduras</p>
            </div>
         </div>
      </div>
      <hr class="border-gray-300">
      <div class="flex flex-col gap-4 my-4 relative">
         <div class="flex gap-2 absolute right-[2%] items-center">
            <p class="font-bold text-black text-xs">Deslizar</p>
            <img src="/assets/back.png" alt="" width="15px" class="rotate-180 filter-arrow">
         </div>
         <h1 class="text-lg font-semibold color-text text-center">Menus</h1>
         <div class="flex justify-between overflow-x-scroll">
            <div class="flex flex-col items-center gap-1 cursor-pointer" style="min-width: 25%;">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/menu1.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Salada com agua</p>
            </div>
            <div class="flex flex-col items-center gap-1 cursor-pointer" style="min-width: 25%;">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/menu2.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Arroz com Frango</p>
            </div>
            <div class="flex flex-col items-center gap-1 cursor-pointer" style="min-width: 25%;">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/menu3.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Carne com salada</p>
            </div>
            <div class="flex flex-col items-center gap-1 cursor-pointer" style="min-width: 25%;">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/menu4.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Tarte de Fresa</p>
            </div>
            <div class="flex flex-col items-center gap-1 cursor-pointer" style="min-width: 25%;">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/menu5.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Bolo de Cereja</p>
            </div>
            <div class="flex flex-col items-center gap-1 cursor-pointer" style="min-width: 25%;">
               <div class="meal card-color rounded-xl p-2 shadow-lg" onclick="selectMeal(this)">
                  <img src="/assets/menu6.png" alt="" height="50px" width="50px">
               </div>
               <p class="text-xs font-semibold color-text text-center">Ovo Frito</p>
            </div>
         </div>
      </div>
      <hr class="border-gray-300">
      <div class="flex flex-col gap-4 my-4 hidden" id="SelectedMenu">
         <h1 class="text-lg font-semibold color-text">Refeição Selecionada:</h1>
         <div class="flex w-full justify-between gap-3">
            <div class="ref" id="selectedMeal">
               <div class="flex flex-col items-center gap-1  w-24">
                  <div class="card-color rounded-xl p-2 shadow-lg active">
                     <img src="/assets/almoço3.png" alt="" height="50px" width="50px">
                  </div>
                  <p class="text-xs font-semibold color-text text-center">Pizza</p>
               </div>
            </div>
            <select name="" id="" class="bg-painel border-0 rounded-full w-2/3 h-12 text-white font-semibold px-4 mt-2">
               <option value="" selected>Selecionar horas</option>
               <option value="">Levantar ás 11:30</option>
               <option value="">Levantar ás 12:00</option>
               <option value="">Levantar ás 12:30</option>
               <option value="">Levantar ás 13:00</option>
               <option value="">Levantar ás 13:30</option>
               <option value="">Levantar ás 14:00</option>
               <option value="">Levantar ás 14:30</option>
               <option value="">Levantar ás 15:00</option>
               <option value="">Levantar ás 15:30</option>
            </select>
         </div>
         <div class="desc flex items-center pb-3">
            <p class="text-sm text-justify">Esta refeição tem de ser levantada entre as 11:00h - 15:30h</p>
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

        function selectMeal(meal){
         var meals = document.querySelectorAll('.meal');
         const selectedMenu = document.getElementById('SelectedMenu');
         const selectedMeal = document.getElementById('selectedMeal');
         var img =  selectedMeal.querySelector('img');
         var p = selectedMeal.querySelector('p');

         if(meal.classList.contains('active')){
            meal.classList.remove('active');
            selectedMenu.classList.toggle('hidden')
         } else {
            for (var i = 0; i < meals.length; i++) {
                meals[i].classList.remove('active');
            }
            meal.classList.add('active');

            if(selectedMenu.classList.contains('hidden')){
               selectedMenu.classList.toggle('hidden')
            }
            img.src = meal.querySelector('img').src;
            p.textContent = meal.parentElement.querySelector('p').textContent;
            selectedMenu.scrollIntoView({ behavior: 'smooth', block: 'start' });
         }

        }
   </script>
@endsection