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
    <div style="height: 98vh; width: 430px; margin: 1rem;" class="border-2 border-gray-950 bg-painel rounded-3xl overflow-hidden relative">
        <div class="absolute top-[25%] left-[17%] ">
            <img src="/assets/logo.png" alt="" class="h-72 rounded-[50%] border border-white border-1 p-10">
            <div class="mt-9 flex gap-4 justify-center">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>
        <div class="absolute bottom-[0%] w-full flex flex-col items-center gap-3 pb-5">
            <img src="/assets/uma-logo.png" alt="" class="w-[200px]">
            <h1 class="text-white text-2xl font-medium">InfoAlunos</h1>
        </div>
    </div>
</body>
<script>
    setTimeout(() => {
        window.location.href = '/';
    }, 5000);
</script>
</html>