<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $table = 'formaturas';
    protected $fillable = [

        'autoridade', 'precedencia', 'foto', 'nome_completo', 'nome_guerra', 'titulo', 'representante', 'posto_rep', 'nome_completo_rep', 'nome_guerra_rep', 'formatura', 'check_portao', 'check_mesa', 'check_precedencia'
        
    ];
}
