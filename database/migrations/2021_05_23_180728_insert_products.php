<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //produtos vão ficar na categoria
        $cate = new \App\Models\Categoria(['categoria'=> 'Geral']);
        $cate->save();
        $cate1 = new \App\Models\Categoria(['categoria'=> 'Celulares']);
        $cate1->save();
        $cate2 = new \App\Models\Categoria(['categoria'=> 'Computadores']);
        $cate2->save();
        $cate = new \App\Models\Categoria(['categoria'=> 'Notebooks']);
        $cate->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 1','valor' => 1000,'foto'=>'img/celular01.jpg','descricao'=>'','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 2','valor' => 15600,'foto'=>'img/celular02.jpg','descricao'=>'','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 3','valor' => 15700,'foto'=>'img/celular03.jpg','descricao'=>'','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 4','valor' => 1950,'foto'=>'img/celular04.jpg','descricao'=>'','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 11','valor' => 1500,'foto'=>'img/celular07.jpg','descricao'=>'Computador-Desktop','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 5','valor' => 950,'foto'=>'img/celular05.jpg','descricao'=>'Sansung A-02S 32G','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 7','valor' => 1500,'foto'=>'img/celular06.jpg','descricao'=>'Computador-Desktop','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 5','valor' => 1500,'foto'=>'img/computador01.jpg','descricao'=>'Notebook','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 6','valor' => 1500,'foto'=>'img/computador02.png','descricao'=>'Notebook','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 7','valor' => 1500,'foto'=>'img/computador03.jpeg','descricao'=>'Computador-Desktop','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 8','valor' => 1500,'foto'=>'img/computador04.jpg','descricao'=>'Computador-Desktop','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 9','valor' => 1500,'foto'=>'img/computador05.webp','descricao'=>'Computador-Desktop','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 10','valor' => 1500,'foto'=>'img/computador06.jpg','descricao'=>'Computador-Desktop','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 11','valor' => 1500,'foto'=>'img/computador07.jpg','descricao'=>'Computador-Desktop','categoria_id'=>$cate->id]);
        $prod->save();

        $prod = new \App\Models\Produto(['nome'=> 'Produto 11','valor' => 1500,'foto'=>'img/computador08.jpg','descricao'=>'Computador-Desktop','categoria_id'=>$cate->id]);
        $prod->save();
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
