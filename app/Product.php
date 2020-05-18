<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //en esta variable van todos los campos que vamos a editar
    public $fillable = ['title', 'image_url', 'description', 'price'];

    public function url(){
        return $this->id ? 'productos.update' : 'productos.store';
    
    }
    public function method(){
        return $this->id ? 'PUT' : 'POST';
    }
}

