<?php

namespace App\Models;



class Cliente extends RModel
{
    protected $table = 'clientes';
    protected $fillable = ['email','login','senha','nome'];  
}
