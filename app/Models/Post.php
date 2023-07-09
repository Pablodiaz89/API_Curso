<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function getExcerptAttribute() // lo que coloquemos en el medio de get y Attribute, es el nombre de nuestro campo: Excerpt (estracto)
    {
        return substr($this->content, 0, 120); // retornamos el estracto del contenido, el campo que vamos a utilizar para ello va a ser precisamente el de contenido (content), comenzamos en 0 y continuamos hasta 120
    }

    public function getPublishedAtAttribute() // en este caso Published
    {
        return $this->created_at->format('d/m/Y'); // a nivel de fecha de publicación vamos a utilizar el campo que se crea automaticamente (created_at), que nos muestra cuando fue creada esta información
    }                                              // pero le vamos a dar un formato a través del método format()

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
