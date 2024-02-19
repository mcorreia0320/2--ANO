<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div style="height: 98vh; width: 430px; margin: 1rem;" class="relative border-2 border-gray-950 bg-[#EBEBEB] rounded-3xl overflow-hidden">
        <header class="relative bg-painel rounded-b-full h-[45%] flex flex-col items-center justify-center">
            <img src="/assets/logo.png" alt="" class="h-1/2">
            <p class="font-medium text-[2.4rem] text-white">InfoAlunos</p>
            <img src="/assets/uma-logo.png" alt="" class="absolute h-[40px] w-[125px] top-[3%] left-[4%]">
        </header>
        <div class="absolute top-[45.2%] w-full text-center">
            <x-input-error :messages="$errors->get('email')" class="pt-2 "/>
            <x-input-error :messages="$errors->get('password')"  class="pt-2" />
        </div>
        <form action="{{ route('login') }}" method="POST" class="px-6 mt-7">
            @csrf
            <h1 class="w-full text-center text-[1.6rem] text-[#64b7f8] font-semibold mb-3">Iniciar Sessão</h1>
            <label for="email" class="ml-3 pt-3 font-semibold text-[#64b7f8]">Email:</label>
            <ul class="shadow-2xl w-full mt-4 rounded-2xl overflow-hidden mb-6">
                <li class="p-4 card-color ps-5">
                    <input type="email" name="email" id="email" class="input-form" placeholder="example@student.uma.pt" required>
                    <hr class="m-0 border-gray-400">
                </li>
            </ul>
            <label for="password" class="ml-3 pt-3 font-semibold text-[#64b7f8]">Password:</label>
            <ul class="shadow-2xl w-full mt-4 rounded-2xl overflow-hidden">
                <li class="p-4 card-color ps-5 relative">
                    <input type="password" name="password" id="password" class="input-form" placeholder="**********" required>
                    <hr class="m-0 border-gray-400">
                    <img src="/assets/visibility-on.png" alt="" class="absolute right-[4.5%] top-[50%] -translate-y-[50%] cursor-pointer" width="25px" height="25px" onclick="changeVisibility(this)">
                </li>
            </ul>
            <div class="w-full my-8 text-center">
                <button type="submit" class="bg-[#64b7f8] text-white text-2xl font-semibold rounded-full py-2 px-4 w-[50%]">Entrar</button>
            </div>
        </form>
        <a href="#" class="absolute bottom-[2%] left-[22%] text-[#64b7f8] font-semibold">Esqueceu a sua palavra passe?</a>
    </div>
</body>

<script>
    function changeVisibility(eye){
        let input = eye.parentElement.querySelector('input')
        if(input.type == 'password'){
            input.type = 'text'
            eye.src = '/assets/visibility-off.png'
        }else{
            input.type = 'password'
            eye.src = '/assets/visibility-on.png'
        }
    }
</script>
</html>