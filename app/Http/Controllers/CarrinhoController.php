<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function adicionarCarrinho($idProduto = 0){
        //buscar um produto pelo id
        $prod = Produto::find($idProduto);//pegando a chave primaria com essa propriedade

        if($prod){//normalmente no laravel ele grava seus dados em arquivos no caso das sessoes
            //parabéns você achou um produto
            //buscar da sessão o carrinho atual
            $carrinho = session('cart',[]);//se a sessão não existir será um array vazio

            array_push($carrinho, $prod);//add no carrinho o objeto prod
            session(['cart' => $carrinho]);
        }

        return redirect()->route("inicio");//independentemente volte pra tela principal
    }

    public function verCarrinho(Request $request){
       $carrinho = session('cart', []) ;
       //dd($carrinho);//mostra os dados do carrinho e finaliza o metodo

       //aqui estamos devolvendo pra view
       $dta = ['cart' => $carrinho];
       return view("carrinho",$dta);//retornando
    }


    public function excluirCarrinho($indice){
        $carrinho = session('cart' , []);
        if(isset($carrinho[$indice])){
            unset($carrinho[$indice]);//excluo o produto
        }
        session(["cart" => $carrinho]);//substituo
        return redirect()->route("ver_carrinho");
    }
}
