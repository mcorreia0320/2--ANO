@extends('layouts.mobileProfileLayout')

@section('content')
   <div class="rounded-full shadow-2xl overflow-hidden absolute top-0 left-5 card-color p-3" style="height: 50px; width: 50px;" >
      <a href="/profile"><img src="/assets/back.png" alt="" class=""></a>
   </div>
   <div id="config" class="flex justify-center items-center flex-col">
      <img src="/assets/config2.png" alt="" width="50%">
      <h1 class="text-2xl font-extrabold my-7 color-text text-center p-1 rounded-full card-color w-2/3">Configurações</h1>
      <ul id="options" class="shadow-2xl w-10/12 mt-4 rounded-2xl overflow-hidden">
         <li class="p-4 card-color ps-5">
             <a href="#" class="w-full flex justify-between">
                 <div class="flex  gap-5">
                     <img src="/assets/password.png" alt="" width="25px" height="20px">
                     <p class="font-medium ">Alterar a palavra-passe</p>
                 </div>
                 <div>
                     &gt;
                 </div>
             </a>
         </li>
         <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
             <a href="#" class="w-full flex justify-between">
                 <div class="flex  gap-5">
                     <img src="/assets/user.png" alt="" width="25px" height="20px">
                     <p class="font-medium ">Alterar a foto de perfil</p>
                 </div>
                 <div>
                     &gt;
                 </div>
             </a>
         </li>
         <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
             <a href="#" class="w-full flex justify-between">
                 <div class="flex  gap-5">
                     <img src="/assets/translate.png" alt="" width="25px" height="20px">
                     <p class="font-medium ">Selecionar o idioma da app</p>
                 </div>
                 <div>
                     &gt;
                 </div>
             </a>
         </li>
         <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
             <a href="#" class="w-full flex justify-between">
                 <div class="flex  gap-5">
                     <img src="/assets/tema.png" alt="" width="25px" height="20px">
                     <p class="font-medium ">Escolher tema da app</p>
                 </div>
                 <div>
                     &gt;
                 </div>
             </a>
         </li>
         <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
            <a href="#" class="w-full flex justify-between">
                <div class="flex  gap-5">
                    <img src="/assets/font.png" alt="" width="25px" height="20px">
                    <p class="font-medium ">Alterar tamanho da fonte</p>
                </div>
                <div>
                    &gt;
                </div>
            </a>
        </li>
     </ul>
   </div>
@endsection