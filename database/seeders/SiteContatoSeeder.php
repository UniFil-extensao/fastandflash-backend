<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // SiteContato::create([
            // 'nome' => 'Sistema SG', 
            // 'telefone' => '(23) 9 8123-4522',
            // 'email' => 'teste@emailteste.com',
            // 'motivo_contato' => '1', 
            // 'mensagem' => 'Teste teste teste mensagem de teste número 1'
        // ]);

        // SiteContato::create([
            // 'nome' => 'Sistema Teste', 
            // 'telefone' => '(23) 9 9873-4522',
            // 'email' => 'teste@emailteste22.com',
            // 'motivo_contato' => '2', 
            // 'mensagem' => 'Teste teste teste mensagem de teste número 2'
        // ]);

        // SiteContato::create([
            // 'nome' => 'Sistema Novo Teste', 
            // 'telefone' => '(23) 9 8123-4982',
            // 'email' => 'testenovoteste@emailteste.br',
            // 'motivo_contato' => '3', 
            // 'mensagem' => 'Teste mensagem de teste número 3'
        // ]);
        SiteContato::factory()->count(100)->create();
    }
}
