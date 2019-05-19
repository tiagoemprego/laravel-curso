<?php

use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->insert([
            'nome' => 'Roupas'
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Eletronicos'
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Perfume'
        ]);
        DB::table('categorias')->insert([
            'nome' => 'Moveis'
        ]);
    }
}
