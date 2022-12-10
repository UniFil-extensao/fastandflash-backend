<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sistema Teste', 
            'email' => 'teste@emailteste22.com',
            'password' => '123456', 
        ]);

        User::factory()->count(20)->create();

    }
}
