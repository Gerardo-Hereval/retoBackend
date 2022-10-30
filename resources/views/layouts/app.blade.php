<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reto Tecnico - @yield('titulo')</title>
        @vite('resources/css/app.css')
        


    </head>
    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class="container mx-auto flex justify-between items-center" >
                <h1 class="text-3xl font-black">
                    @yield('titulo') 
                </h1> 
                <nav class="md:w-1/12">
                    <a href="{{route ('/')}}"><img src="{{asset('img/Imagen.png')}}" alt="Icono_inicio"></img></a>
                </nav>
            </div>
        </header>
        <main class="container mx-auto mt-10">

            @yield('contenido')
        </main>
        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            Reto Tecnico Backend- Realizado por Carlos Heredia {{now()->year}}
        </footer>
    </body>
</html>
