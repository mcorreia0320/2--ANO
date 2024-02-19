<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>InfoAlunos App</title>
</head>
<body>
    <div style="height: 98vh; width: 430px; margin: 1rem;" class="border-2 border-gray-950 bg-mobile rounded-3xl overflow-hidden">
        <header style="height: 5%;">
            
        </header>
        <section id="mobile-body" style="height: 85%;" class="pb-4 px-4  overflow-scroll relative">
            @yield('content')
        </section>
        <footer class=" p-4 bg-painel rounded-t-3xl shadow-top" style="height: 10%;">
            <nav class="flex items-center justify-between">
                <div class="m-0 flex flex-col items-center gap-1">
                    <a href="/"><img src="/assets/home.png" alt="" width="35px"></a>
                    <p class="text-xs font-normal text-white">HOME</p>
                </div>
                <div class="m-0 flex flex-col items-center gap-1">
                    <a href="/pagamentos"><img src="/assets/payment.png" alt="" width="35px"></a>
                    <p class="text-xs font-normal text-white">PAGAMENTOS</p>
                </div>
                <div class="m-0 flex flex-col items-center gap-1">
                    <a href="/menu"><img src="/assets/menu.png" alt="" width="35px"></a>
                    <p class="text-xs font-normal text-white">MENU</p>
                </div>
                <div class="m-0 flex flex-col items-center gap-1">
                    <a href="/horario"><img src="/assets/calendar.png" alt="" width="35px"></a>
                    <p class="text-xs font-normal text-white">HORARIO</p>
                </div>
                <div class="m-0 flex flex-col items-center gap-1">
                    <a href="/services"><img src="/assets/support.png" alt="" width="35px"></a>
                    <p class="text-xs font-normal text-white">SERVIÇOS</p>
                </div>
               
            </nav>
        </footer>
    </div>
</body>
</html>