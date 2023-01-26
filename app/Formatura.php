<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formatura extends Model
{
    protected $table = 'formaturas';
    protected $fillable = [

        'responsavel_rp', 'data', 'hora', 'titulo', 'ns', 'local', 'cmt_tropa'
        
    ];
}
