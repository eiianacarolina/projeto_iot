<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ana',
            'email' => 'ana@teste.com',
            'password' => Hash::make('123456'),//essa função vai fazer criptografia da senha com base na chave do .env, sem a chave n tem como traduzir a senha
        ]);

        User::create([
            'name' => 'Fabio',
            'email' => 'fabio@teste.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
