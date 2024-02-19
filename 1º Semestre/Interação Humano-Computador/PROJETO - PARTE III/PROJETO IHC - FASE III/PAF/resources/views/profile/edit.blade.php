@extends('layouts.mobileProfileLayout')

@section('content')
<div class="rounded-full shadow-2xl overflow-hidden absolute top-0 left-5 card-color p-3" style="height: 50px; width: 50px;" >
    <a href="/"><img src="/assets/back.png" alt="" class=""></a>
 </div>
    <div id="profile" class="flex flex-col justify-center items-center">
        <div class="rounded-full shadow-2xl overflow-hidden" style="height: 11rem; width: 11rem;" >
            <img src="/assets/userProfile.png" alt="" class="object-cover h-full w-full">
        </div>
        <h1 class="text-4xl mt-1 font-semibold">Miguel Correia</h1>
        <ul id="options" class="shadow-2xl w-10/12 mt-4 rounded-2xl overflow-hidden">
            <li class="p-4 card-color ps-5">
                <a href="#" class="w-full flex justify-between">
                    <div class="flex  gap-5">
                        <img src="/assets/personalInfo.png" alt="" width="25px" height="20px">
                        <p class="font-medium ">Informações Pessoais</p>
                    </div>
                    <div>
                        &gt;
                    </div>
                </a>
            </li>
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
                <a href="#" class="w-full flex justify-between">
                    <div class="flex  gap-5">
                        <img src="/assets/contact.png" alt="" width="25px" height="20px">
                        <p class="font-medium ">Contactos</p>
                    </div>
                    <div>
                        &gt;
                    </div>
                </a>
            </li>
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
                <a href="#" class="w-full flex justify-between">
                    <div class="flex  gap-5">
                        <img src="/assets/atividades.png" alt="" width="25px" height="20px">
                        <p class="font-medium ">Atividades Academicas</p>
                    </div>
                    <div>
                        &gt;
                    </div>
                </a>
            </li>
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
                <a href="#" class="w-full flex justify-between">
                    <div class="flex  gap-5">
                        <img src="/assets/document.png" alt="" width="25px" height="20px">
                        <p class="font-medium ">Documentos</p>
                    </div>
                    <div>
                        &gt;
                    </div>
                </a>
            </li>
        </ul>
        <ul id="options" class="shadow-2xl w-10/12 mt-4 rounded-2xl overflow-hidden">
            <li class="p-4 card-color ps-5">
                <a href="/profile/configuracoes" class="w-full flex justify-between">
                    <div class="flex  gap-5">
                        <img src="/assets/config.png" alt="" width="25px" height="20px">
                        <p class="font-medium ">Configurações</p>
                    </div>
                    <div>
                        &gt;
                    </div>
                </a>
            </li>
            <li class="p-4 card-color ps-5 border-t-2 border-gray-200">
                <a href="#" class="w-full flex justify-between">
                    <div class="flex  gap-5">
                        <img src="/assets/logout.png" alt="" width="25px" height="20px">
                        <p class="font-medium ">Fechar Sessão</p>
                    </div>
                    <div>
                        &gt;
                    </div>
                </a>
            </li>
        </ul>
    </div>
@endsection
