@extends('layouts.mobileLayout')

@section('content')
  <div id="horario">
      <h1 class="text-lg font-semibold color-text text-center">Horario Escolar</h1>
      <div class="flex justify-center gap-4 my-3">
         <button class="btn px-4 py-2 card-color rounded-full font-semibold" onclick="setActive(this)">Dia</button>
         <button class="btn px-4 py-2 card-color rounded-full font-semibold active" onclick="setActive(this)">Semana</button>
         <button class="btn px-4 py-2 card-color rounded-full font-semibold" onclick="setActive(this)">Mes</button>
      </div>
      <div class="flex justify-between">
         <div class="w-5/6 bg-painel rounded-full flex items-center px-5">
            <button class="w-1/12 text-white font-bold">
               &lt;
            </button>
            <div class="w-5/6">
               <p class="text-center text-white font-bold">Dezembro  19/25</p>
            </div>
            <button class="w-1/12  text-white font-bold">
               &gt;
            </button>
         </div>
         <a href="/horario/submitEvent" class="w-12 h-12 rounded-full bg-painel flex items-center justify-center"><p class="text-3xl font-bold text-white">+</p></a>
      </div>
      <div class="mt-5 flex flex-col gap-3 overflow-x-scroll w-full">
         <div id="segunda" class="flex gap-3">
            <div class="bg-painel h-24 rounded-3xl flex flex-col justify-center items-center" style="min-width: 6rem;">
               <h1 class="text-white font-extrabold text-2xl">Seg.</h1>
               <p class="text-white font-extrabold text-2xl">19</p>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-green" style="min-width: 9rem;">
               <h1 class="text-xs text-center">Arquitectura de Dispositivos</h1>
               <p class= "text-xs text-center pt-1">Prof. David Jardim</p>
               <p class= "font-extrabold text-xs">9:00-12:00</p>
               <p class= "text-xs">AULA 32</p>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-blue" style="min-width: 9rem;">
               <h1 class="text-xs text-center">Interação Humano-Computador</h1>
               <p class= "text-xs text-center pt-1">Prof. Eduardo Teles</p>
               <p class= "font-extrabold text-xs">13:00-15:30</p>
               <p class= "text-xs">AULA 24</p>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-yellow" style="min-width: 9rem;">
               <h1 class="text-xs text-center">Aplicações Centradas em Redes</h1>
               <p class= "text-xs text-center pt-1">Prof. Hugo Perdigão</p>
               <p class= "font-extrabold text-xs">18:00-20:00</p>
               <p class= "text-xs">AULA 31</p>
            </div>
         </div>
         <div id="terca" class="flex gap-3">
            <div class="bg-painel h-24 rounded-3xl flex flex-col justify-center items-center" style="min-width: 6rem;">
               <h1 class="text-white font-extrabold text-2xl">Ter.</h1>
               <p class="text-white font-extrabold text-2xl">20</p>
            </div>
            <div class="bg-red-300 h-24 rounded-3xl flex flex-col pt-2 items-center justify-center relative" style="min-width: 9rem;">
               <img src="/assets/danger.png" alt="" width="15px" class="absolute top-3 right-3">
               <h1 class="text-xs text-center font-semibold">Recordario</h1>
               <h1 class="text-xs text-center">Frenquencia SBGD II</h1>
               <a href="/horario/event" class="text-xs bg-red-500 text-white font-bold py-1 px-3 mt-2 rounded-full">Ver Conteudos</a>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-rose" style="min-width: 9rem;">
               <h1 class="text-xs text-center">Segurança Informatica</h1>
               <p class= "text-xs text-center pt-1">Prof. Lisandro Henrique</p>
               <p class= "font-extrabold text-xs">9:00-12:00</p>
               <p class= "text-xs">AULA 31</p>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-red" style="min-width: 9rem;">
               <h1 class="text-xs text-center">SBGD II</h1>
               <p class= "text-xs text-center pt-1">Prof. Jorge Capeça</p>
               <p class= "font-extrabold text-xs">18:00-21:00</p>
               <p class= "text-xs">AULA 31</p>
            </div>
         </div>
         <div id="quarta" class="flex gap-3">
            <div class="bg-painel h-24 rounded-3xl flex flex-col justify-center items-center" style="min-width: 6rem;">
               <h1 class="text-white font-extrabold text-2xl">Quar.</h1>
               <p class="text-white font-extrabold text-2xl">21</p>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-red" style="min-width: 9rem;">
               <h1 class="text-xs text-center">SBGD II</h1>
               <p class= "text-xs text-center pt-1">Prof. Jorge Capeça</p>
               <p class= "font-extrabold text-xs">9:00-12:30</p>
               <p class= "text-xs">AULA 31</p>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-yellow" style="min-width: 9rem;">
               <h1 class="text-xs text-center">Aplicações Centradas em Redes</h1>
               <p class= "text-xs text-center pt-1">Prof. Hugo Perdigão</p>
               <p class= "font-extrabold text-xs">18:00-21:00</p>
               <p class= "text-xs">AULA 31</p>
            </div>
         </div>
         <div id="quinta" class="flex gap-3">
            <div class="bg-painel h-24 rounded-3xl flex flex-col justify-center items-center" style="min-width: 6rem;">
               <h1 class="text-white font-extrabold text-2xl">Quin.</h1>
               <p class="text-white font-extrabold text-2xl">22</p>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-green" style="min-width: 9rem;">
               <h1 class="text-xs text-center">Arquitectura de Dispositivos</h1>
               <p class= "text-xs text-center pt-1">Prof. David Jardim</p>
               <p class= "font-extrabold text-xs">17:00-19:00</p>
               <p class= "text-xs">AULA 32</p>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-blue" style="min-width: 9rem;">
               <h1 class="text-xs text-center">Interação Humano-Computador</h1>
               <p class= "text-xs text-center pt-1">Prof. Eduardo Teles</p>
               <p class= "font-extrabold text-xs">19:00-21:00</p>
               <p class= "text-xs">AULA 24</p>
            </div>
         </div>
         <div id="sexta" class="flex gap-3">
            <div class="bg-painel h-24 rounded-3xl flex flex-col justify-center items-center" style="min-width: 6rem;">
               <h1 class="text-white font-extrabold text-2xl">Sex.</h1>
               <p class="text-white font-extrabold text-2xl">23</p>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-rose" style="min-width: 9rem;">
               <h1 class="text-xs text-center">Segurança Informatica</h1>
               <p class= "text-xs text-center pt-1">Prof. Lisandro Henrique</p>
               <p class= "font-extrabold text-xs">18:00-21:00</p>
               <p class= "text-xs">AULA 31</p>
            </div>
         </div>
         <div id="sabado" class="flex gap-3">
            <div class="bg-painel h-24 rounded-3xl flex flex-col justify-center items-center" style="min-width: 6rem;">
               <h1 class="text-white font-extrabold text-2xl">Sab.</h1>
               <p class="text-white font-extrabold text-2xl">24</p>
            </div>
            <div class="card-color h-24 rounded-3xl flex flex-col pt-2 items-center justify-center ps-3 inner-border-red" style="min-width: 9rem;">
               <h1 class="text-xs text-center">SBGD II</h1>
               <p class= "text-xs text-center pt-1">Prof. Jorge Capeça</p>
               <p class= "font-extrabold text-xs">9:00-12:30</p>
               <p class= "text-xs">AULA 31</p>
            </div>
         </div>
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