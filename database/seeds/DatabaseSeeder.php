<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(DissertacoesSeeder::class);
    }
}

class DissertacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into dissertacoes (nome, Y_M_D, titulo, orientador, co_orientador, resumo) values(?, ?, ?, ?, ?, ?)', ['teste_n', 2016-05-06, 'teste_t', 'teste_o', 'teste_co', 'teste_r']);
        DB::insert('insert into dissertacoes (nome, Y_M_D, titulo, orientador, co_orientador, resumo) values(?, ?, ?, ?, ?, ?)', ['teste_0', 2016-05-06, 'teste_0', 'teste_0', 'teste_0', 'teste_0']);
        DB::insert('insert into dissertacoes (nome, Y_M_D, titulo, orientador, co_orientador, resumo) values(?, ?, ?, ?, ?, ?)', ['teste_p', 2016-05-06, 'teste_p', 'teste_p', 'teste_p', 'teste_p']);


    }
}

//DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);