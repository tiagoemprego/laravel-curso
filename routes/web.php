<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    return "Seja bem vindo(a)";
});

Route::get('/nome/{nome}', function($nome){
   return "<h1>Olá $nome</h1>";
});

Route::get('/repetir/{nome}/{n}', function ($nome, $n){
    if (is_integer($n)){
        for ($i=0; $i<$n; $i++){
            echo "<h1>ola, $nome</h1>";
        }
    }else{
        echo "Voce nao digitou um numero!";
    }
});

Route::get('/seunomecomregra/{nome}/{n}', function ($nome, $n){
    for ($i=0; $i<$n; $i++){
        echo "<h1>ola, $nome! ($i)</h1>";
    }
})->where('n', '[0-9]+')->where('nome', '[A-Za-z]+');

Route::get('/seunomesemregra/{nome?}', function ($nome=null){
    if (isset($nome)){
        echo "<h1>ola, $nome</h1>";
    }else{
        echo "sem nome";
    }
});

//passar varias rotas

Route::prefix('app')->group(function (){

    Route::get('/', function (){
        return "pagina principal do app";
    });

    Route::get('/profile', function (){
        return "profile";
    });

    Route::get('/about', function (){
        return "pagina aboit";
    });

});

//redirect
Route::redirect('/aqui', '/ola', 301);

//retornando arquivos blade
Route::get('/hello', function (){
    return view('hello');
});

Route::view('/viewnome', 'hellonome', ['nome'=>'Tiago', 'sobrenome'=>'Marques']);

Route::get('/hellonome/{nome}/{sobrenome}', function ($nome, $sn){
    return view('hellonome',
        ['nome'=> $nome,
            'sobrenome'=> $sn]);
});
