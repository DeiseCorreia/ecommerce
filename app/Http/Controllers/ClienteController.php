<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\ClienteEndereco;

class ClienteController extends Controller
{
    //
   
    public function cadastro(Request $request){
        
        $dta =[];
        return view("cadastro",$dta);
    }

    public function cadastroCliente(Request $request){

        $values = $request->all();

        $cliente = new Cliente();


        $cliente->login = $request->input("cpf"," ");
        $cliente->senha = $request->input("senha"," ");
        $cliente->nome = $request->input("nome"," ");

        $senha = $request->input("senha","");
        $cliente->senha = \Hash::make($senha);
       $cliente_endereco = new ClienteEndereco();
        $cliente_endereco->numero = $request->input("numero","");
        $cliente_endereco->cidade = $request->input("cidade","");
        $cliente_endereco->cep = $request->input("cep","");
        $cliente_endereco->estado = $request->input("estado","");

        try{
            \DB::beginTransaction();
            $cliente->save();
            $cliente_endereco->cliente_id = $cliente->id;
            $cliente_endereco->save();
        }catch(\Exception $e){
            
            \DB::rollback();
        }
        return redirect()->route("cadastro");
    }
}
