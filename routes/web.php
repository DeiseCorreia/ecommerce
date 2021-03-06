<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::match(['get','post'], '/', [ ProdutoController::class,'index'])->name("inicio");

Route::match(['get','post'], '/categoria', [ ProdutoController::class,'categoria'])->name("categoria");

Route::match(['get','post'], '{idprod}/produto', [ ProdutoController::class,'cadastroProduto'])->name("produto");

Route::match(['get','post'], '/{idcategoria}/categoria', [ ProdutoController::class,'categoria'])
    ->name("categoria_id");

Route::match(['get','post'], '/cadastro', [ ClienteController::class,'cadastro'])->name("cadastro");

Route::match(['get','post'], '/cliente/cadastro', 
[ ClienteController::class,'cadastroCliente'])->name("cadastro_cliente");


Route::get('/usuario','App\Http\Controllers\UserController@usuario');
Route::match(['get','post'], '/{idproduto}/carrinho/adicionar', 
[ CarrinhoController::class,'adicionarCarrinho'])->name("adicionar_carrinho");

Route::match(['get','post'], '/carrinho', 
[ CarrinhoController::class,'verCarrinho'])->name("ver_carrinho");

Route::match(['get','post'], '/{indice}/excluircarrinho', 
[ CarrinhoController::class,'excluirCarrinho'])->name("carrinho_excluir");





/*Route::get('/', function () {
    return view('welcome');
});*/
/*
Route::get('/', function () {
    return view('inicio');
});
Route::get('categoria', function () {
    return view('categoria');
});
Route::get('produto', function () {
    return view('produto');
});
Route::get('contato', function () {
    return view('contato');
});
*/