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
        return view("categoria",$dta);
    }
}
