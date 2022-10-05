<?php
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Evento;

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

        Evento::factory(3)->create();
        //DB::insert('INSERT INTO evento (nome, tipo, ano, data_realizacao) VALUES (?)', array('Feira do Empreendedor', 'Feira de Negócios', 2022, '2022-09-23') );
    }
}
