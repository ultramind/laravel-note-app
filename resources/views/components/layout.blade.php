<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        
    </head>
    <body class="bg-gray-200">
        <div class="flex justify-between items-center text-white w-full h-[70px] bg-gray-900 py-2 px-[100px] sticky top-0 mb-10">
            <h1 class="font-bold text-2xl">UltraNote</h1>
            <ul class="flex gap-5">
                <li class="px-5"><a href={{route('note.index') }}>Home</a></li>
                <li class="px-5 border-x-[1px] border-gray-500"><a href={{ route('note.create') }}>Add Note</a></li>
                <li class="px-5"><a href="/">Login</a></li>
            </ul>
        </div>
        {{-- notification --}}
        <div class="flex justify-center">
            @session('message')
                <div class="w-[60%] px-5 py-4 bg-green-400 rounded-lg">{{ session('message') }}</div>
            @endsession
        </div>
        <div class="">
            {{ $slot }}
        </div>
    </body>
</html>
