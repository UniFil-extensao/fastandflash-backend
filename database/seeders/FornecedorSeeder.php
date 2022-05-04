<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fornecedor::create([
            // 'nome' => 'Alimentos Fornecedor',
            // 'site' => 'fornecedor.teste.com',
            // 'uf' => 'PR',
            // 'email' => 'fornecedoralim@fornec.com'
        // ]);

        // Fornecedor::create([
            // 'nome' => 'Fornecedor A',
            // 'site' => 'fornecedorA.teste.com',
            // 'uf' => 'RJ',
            // 'email' => 'fornecedorA@fornec.com'
        // ]);

        // Fornecedor::create([
            // 'nome' => 'Alimentos B',
            // 'site' => 'fornecedorb.teste.com',
            // 'uf' => 'RR',
            // 'email' => 'fornec@fornec.com'
        // ]);
        Fornecedor::factory()->count(100)->create();
    }
}