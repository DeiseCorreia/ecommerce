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
        //$cliente->fill($values);//metodo fill()
        //dd($values);


        $cliente->login = $request->input("cpf"," ");
        $cliente->senha = $request->input("senha"," ");
        $cliente->nome = $request->input("nome"," ");



        //criando instanciando!
       $cliente_endereco = new ClienteEndereco();//instancia
        //não está passando a cidade ou estado!
        dd($values);
        $cliente_endereco->numero = $request->input("numero","");
        $cliente_endereco->cidade = $request->input("cidade","");//deu ruim
        $cliente_endereco->cep = $request->input("cep","");
        $cliente_endereco->estado = $request->input("estado","");//deu ruim


        //dd($cliente_endereco);

        
        try{

            $cliente->save();//salvo o cliente
            $cliente_endereco->cliente_id = $cliente->id;//relacionamento das tabelas
            $cliente_endereco->save();//salve o endereço
            
        }catch(\Exception $e){

        }

       //return redirect()->back();
        return redirect()->route("cadastro");
    }
}
