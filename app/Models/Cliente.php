<?php

namespace App\Models;

use App\Models\Cliente;
use App\Models\ClienteEndereco;

class Cliente extends RModel
{
    protected $table = 'clientes';
    protected $fillable = ['email','login','senha','nome'];  
}

class ClienteEndereco extends RModel
{
    protected $table = 'cliente_enderecos';
    protected $fillable = ['numero','cidade','cep','estado'];  
}

