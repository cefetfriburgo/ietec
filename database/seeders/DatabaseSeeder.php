<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\PlanejamentoEmpresa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        /*
        \App\Models\PlanejamentoEmpresa::factory()->create([
            'nome_empresa' => 'XPTO',
            'tipo' => 'Capital',
            'assunto' => 'Segue a ficha de Capital do mês',
            'data' => '20/01/2020'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        

        

        DB::insert('insert into planejamento_empresa
            (nome_empresa, tipo, assunto, data)
        values (?,?,?,?)',
        array('FriTeste desenvolvimento', 'Tecnologia', 'Análise de gráfico','25/05/2022'));
            */
    }
}

class PlanejamentoEmpresaTableSeeder extends Seeder {
    public function run() {
        DB::insert('insert into planejamento_empresa
            (nome_empresa, tipo, assunto, data)
        values (?,?,?,?)',
        array('XPTO', 'Capital', 'Segue a ficha de Capital do mês','2020-01-20'));

        DB::insert('insert into planejamento_empresa
            (nome_empresa, tipo, assunto, data)
        values (?,?,?,?)',
        array('FriTeste desenvolvimento', 'Tecnologia', 'Análise de gráfico','2022-05-02'));
            
    }
}
/*
insert into planejamento_empresa
            (nome_empresa, tipo, assunto, data)
        values ('XPTO', 'Capital', 'Segue a ficha de Capital do mês','2020-01-20')
        ,('FriTeste desenvolvimento', 'Tecnologia', 'Análise de gráfico','2022-05-02');
        */