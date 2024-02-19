@extends('layouts.mobileProfileLayout')

@section('content')
   <div class="rounded-full shadow-2xl overflow-hidden absolute top-0 left-5 card-color p-3" style="height: 50px; width: 50px;" >
      <a href="/horario"><img src="/assets/back.png" alt="" class=""></a>
   </div>
   <div class="w-full h-32 card-color mt-16 rounded-3xl flex flex-col items-center p-3">
      <h1 class="text-center text-lg font-semibold"> Frequência SBGD II</h1>
      <p class="text-center text-sm color-text font-semibold">Terça-Feira 20/12/23</p>
      <p class="text-center text-sm color-text font-semibold">15:00-17:00</p>
      <p class="text-center font-semibold">AULA 23</p>
   </div>
   <h1 class="text-lg font-semibold my-4 text-center">Conteúdos</h1>
   <div class="w-full card-color rounded-3xl p-5 px-10">
     <ul class="list-disc">
         <li class="text-sm font-semibold">Conteúdo 1</li>
         <li class="text-sm font-semibold pt-1">Conteúdo 2</li>
         <li class="text-sm font-semibold pt-1">Conteúdo 3</li>
         <li class="text-sm font-semibold  pt-1">Conteúdo 4</li>
         <li class="text-sm font-semibold  pt-1">Conteúdo 5</li>
     </ul>
   </div>
   <h1 class="text-lg font-semibold my-4 text-center">Informação Geral de Avaliação</h1>
   <div class="w-full card-color rounded-3xl p-5 px-10">
      <p class="font-semibold">Nota minima: <span class="font-normal ps-2">9.5</span></p>
   </div>
@endsection