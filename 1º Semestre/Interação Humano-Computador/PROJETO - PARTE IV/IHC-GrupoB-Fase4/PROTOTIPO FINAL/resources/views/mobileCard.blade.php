   @extends('layouts.mobileLayout')

   @section('content')
      <div id="card">
         <h1 class="text-lg font-semibold color-text text-center">Cartão Universitario</h1>
         <div class="h-60 rounded-3xl mt-2 mb-4 shadow-xl overflow-hidden">
            <img src="/assets/uma-card.jpg" alt="" class="object-cover">
         </div>
         <button type="button" data-modal-target="nfc-modal" data-modal-toggle="nfc-modal" class="bg-painel w-full py-3 px-5 text-center cursor-pointer rounded-full mb-4 border-2 border-white border-opacity-0 focus:border-opacity-100 hover:bg-sky-500">
            <div class="flex gap-5">
               <img src="/assets/nfc.png" alt="" width="25px" height="20px">
               <p class="font-bold text-white">Pagar com Cartão Universitario</p>
            </div>
         </button>
         <div class="cards flex gap-2">
            <div class="saldo card-color w-1/2 h-28 rounded-3xl flex flex-col gap-1 justify-center items-center shadow-xl ">
               <p class="text-center font-semibold text-sm">Saldo Atual</p>
               <h1 id="saldoAtual" class="text-center font-light text-lg">26.53 €</h1>
            </div>
            <button type="button" data-modal-target="default-modal" data-modal-toggle="default-modal" class="carregar bg-painel rounded-3xl flex flex-col gap-2 justify-center h-28 w-1/2 shadow-xl px-3 py-1 border-2 border-white border-opacity-0 focus:border-opacity-100 hover:bg-sky-500">
                  <h1 class="text-white font-semibold text-xl text-center w-full">Carregar Saldo</h1>
            </button>
         </div>
         <ul id="options" class="shadow-2xl w-full mt-5 rounded-2xl overflow-hidden">
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
               <a href="#" class="w-full flex justify-between">
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
      <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden  absolute top-[20%] left-[50%] -translate-x-1/2 w-11/12 z-50 justify-center items-center shadow ">
         <div class="w-full">
            <!-- Modal content -->
            <div class="bg-painel p-3  rounded-3xl shadow-2xl w-ful">
               <h1 class="font-bold text-center my-3 text-xl text-white uppercase">Carregamento do Saldo</h1>
               <hr class="mb-3 border-white">
               <label for="metodo" class="ml-3 pt-3 font-bold text-white">Metodo:</label>
               <ul class="shadow w-full mt-4 rounded-2xl overflow-hidden mb-6">
                  <li class="p-4 bg-white ps-5">
                     <select name="" id="selectMethod" class="card-color border-0 rounded-full input-form text-black font-semibold placeholder:text-opacity-70">
                        <option value="" selected>Escolher metodo...</option>
                        <option value="">MB Way</option>
                        <option value="">Cartão de Credito</option>
                        <option value="">Referencia</option>
                     </select>
                  </li>
               </ul>
               <label for="metodo" class="ml-3 pt-3 font-semibold text-white">Valor ( € ):</label>
               <ul class="shadow w-full mt-4 rounded-2xl overflow-hidden mb-6">
                  <li class="p-4 bg-white ps-5">
                     <input type="text" name="valor" id="saldoInput" onblur="addEuroSymbol()" class="input-form text-black font-semibold placeholder:text-black" placeholder="Introduzir Saldo..." autocomplete="off" required>
                     <hr class="m-0 border-gray-400">
                  </li>
               </ul>
               <div class="w-full flex gap-2">
                  <button type="button" data-modal-hide="default-modal" class="bg-black rounded-full font-semibold text-white p-2 w-full">Cancelar</button>
                  <button type="button" data-modal-hide="default-modal" class="bg-white rounded-full font-semibold text-black p-2 w-full" onclick="adicionarSaldo()">Confirmar</button>
               </div>
            </div>
         </div>
      </div>
      <div id="nfc-modal" tabindex="-1" aria-hidden="true" class="hidden  absolute top-[20%] left-[50%] -translate-x-1/2 w-11/12 z-50 justify-center items-center shadow-2xl">
         <div class="w-full relative">
            <!-- Modal content -->
            <div class="bg-painel p-5 rounded-3xl shadow-2xl w-2/3 absolute left-1/2 -translate-x-1/2">
               <div class="h-52 w-full relative flex justify-center items-center">
                  <img src="/assets/contactless.png" alt="" id="nfc" class="absolute top-1/2 -translate-y-1/2" width="70%" height="70%">
                  <img src="/assets/check.png" alt="" id="check" class="absolute top-1/2 -translate-y-1/2 opacity-0" width="70%" height="70%">
               </div>
            </div>
         </div>
      </div>

   <script>
      document.querySelectorAll('[data-modal-toggle]').forEach((toggle) => {
      toggle.addEventListener('click', function() {
         const target = document.getElementById(this.dataset.modalTarget);
         if (target) {
            target.classList.toggle('hidden');
            target.classList.toggle('flex'); // Cambia 'flex' si estás usando display:flex para mostrar el modal
            document.body.classList.toggle('overflow-hidden'); // Opcional: para evitar el desplazamiento del body detrás del modal
            if (document.getElementById('nfc-modal').classList.contains('flex')) {
               setTimeout(() => {
                  target.classList.add('hidden');
                  target.classList.remove('flex');
                  document.getElementById('nfc').classList.remove('start-animation1');
                  document.getElementById('check').classList.remove('start-animation2');
               }, 3300);
            }
            document.getElementById('nfc').classList.add('start-animation1');
            document.getElementById('check').classList.add('start-animation2');
         }
      });
      });

      document.querySelectorAll('[data-modal-hide]').forEach((hide) => {
      hide.addEventListener('click', function() {
         const target = document.getElementById(this.dataset.modalHide);
         if (target) {
            target.classList.add('hidden');
            target.classList.remove('flex'); // Cambia 'flex' si estás usando display:flex para mostrar el modal
            document.body.classList.remove('overflow-hidden'); // Opcional: para evitar el desplazamiento del body detrás del modal
         }
      });
      });

      function adicionarSaldo(){
         const input = document.getElementById('saldoInput');
         if (input.value !== '') {
            var saldo = document.getElementById('saldoAtual');
            saldo.textContent = parseFloat(input.value) + parseFloat(saldo.textContent) + ' €';
            input.value = '';
            document.getElementById('selectMethod').selectedIndex = 0;
         }
      }

      function addEuroSymbol() {
         const input = document.getElementById('saldoInput');
         if (input.value !== '' && !isNaN(input.value)) {
            if (!input.value.endsWith('€')) {
               input.value += ' €';
            }
         } else {
            input.value = '';
         }
      }
   </script>
   @endsection


