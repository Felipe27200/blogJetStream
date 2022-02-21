<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- Styles: se traen los estilos de tailwind, es con asset como se traen los estilos de
        app.css -->
        {{-- <link rel="stylesheet" href="{{mix('css/app.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


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
            <x-alert color="red"/>
        </div>
    </body>
</html>
