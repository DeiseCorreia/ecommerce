<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function contato(Request $request){
        
        $dta =[];
        return view("contato",$dta);
    }
    public function cadastro(Request $request){
        
        $dta =[];
        return view("cadastro",$dta);
    }
}
