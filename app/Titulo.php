<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $table = 'titulos';
    public $timestamps = false;
    protected $fillable = [

        'titulo', 'om'
        
    ];
}
