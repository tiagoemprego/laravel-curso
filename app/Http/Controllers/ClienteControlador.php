<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    public function index()
    {
        return "Lista de todos os clientes - Raiz";
    }

    public function create()
    {
        return "Formulario de cadastro de Clientes";
    }

    public function store(Request $request)
    {
        $s = "Armazenar: ";
        $s .= "Nome:" . $request->input('nome') . " e ";
        $s .= "Idade " . $request->input("idade");

        return response($s, 201);
    }

    public function show($id)
    {
        $v = ["Mario", "Edson", "Roberto", "Jean"];
        if ($id >= 0 && $id < count($v))
            return $v[$id];
        return "Não encontrado!";
    }

    public function edit($id)
    {
        return "Formulario para editar cliente pelo id " . $id;
    }

    public function update(Request $request, $id)
    {
        $s = "Atualizar Cliente com id: $id - ";
        $s .= "Nome:" . $request->input('nome') . " e ";
        $s .= "Idade " . $request->input("idade");

        return response($s, 201);
    }

    public function destroy($id)
    {
        return response("Apagado Cliente com id $id", 200);
    }

    public function requisitar(Request $request)
    {
        echo "Nome ".$request->input('nome');
    }
}
