<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Evento;
use App\Models\Empresa;
use App\Models\Setor;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Evento::factory(3)->create();
        // DB::insert ('INSERT INTO evento (nome, tipo, ano, data_realizacao) 
        // VALUES (?)', array('Feira do Empreendedor', 'Feira de Negócios', 2022, '2022-09-23') );

        DB::insert ('INSERT INTO setor (nome) 
        VALUES (?)', array('TI') );

        DB::insert ('INSERT INTO setor (nome) 
        VALUES (?)', array('EdTech') );

        DB::insert ('INSERT INTO setor (nome) 
        VALUES (?)', array('FinTech') );

        DB::insert ('INSERT INTO setor (nome) 
        VALUES (?)', array('Engenharia') );

        DB::insert ('INSERT INTO setor (nome) 
        VALUES (?)', array('Robótica e Automoção') );

        DB::insert ('INSERT INTO setor (nome) 
        VALUES (?)', array('Design e Economia Criativa') );

        DB::insert ('INSERT INTO setor (nome) 
        VALUES (?)', array('Agronegócio') );


        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Fábrica de Software', 50000, 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Agribio', 10000, 7, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Monitore Agriambiental', 500000, 7, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Biroska Sem Glúten', 50000, 7, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Aiyra', 50000, 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('AS3 Engenharia', 200000, 3, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Alterdata Software', 900000, 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );
                        
        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Álea Automação', 900000, 4, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Áqua Fluxus', 100000, 3, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Borges o Gato e a gata Christie', 7000, 6, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Ibmec', 50000, 2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('AprendaNet', 200000, 2, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Investtools', 5900, 3, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );

        DB::insert ('INSERT INTO empresa (nome, capital_social, setor_id, descricao) 
        VALUES (?,?,?,?)', array('Trampolin', 80000, 3, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum tempore, fuga reiciendis vitae ratione eveniet aspernatur perferendis corporis, vero tempora officia nam error explicabo exercitationem aliquid earum iusto inventore omnis.') );
    }
}
