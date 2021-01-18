<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    protected $fillable = ['nom_vulgar','nom_cientifico','familia', 'p_extincion'];

    public function animales()
    {
        return $this->hasMany(Animal::class);
    }
}