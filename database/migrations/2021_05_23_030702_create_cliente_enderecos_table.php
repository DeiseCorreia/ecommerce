<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente_enderecos', function (Blueprint $table) {
            $table->increments("id");

            $table->string("numero")->nullable();
            $table->string("cidade")->nullable();
            $table->string("cep");
            $table->string("estado")->nullable();
            
            $table->integer("cliente_id")
                ->unsigned();

            $table->timestamps();

            $table->foreign("cliente_id")
            ->references("id")->on("clientes")
                ->onDelete("cascade")->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente_enderecos');
    }
}
