<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/nome', 'MeuControlador@getNome');
//
//Route::resource('/cliente', 'ClienteControlador');
//
//Route::post('/cliente/requisitar', 'ClienteControlador@requisitar');


Route::get('/email/{email}', function (){
    if (View::exists('email'))
        return view('email', compact('email'));
    else
        return "Essa pagina não existe!";
});










//
//Route::get('/ola', function () {
//    return "Seja bem vindo(a)";
//});
//
//Route::get('/nome/{nome}', function($nome){
//   return "<h1>Olá $nome</h1>";
//});
//
//Route::get('/repetir/{nome}/{n}', function ($nome, $n){
//    if (is_integer($n)){
//        for ($i=0; $i<$n; $i++){
//            echo "<h1>ola, $nome</h1>";
//        }
//    }else{
//        echo "Voce nao digitou um numero!";
//    }
//});
//
//Route::get('/seunomecomregra/{nome}/{n}', function ($nome, $n){
//    for ($i=0; $i<$n; $i++){
//        echo "<h1>ola, $nome! ($i)</h1>";
//    }
//})->where('n', '[0-9]+')->where('nome', '[A-Za-z]+');
//
//Route::get('/seunomesemregra/{nome?}', function ($nome=null){
//    if (isset($nome)){
//        echo "<h1>ola, $nome</h1>";
//    }else{
//        echo "sem nome";
//    }
//});
//
////passar varias rotas
//
//Route::prefix('app')->group(function (){
//
//    Route::get('/', function (){
//        return "pagina principal do app";
//    });
//
//    Route::get('/profile', function (){
//        return "profile";
//    });
//
//    Route::get('/about', function (){
//        return "pagina aboit";
//    });
//
//});
//
////redirect
//Route::redirect('/aqui', '/ola', 301);
//
////retornando arquivos blade
//Route::get('/hello', function (){
//    return view('hello');
//});
//
//Route::view('/viewnome', 'hellonome', ['nome'=>'Tiago', 'sobrenome'=>'Marques']);
//
//Route::post('/hellonome/{nome}/{sobrenome}', function ($nome, $sn){
//    return view('hellonome',
//        ['nome'=> $nome,
//            'sobrenome'=> $sn]);
//});
//
//Route::post('/rest/imprimir', function (Request $req){
//    $nome = $req->input('nome');
//    $idade = $req->input('idade');
//    return "HELLO $nome!! ($idade) (POST)";
//});
//
//Route::match(['get', 'post'],'/rest/hello2', function (){
//    return "Hello Word 2";
//});
//
//Route::get('/produtoshehehe', function (){
//    echo "<h1>Produtos</h1>";
//    echo "<ol>";
//    echo "<li>Notebook</li>";
//    echo "<li>Teclado</li>";
//    echo "<li>Mouse</li>";
//    echo "</ol>";
//})->name('Listadeprodutps');
//
//Route::get('/linkprodutos', function (){
//    $url = route('Listadeprodutps');
//
//    echo "<a href=\"".$url."\">Link produtos</a>";
//});
