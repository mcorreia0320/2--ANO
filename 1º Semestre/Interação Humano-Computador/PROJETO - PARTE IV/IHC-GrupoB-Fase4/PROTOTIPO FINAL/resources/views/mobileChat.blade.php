<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div style="height: 98vh; width: 430px; margin: 1rem;" class="border-2 border-gray-950 bg-[#EBEBEB] rounded-3xl overflow-hidden">
        <header class=" bg-[#D6D6D6] h-[10%] flex justify-between">
            <div class="flex items-center pt-4 px-5 gap-2 h-full">
                <div class="rounded-full hover:shadow-2xl transition-shadow duration-700 overflow-hidden p-3" style="height: 50px; width: 50px;" >
                    <a href="/"><img src="/assets/back.png" alt="" class=""></a>
                 </div>
                 <div class="flex gap-3 items-center">
                    <img src="/assets/user.png" alt="" class="h-[50px] w-[50px]">
                    <h1 class="text-2xl font-bold">Turma A</h1>
                 </div>
            </div>
            <div class="flex items-center pt-4 px-5 gap-2 h-full">
                <img src="/assets/video.png" alt="" class="h-[50px] w-[50px] cursor-pointer">
                <img src="/assets/call.png" alt="" class="h-[30px] w-[30px] cursor-pointer">
            </div>
            
        </header>
        <section id="chat" class="h-[80%] py-9 px-5 flex flex-col gap-5">
            <div class="flex gap-3 items-center">
                <img src="/assets/user.png" alt="" class="max-w-[50px] max-h-[50px]">
                <div class="bg-[#E292FE] opacity-50 w-52 h-20 rounded-3xl"></div>
            </div>
            <div class="flex gap-3 items-center">
                <img src="/assets/user.png" alt="" class="max-w-[50px] max-h-[50px]">
                <div class="bg-[#D3E2FF] w-32 h-12 rounded-3xl"></div>
            </div>
            <div class="flex gap-3 items-center">
                <img src="/assets/user.png" alt="" class="max-w-[50px] max-h-[50px] opacity-0">
                <div class="bg-[#D3E2FF] w-52 h-40 rounded-3xl"></div>
            </div>
            <div class="flex flex-row-reverse gap-3 items-center">
                <img src="/assets/user.png" alt="" class="max-w-[50px] max-h-[50px]">
                <div class="bg-[#B1DD8B] w-52 h-12 rounded-3xl opacity-50"></div>
            </div>
            <div class="flex flex-row-reverse gap-3 items-center">
                <img src="/assets/user.png" alt="" class="max-w-[50px] max-h-[50px] opacity-0">
                <div class="bg-[#B1DD8B] w-40 h-12 rounded-3xl opacity-50"></div>
            </div>
            <div class="flex flex-row-reverse gap-3 items-center">
                <img src="/assets/user.png" alt="" class="max-w-[50px] max-h-[50px] opacity-0">
                <div class="bg-[#B1DD8B] w-52 h-20 rounded-3xl opacity-50"></div>
            </div>
        </section>
        <footer class="h-[10%] bg-[#D6D6D6] flex items-center px-3 gap-3">
            <button class="bg-[#64B7FF] h-[45px] w-[45px] rounded-full p-3 flex items-center justify-center">
                <p class="text-white font-medium text-3xl">+</p>
            </button>
            <input type="text" class="bg-transparent rounded-full h-[45px] w-[80%] px-5" placeholder="Escreva uma mensagem...">
            <div class="flex gap-2 w-[20%]">
                <img src="/assets/camera.png" alt="" class="h-[30px] w-[30px] cursor-pointer">
                <img src="/assets/microphone.png" alt="" class="h-[30px] w-[30px] cursor-pointer">
            </div>
        </footer>
    </div>
</body>
</html>