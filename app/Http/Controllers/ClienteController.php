<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\ClienteEndereco;

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

    public function cadastroCliente(Request $request){

        //pega todos os valores do form
        $values = $request->all();

        $cliente = new Cliente();//instancia
        //para evitar ficar fazendo isso($cliente->cpf = $request->input("cpf", ""));
        $cliente->fill($values);//metodo fill()
        $cliente->login = $request->input("cpf","");

        $cliente_enderecos = new ClienteEndereco($values);//instancia
       
        //dd($cliente_endereco);

        try{
            $cliente->save();//salvo o cliente
            $cliente_enderecos->cliente_id = $cliente->id;//relacionamento das tabelas
            $cliente_enderecos->save();//salve o endereço
        }catch(\Exception $e){

        }

       //return redirect()->back();
        return redirect()->route("cadastro");
    }
}
