<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gangus To-Do</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
</head>
<body class="bg-gradient-to-br from-sky-600 via-cyan-700 to-blue-800 h-screen">

<div class="flex justify-center">
    <div class="flex bg-gradient-to-br from-sky-800/60 to-cyan-700/60 border-cyan-900 border-2 w-fit h-auto mt-3 mb-8 text-3xl justify-center font-bold tracking-wide p-3">
        <h1 class="text-3xl font-light text-transparent bg-clip-text bg-gradient-to-b from-cyan-200 to-blue-300"> Todo-list in Laravel </h1>
    </div>
</div>

<div class="flex justify-evenly">
    <div class="bg-gradient-to-l from-sky-800/60 to-cyan-700/60 border-solid  w-1/4 h-1/2 p-3 border-cyan-900 border-2 text-zinc-200 shadow-xl font-sans font-semibold">
        @yield('content')
    </div>

    <div class="bg-gradient-to-l from-sky-800/60 to-cyan-700/60 border-solid 0 w-8/12 h-1/2 p-3 border-cyan-900 border-2 text-zinc-200 shadow-xl font-sans font-light text-xl">
        @yield('list')
    </div>

</div>






</body>
</html>
