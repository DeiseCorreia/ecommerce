<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //
    public function index(Request $request){//method padrão
        
        $dta =[];

        //buscar todos os produtos(select * from Produtos;)
        $listprod = \App\Models\Produto::all();
        $dta["lista"] = $listprod;
        return view("inicio", $dta);
    }
    public function categoria($idcategoria=0){//sobrecarga
        
        $dta =[];
        //select * from categorias;
        $listaCategoria= Categoria::all();

        //select * from produtos limit 4;
        $queryprod= Produto::limit(4);

        if($idcategoria != 0){//se for != é porque foi passado 
            //where categoria_id = $idcategoria; (condição)
            $queryprod->where("categoria_id", $idcategoria);
        }

        $listprod = $queryprod->get();
        
        $dta["lista"] = $listprod;
        $dta["listaCategoria"] = $listaCategoria;
        $dta["idcategoria"] = $idcategoria;//mandando para a view
        return view("categoria",$dta);
    }
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
}
