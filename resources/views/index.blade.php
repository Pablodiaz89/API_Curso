<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        @vite('resources/js/app.js')
    </head>
    <body class="bg-gray-100 text-gray-700">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 my-10">
                @foreach ($posts as $post) <!-- vamos hacer un foreach de toda la información que hemos consultado -->
                    <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5">
                        <!-- la siguiente configuración es el titulo, el estracto y la fecha de cada post -->
                        <h2 class="font-bold text-lg mb-4">{{ $post->title }}</h2>
                        <p class="text-xs"> {{ $post->excerpt }} </p> <!-- lo que vamos a colocar aquí dentro es el extracto, como podemos imaginar, vamos a colocar un campo virtual para que esto funcione -->
                        <p class="text-xs text-right"> {{ $post->published_at }} </p> <!-- cuando fue publicada esta información -->
                    </div>
                @endforeach <!-- luego de todo esto de que todo el foreach se cumpla, imprimimos en pantalla, el acceso a la paginación -->
            </div>
        </div>  
        
        <div class="mb-10">

            {{ $posts->links() }} <!-- seria $posts en plural, y por supuesto como estamos utilizando desde el controlador el metodo de paginación 'paginate()', ya esto ya viene listo con el método links(), que nos va a generar todos los botones para paginar -->

        </div>

        
    
    </body>
</html>



<!-- foreach ($posts as $post)  vamos hacer un foreach de toda la información que hemos consultado -->  
<!--    <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5"> -->
<!--        <h2> $post->title }}</h2>  en este momento trabajamos con post y queremos acceder de manera directa al titulo -->
<!--    </div> -->
<!-- endforeach  luego de todo esto de que todo el foreach se cumpla, imprimimos en pantalla, el acceso a la paginación -->
    