<?php

//use App\Support\Facades\DB;

use App\Categoria;

Route::get('/', function () {
    $categorias = Categoria::all();
    return $categorias;
});

Route::get('/inserir/{nome}', function ($nome){
    $cat = new Categoria();
    $cat->nome = $nome;
    $cat->save();

    return redirect('/');
});

Route::get('/categoria/{id}', function ($id){
    $cat = Categoria::find($id);
    if (isset($cat))
        return $cat;
    else
        echo "<h1>A categoria com id: $id não existe!</h1>";
});
























Route::get('/categorias/{id}', function ($id){
    $cats = DB::table('categorias')->orderBy('id', 'desc')->get();

//    return $cats;

//    foreach ($cats as $c){
//        echo "id ". $c->id . "; ";
//        echo "nome ". $c->nome;
//        echo "<br />";
//    }
//    echo "<hr>";
//
//    $nome = DB::table('categorias')->pluck('nome');
//    foreach ($nome as $n){
//        echo $n."<br />";
//    }
//    echo "<hr>";
//
    $dados = DB::table('categorias')->where('id',$id)->get();
//    foreach ($dados as $d){
//        echo "id ". $d->id . "; ";
//        echo "nome ". $d->nome;
//        echo "<br />";
//    }
    return $dados;
//    echo "<hr>";
//
//    echo "<p>retorna um array utilizando o like</p>";
//    $cats = DB::table('categorias')->where('nome','like','%rf%')->get();
//
//    foreach ($cats as $cc){
//        echo "id ". $cc->id . "; ";
//        echo "nome ". $cc->nome;
//        echo "<br />";
//    }

});





















//Route::get('/nome', 'MeuControlador@getNome');
//
//Route::resource('/cliente', 'ClienteControlador');
//
//Route::post('/cliente/requisitar', 'ClienteControlador@requisitar');

//
//Route::get('/email/{email}', function (){
//    if (View::exists('email'))
//        return view('email', compact('email'));
//    else
//        return "Essa pagina não existe!";
//});










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
