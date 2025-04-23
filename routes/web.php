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

/*Route::get('/', function () {
    return 'olá, bem vinde';
});*/

Route::get('/', 'PrincipalController@principal')->name('site.index');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'ContatoController@contato')->name('site.contato');

Route::post('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function(){ return 'Login'; })->name('site.login');

Route::prefix('app')->group(function() {
    Route::get('/clientes', function(){ return 'Clientes'; });
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Produtos'; });
});

    Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

    Route::fallback(function() {
        echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para voltar a pagina inicial';
    });
/*
    Route::get('/rota1', function() {

    })->name('site.rota1');

    Route::get('/rota2', function() {

    })->name('site.rota2');

    Route::redirect('/rota1, /rota2');

*/

/*
Route::get('/contato/{nome}/{categoria_id}',
    function(
        string $nome = 'Desconhecido',
        int $categoria = 1
        ) {
        echo "Estamos aqui: $nome - $categoria " ;
    }
)-> where('categoria_id', '[0-9]+') -> where('nome', '[A-Za-z]+');

/*Route::get($url, $callback)*/
