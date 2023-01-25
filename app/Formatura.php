<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formatura extends Model
{
    protected $table = 'formaturas';
    protected $fillable = [

        'data', 'hora', 'titulo', 'ns', 'local', 'cmt_tropa'
        
    ];
}
