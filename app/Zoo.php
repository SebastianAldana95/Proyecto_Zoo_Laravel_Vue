<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zoo extends Model
{
    //protected $table = 'zoos';
    //protected $primaryKey = 'id';
    protected $fillable = ['nombre','pais','ciudad', 'tamano', 'presu_anual'];

    public function animales()
    {
        return $this->belongsToMany(Animal::class);
    }
}
 