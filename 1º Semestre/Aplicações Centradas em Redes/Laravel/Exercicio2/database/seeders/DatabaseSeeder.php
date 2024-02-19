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
        \DB::table("carro")->insert([
            'nome' => 'Carro 1',
            'descricao' => 'ajfkdhjlfjkdslfsf',
            'img' => '/assets/img/carros/1.jpg'
        ]);
        \DB::table("carro")->insert([
            'nome' => 'Carro 2',
            'descricao' => 'sjaklfdakfd djnasodadijasof njdasodas',
            'img' => '/assets/img/carros/2.jpg'
        ]);
        \DB::table("carro")->insert([
            'nome' => 'Carro 3',
            'descricao' => 'kldfsjkdsfkjn ejfnkladfndlk',
            'img' => '/assets/img/carros/3.jpg'
        ]);
        \DB::table("carro")->insert([
            'nome' => 'Carro 4',
            'descricao' => 'djaksldknfjrn dja ndjenfdla',
            'img' => '/assets/img/carros/4.jpg'
        ]);
    }
}
