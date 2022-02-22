<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- http://localhost/blogJetStream/public/register --}}

        <title>Laravel</title>

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles: se traen los estilos de tailwind, es con asset como se traen los estilos de
        app.css -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container mx-auto">
            {{-- Así se invoca el componente después de x- va el
                nombre de este.
                
                De esta forma se le envía una variable con el nombre color y el valor
                que representa el color a la clase del componente--}}
            {{-- <x-alert colorRecibido="green" /> --}}

            {{-- Enviar texto o valores a las alertas --}}
            <x-alert>
                {{-- Como el slot ya está ocupado, hay que definir otros
                    conocidos como slots con nombre que son recibidos
                    como variables en el componente --}}
                <x-slot name="title">
                    Título 1
                </x-slot>

                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur enim unde ab nisi corrupti omnis labore animi excepturi mollitia quo. Nam porro, asperiores quibusdam dolorem sapiente exercitationem id possimus et.
            </x-alert>

            <x-alert>
                <x-slot name="title">
                    Título 2
                </x-slot>

                Hola Mundo
            </x-alert>
        </div>

        <div class="relative flex items-top justify-center min-h-screen">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
