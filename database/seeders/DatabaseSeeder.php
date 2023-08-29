<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10NWv1rNyKL6c5cbCaYaTAVOJ4O6WC.fPS1cUMzfTF3zOkNkjLwXK8G', //Senac@123
        // ]);

        // \App\Models\Tipo::factory()->create([
        //    'id_tipo' =>1,
        //    'tipo' => 'Entrada'
        //]);
        // \App\models\Tipo::factory()->create([
        //      'id_tipo'=>2,
        //      'tipo' => 'Saida'
        //]);

        // \App\Models\CentroCusto::factory()->create([
        //    'id_centro_custo' => 1,
        //    'centro_custo' => 'Alimentação'
        // ]);

        // \App\Models\CentroCusto::factory()->create([
        //    'id_centro_custo' => 2,
        //    'centro_custo' => 'Transporte'
        // ]);

        // \App\Models\CentroCusto::factory([
        //    'id_centro_custo' => 3,
        //    'centro_custo' => 'Salario'
        // ]);

        // \App\models\User::factory(10)->create();
        // lançamentos
        \App\Models\Lancamento::factory('50')->create();

    }
}
