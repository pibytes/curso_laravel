<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    public function categoria(){ //$libro->categoria->nombre
        return $this->belongsTo(Categoria::class); //Pertenece a una Categoría.
    }
}