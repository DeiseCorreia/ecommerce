<?php

namespace App\Models;



class ClienteEndereco extends RModel
{
    protected $table = 'cliente_enderecos';
    protected $fillable = ['numero','cidade','cep','estado'];  
}
