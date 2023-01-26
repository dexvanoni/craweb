<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridade extends Model
{
    protected $table = 'autoridades';
    public $timestamps = false;
    protected $fillable = [

        'posto', 'sequencia_interna'
        
    ];


}
