<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::view('/', 'pagina-inicial.index')->name('pagina-inicial');

Route::middleware('auth')->group(function () {
    Route::view('/linha-do-tempo', 'linha-do-tempo.index')->name('linha-do-tempo');
    Route::view('/ajuda', 'ajuda.index')->name('ajuda');

    Route::post('/nova-publicacao', 'Publicacoes@nova')->name('nova-publicacao');
    Route::get('/curtir/{id}', 'Publicacoes@curtir');
    Route::get('/apagar/{id}', 'Publicacoes@apagar');
    Route::get('/compartilhar/{id}', 'Publicacoes@compartilhar');

    Route::get('/comentarios/{idPublicacao}', 'Comentarios@index');
    Route::post('/comentarios/novo', 'Comentarios@novo');

    Route::get('/perfil/{id}', 'Perfis@index');
    Route::get('/sair', 'Perfis@sair');
    Route::get('/seguir/{id}', 'Perfis@seguir');

    Route::get('/obter-usuario-conectado', function() {
        return \Auth::user()->id;
    });
    Route::get('/obter-publicacoes', 'Publicacoes@obterPublicacoes');
    Route::post('/obter-criador-e-compartilhador', 'Publicacoes@obterCriadorECompartilhador');

    Route::get('/mural', 'Mural@index');
    Route::post('/nova-campanha', 'Mural@nova')->name('nova-campanha');
});
