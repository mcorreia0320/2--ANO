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
               <p id="totalDebt" class="color-text font-semibold">469.76€</p>
         </div>
      </div>
      <div id="selectPayment" class="pt-5 flex flex-col gap-4 min-h-[600px] justify-between">
         <div id="noItems" class="w-full"></div>
         @forelse ($toPay as $item)
         <div class="service flex items-center justify-between">
            <div class="card-color w-9/12 h-14 rounded-full flex">
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Data Limite</h1>
                  <p class="text-xs pt-1">{{$item["date"]}}</p>
               </div>
               <div class="ps-2 pt-1 pb-1 overflow-scroll  w-4/12">
                  <h1 class="text-xs font-semibold">Serviço</h1>
                  <p class="text-xxs">{{$item["service"]}}</p>
               </div>
               <div class="ps-5 pt-1 pb-1 w-4/12">
                  <h1 class="text-xs font-semibold">Valor</h1>
                  <p class="preco text-xs pt-1">{{$item["price"]}} €</p>
               </div>
            </div>
            <div class="h-14 card-color w-14 rounded-2xl flex items-center justify-center me-4">
               <input type="checkbox" name="" id="" class="big-checkbox rounded-sm" onclick="checkboxSelection(this)">
            </div>
         </div>
         @empty
             <p class="text-center w-full my-10 font-semibold">Não existem serviços ou propinas a pagar! </p>
         @endforelse
         <div class="my-3">
            <p class="color-text font-bold text-justify text-sm">Advertencia: <span class="font-normal">Se não pagar os serviços antes da data limite será aplicada uma penalização de 10 € por cada pagamento atrasado.</span></p>
         </div>
         <div id="finishPayment" class="card-color rounded-3xl py-3 px-4">
            <div class="totalPrice flex justify-between px-10">
               <h1 class="text-md font-semibold">Total Selecionado:</h1>
               <p class="text-md color-text">0.00 €</p>
            </div>
            <div class="flex justify-between gap-3 mt-4">
               <button data-modal-target="referencia-modal" data-modal-toggle="referencia-modal" class="bg-painel rounded-full  font-semibold text-white p-2"">Pagar com multibanco</button>
               <button data-modal-target="credit-modal" data-modal-toggle="credit-modal" class="bg-painel rounded-full font-semibold  text-white p-2">Pagar com saldo</button>
            </div>
         </div>
      </div>
   </div>
   <div id="referencia-modal" tabindex="-1" aria-hidden="true" class="hidden  absolute top-[20%] left-[50%] -translate-x-1/2 w-11/12 z-50 justify-center items-center shadow ">
      <div class="w-full">
         <!-- Modal content -->
         <div class="bg-painel p-3  rounded-3xl shadow-2xl w-ful">
            <h1 class="font-bold text-center my-3 text-xl text-white uppercase">Pagamento com Referencia</h1>
            <hr class="mb-3 border-white">
            <div class="my-3">
               <label for="ref" class="ml-3 pt-3 font-bold text-white">Refª MB: <span class="font-normal">201912204</span></label>
            </div>
            <div class="my-3">
               <label for="entidade" class="ml-3 pt-3 font-bold text-white">Entidade: <span class="font-normal">20697</span></label>
            </div>
            <div class="my-3" id="precioRef">
               <label for="ref" class="ml-3 pt-3 font-bold text-white">Valor: <span class="font-normal"></span></label>
            </div>
            <div class="w-full flex gap-2">
               <button type="button" data-modal-hide="referencia-modal" class="bg-black rounded-full font-semibold text-white p-2 w-full">Cancelar</button>
               <button type="button" data-modal-hide="referencia-modal" class="bg-white rounded-full font-semibold text-black p-2 w-full" onclick="finishPayment()">Confirmar</button>
            </div>
         </div>
      </div>
   </div>
   <div id="credit-modal" tabindex="-1" aria-hidden="true" class="hidden  absolute top-[20%] left-[50%] -translate-x-1/2 w-11/12 z-50 justify-center items-center shadow ">
      <div class="w-full">
         <!-- Modal content -->
         <div class="bg-painel p-3  rounded-3xl shadow-2xl w-ful">
            <h1 class="font-bold text-center my-3 text-xl text-white uppercase">Pagamento com Saldo</h1>
            <hr class="mb-3 border-white">
            <div class="my-3" id="precioSaldo">
               <label for="ref" class="ml-3 pt-3 font-bold text-white">Valor: <span class="font-normal"></span></label>
            </div>
            <div class="my-3" id="precioSaldo">
               <label for="ref" class="ml-3 pt-3 font-bold text-white">Tem certeza de quere efetuar o seguinte &nbsp;&nbsp;&nbsp;pagamento?</label>
            </div>
            <div class="w-full flex gap-2">
               <button type="button" data-modal-hide="credit-modal" class="bg-black rounded-full font-semibold text-white p-2 w-full">Cancelar</button>
               <button type="button" data-modal-hide="credit-modal" class="bg-white rounded-full font-semibold text-black p-2 w-full" onclick="finishPayment()">Confirmar</button>
            </div>
         </div>
      </div>
   </div>

   <script>

      updateTotalPriceDebt();

      function updateTotalPriceDebt(){
         const precos = document.querySelectorAll(".preco");
         const totalDebt = document.getElementById("totalDebt");
         var totalDebtValue = 0;
         
         precos.forEach(element => {
            let value = parseFloat(element.textContent);
            value *= 100;
            totalDebtValue += value;
         });

         totalDebtValue /= 100;
         totalDebt.textContent = totalDebtValue.toFixed(2) + " €";
      }
     
      function checkboxSelection(input){
         const padre = input.closest(".service");
         var preco = parseFloat(padre.querySelector(".preco").textContent);
         const totalPaymentElement = document.getElementById("finishPayment").querySelector("p");
         var totalPaymentValue = parseFloat(totalPaymentElement.textContent);
         
         preco *= 100;
         totalPaymentValue *= 100;

         if (input.checked){
            totalPaymentValue += preco;
         } else {
            totalPaymentValue -= preco;
         }

         totalPaymentValue /= 100;
         totalPaymentElement.textContent = totalPaymentValue.toFixed(2) + " €";
      }

      function finishPayment(){
         const checkBoxes = document.querySelectorAll("input");
         var selectedBoxes = [];

         //Salva os elementos selecionados num novo array
         checkBoxes.forEach(element =>{
            if (element.checked) {
               selectedBoxes.push(element)
            }
         })
         
         // Caso não exista nenhuma checkbox selecionada
         if (selectedBoxes.length != 0){
            // Simula a finalização do pagamento
            selectedBoxes.forEach(service =>{
               const checkbox = service.closest(".service");
               checkbox.remove();
            })

            // Reset do valor a pagar
            const totalPaymentElement = document.getElementById("finishPayment").querySelector("p");
               totalPaymentElement.textContent = "0.00 €";
               const precioRef = document.getElementById("precioRef");
                  precioRef.querySelector("span").textContent = 0;
               const precioSaldo = document.getElementById("precioSaldo");
               precioSaldo.querySelector("span").textContent = 0;
               
               //atulizada o total em divida
               updateTotalPriceDebt();

               const divPadre = totalPaymentElement.parentNode.parentNode
               const p = document.createElement('p');
               p.textContent = "Pagamento concluido com successo!"
               p.classList.add("text-center", "w-full", "font-bold", "my-2", "text-sky-400")
               divPadre.appendChild(p);
               setTimeout(() => {
                  divPadre.removeChild(p);
               }, 3000);

               selectedBoxes = [];
               if (document.querySelectorAll(".service").length == 0 ) {
               const listServices = document.getElementById("noItems");
               const p = document.createElement('p');
                  p.textContent = "Não existem serviços ou propinas a pagar! "
                  p.classList.add("text-center", "w-full", "font-semibold", "my-2", "card-color", "rounded-3xl", "px-2", "py-20", "text-2xl", "uppercase")
                  listServices.appendChild(p);
            }
         }
      }

      document.querySelectorAll('[data-modal-toggle]').forEach((toggle) => {
         toggle.addEventListener('click', function() {
            const target = document.getElementById(this.dataset.modalTarget);
            if (target) {
               const checkBoxes = document.querySelectorAll("input");
               var selectedBoxes = [];

               //Salva os elementos selecionados num novo array
               checkBoxes.forEach(element =>{
                  if (element.checked) {
                     selectedBoxes.push(element)
                  }
               })
               if (selectedBoxes.length != 0) {
                  target.classList.toggle('hidden');
                  target.classList.toggle('flex'); // Cambia 'flex' si estás usando display:flex para mostrar el modal
                  document.body.classList.toggle('overflow-hidden'); // Opcional: para evitar el desplazamiento del body detrás del modal
                  const totalPaymentElement = document.getElementById("finishPayment").querySelector("p");
                  const precioRef = document.getElementById("precioRef");
                  precioRef.querySelector("span").textContent = totalPaymentElement.textContent;
                  const precioSaldo = document.getElementById("precioSaldo");
                  precioSaldo.querySelector("span").textContent = totalPaymentElement.textContent;
               } else{
                  const box = document.getElementById("finishPayment");
                  const p = document.createElement('p');
                  p.textContent = "Selecione os serviços a pagar!"
                  p.classList.add("text-center", "w-full", "font-bold", "my-2", "text-red-500")
                  box.appendChild(p);
                  setTimeout(() => {
                     box.removeChild(p);
                  }, 3000);
               }
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
   </script>
@endsection