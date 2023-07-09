<?php

namespace App\Http\Controllers;

use App\Models\Post; 
use Illuminate\Http\Request;

class PostController extends Controller
{
    public  function index()
    {
        return view('index', ['posts' => Post::latest()->paginate() // como vamos a trabajar con post, necesitamos invocarlo
        ]);
    }
}

// Retornamos a una vista llamada 'index' (aún no hemos configurado, simplemente se llama 'index'), y le vamos a pasar toda la información: queremos que se trabaje con 'posts'. 
// Y la consulta la queremos hacer de la siguiente manera: tráeme los últimos posts: Post::latest(). Y queremos que nos los traigas paginados: paginate().
// Esto seria lo que necesito en este momento para hacer nuestra consulta y los datos vallan correctamente a mi vista (configuración de la vista en el siguiente apartado)