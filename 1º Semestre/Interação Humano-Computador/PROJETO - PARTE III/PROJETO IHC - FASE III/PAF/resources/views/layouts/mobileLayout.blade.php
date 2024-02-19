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
        <header class="flex justify-between p-4" style="height: 10%;">
            <nav class="flex gap-4 items-center">
                <a href="/card"><img src="/assets/uma-card.png" alt="uma-card" width="47px" ></a>
                <a href="#" style="height: 50px; width: 50px" class="flex items-center"><img src="/assets/email.png" alt="uma-card" width="90%" ></a>
            </nav>
            <nav class="flex gap-1 items-center">
                <a href="/notification"><img src="/assets/notification.png" alt="uma-card" width="35px" ></a>
                <a href="/profile" style="height: 50px; width: 50px" class="flex items-center justify-end"><img src="/assets/user.png" alt="uma-card" width="80%" ></a>
            </nav>
        </header>
        <section id="mobile-body" style="height: 80%;" class="pb-4 px-4 overflow-scroll">
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