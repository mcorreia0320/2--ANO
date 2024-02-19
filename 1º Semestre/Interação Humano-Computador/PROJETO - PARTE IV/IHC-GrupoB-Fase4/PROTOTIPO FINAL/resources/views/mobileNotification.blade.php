@extends('layouts.mobileLayout')

@section('content')
   <div id="notification">
      <h1 class="text-lg font-semibold color-text text-center">Centro de Notificações</h1>
      <div class="h-20 flex justify-between px-2 my-3 gap-5">
         <div class="card-color w-1/2 rounded-3xl flex gap-2 p-2 py-3 items-center cursor-pointer">
            <img src="/assets/notifi1.png" alt="" width="35%">
            <p class="font-semibold text-white">Notificações Académicas</p>
         </div>
         <div class="card-color w-1/2 rounded-3xl flex gap-2 p-2 py-3 items-center cursor-pointer">
            <img src="/assets/notifi2.png" alt="" width="35%">
            <p class="font-semibold text-white">Notificações do Grupo</p>
         </div>
      </div>
      <div class="flex justify-center gap-4 mt-5">
         <button class="btn px-4 py-2 card-color rounded-full font-semibold" onclick="setActive(this)">Todas</button>
         <button class="btn px-4 py-2 card-color rounded-full font-semibold active" onclick="setActive(this)">Novas (4)</button>
         <button class="btn px-4 py-2 card-color rounded-full font-semibold" onclick="setActive(this)">Leidas</button>
      </div>
      <div class="flex my-4 justify-center gap-2 w-full">
         <input type="text" class="card-color border-0 rounded-full px-10" placeholder="Procurar notificação...">
         <div class="flex items-center justify-center rounded-full card-color h-12 w-14 cursor-pointer">
            <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
         </div>
      </div>
      <div class="notifications flex flex-col gap-4">
         <div class="notifi card-color rounded-3xl py-5 flex-col">
            <div class="flex justify-between items-center px-8">
               <div class="flex items-center w-1/12">
                  <img src="/assets/danger.png" alt="" height="30px" width="30px">
               </div>
               <div class="flex flex-col gap-1 w-8/12">
                  <h1 class="text-sm font-bold">Recordatorio - Frequencia</h1>
                  <p class="text-xs">Frequencia de SBGD II</p>
               </div>
               <div class="w-1/12">
                  <button class="arrow-button flex justify-center items-center rounded-full h-8 w-8 border-2 border-blue-300 mt-3" onclick="toggleInfoNotif(this)">
                     <img src="/assets/arrow-down.png" alt="" class="object-contain h-3 w-3">
                  </button>
               </div>
            </div>
            <div class="h-full infoNotif hidden">
               <hr class="my-4 border-gray-200 border-[1.5px]">
               <p class="px-8">Lembra-te de que na terça-feira, dia 20, tens uma frequencia de SBGD II que começa as 15:00 até 17:00 na sala 23 </p>
            </div>
         </div>
         <div class="notifi card-color rounded-3xl py-5 flex-col">
            <div class="flex justify-between items-center px-8">
               <div class="flex items-center w-1/12">
                  <img src="/assets/info-uma.png" alt="" height="30px" width="30px">
               </div>
               <div class="flex flex-col gap-1 w-8/12">
                  <h1 class="text-sm font-bold">Mudança no horario</h1>
                  <p class="text-xs">O horario do dia 17/12 foi alterado !!</p>
               </div>
               <div class="w-1/12">
                  <button class="arrow-button flex justify-center items-center rounded-full h-8 w-8 border-2 border-blue-300 mt-3" onclick="toggleInfoNotif(this)">
                     <img src="/assets/arrow-down.png" alt="" class="object-contain h-3 w-3">
                  </button>
               </div>
            </div>
            <div class="h-full infoNotif hidden">
               <hr class="my-4 border-gray-200 border-[1.5px]">
               <p class="px-8">A aula de Interação Humano-Computador será desde as 18:00 até 21:00</p>
            </div>
         </div>
         <div class="notifi card-color rounded-3xl py-5 flex-col">
            <div class="flex justify-between items-center px-8">
               <div class="flex items-center w-1/12">
                  <img src="/assets/pautas.png" alt="" height="30px" width="30px">
               </div>
               <div class="flex flex-col gap-1 w-8/12">
                  <h1 class="text-sm font-bold">Atualização - Pautas</h1>
                  <p class="text-xs">Já estão publicadas as pautas da fase II do projeto de IHC</p>
               </div>
               <div class="w-1/12">
                  <button class="arrow-button flex justify-center items-center rounded-full h-8 w-8 border-2 border-blue-300 mt-3" onclick="toggleInfoNotif(this)">
                     <img src="/assets/arrow-down.png" alt="" class="object-contain h-3 w-3">
                  </button>
               </div>
            </div>
            <div class="h-full infoNotif hidden">
               <hr class="my-4 border-gray-200 border-[1.5px]">
               <p class="px-8">As pautas encontram-se num ficheiro pdf no moddle</p>
            </div>
         </div>
         <div class="notifi card-color rounded-3xl py-5 flex-col">
            <div class="flex justify-between items-center px-8">
               <div class="flex items-center w-1/12">
                  <img src="/assets/atividades.png" alt="" height="30px" width="30px">
               </div>
               <div class="flex flex-col gap-1 w-8/12">
                  <h1 class="text-sm font-bold">Recordatorio - Evento</h1>
                  <p class="text-xs">Estudar com o Andres para a frequencia de matemáticas</p>
               </div>
               <div class="w-1/12">
                  <button class="arrow-button flex justify-center items-center rounded-full h-8 w-8 border-2 border-blue-300 mt-3" onclick="toggleInfoNotif(this)">
                     <img src="/assets/arrow-down.png" alt="" class="object-contain h-3 w-3">
                  </button>
               </div>
            </div>
            <div class="h-full infoNotif hidden">
               <hr class="my-4 border-gray-200 border-[1.5px]">
               <p class="px-8">Lembrate do evento "Estudar com Andres", marcado para dia 12/01/2024 ás 18:00</p>
            </div>
         </div>
         <div class="notifi card-color rounded-3xl py-5 flex-col">
            <div class="flex justify-between items-center px-8">
               <div class="flex items-center w-1/12">
                  <img src="/assets/payment.png" alt="" height="30px" width="30px">
               </div>
               <div class="flex flex-col gap-1 w-8/12">
                  <h1 class="text-sm font-bold">Alerta - Pagamentos</h1>
                  <p class="text-xs">Pagamento da 4ª prestação atrasada!!</p>
               </div>
               <div class="w-1/12">
                  <button class="arrow-button flex justify-center items-center rounded-full h-8 w-8 border-2 border-blue-300 mt-3" onclick="toggleInfoNotif(this)">
                     <img src="/assets/arrow-down.png" alt="" class="object-contain h-3 w-3">
                  </button>
               </div>
            </div>
            <div class="h-full infoNotif hidden">
               <hr class="my-4 border-gray-200 border-[1.5px]">
               <p class="px-8">Tem limite até o dia 31/01 para efetuar o pagamento da 4ª prestação !! </p>
            </div>
         </div>
      </div>
      <div class="flex justify-end mt-3 pe-2">
         <button class="px-3 py-1 bg-painel text-white font-semibold rounded-full">Apagar tudo</button>
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

        function toggleInfoNotif(button) {
            const padre = button.closest('.notifi');
            const info = padre.querySelector('.infoNotif');
            const img = button.querySelector('img');
            info.classList.toggle('hidden');
            button.classList.toggle('rotate-180');
            button.classList.toggle('bg-[#64b7f8]');
            img.classList.toggle('filterImg');
        }
   </script>
@endsection