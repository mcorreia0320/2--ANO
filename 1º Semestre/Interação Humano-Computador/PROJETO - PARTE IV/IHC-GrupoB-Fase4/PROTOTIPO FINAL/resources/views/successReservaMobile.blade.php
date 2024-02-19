@extends('layouts.mobileLayout')

@section('content')
   <div id="reservaCompleted" class="h-full flex flex-col justify-center items-center">
        <div class="bg-painel w-3/4 h-48 rounded-3xl flex items-center justify-center">
            <h1 class="text-3xl font-bold text-white text-center">Refeição reservada com sucesso !!</h1>
        </div>
        <p class="border-color card-color p-5 rounded-3xl text-center mt-4">Pode levantar a refeição na cafeteria do andar 0 com o seu cartão de estudante</p>
   </div>
   <script>
    setTimeout(() => {
        window.location.href = '/menu';
    }, 5000);
    </script>
@endsection