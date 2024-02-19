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
        \DB::table("products")->insert([
            'name' => 'PC basico',
            'descricao' => 'ajfkdhjlfjkdslfsf',
            'img' => '/img/produtos/1.jpg',
            'preco' => 600
        ]);
        \DB::table("products")->insert([
            'name' => 'PC medio',
            'descricao' => 'sjaklfdakfd djnasodadijasof njdasodas',
            'img' => '/img/produtos/2.jpg',
            'preco' => 800
        ]);
        \DB::table("products")->insert([
            'name' => 'PC gamer',
            'descricao' => 'kldfsjkdsfkjn ejfnkladfndlk',
            'img' => '/img/produtos/3.jpg',
            'preco' => 1200
        ]);
        \DB::table("products")->insert([
            'name' => 'PC escritorio',
            'descricao' => 'djaksldknfjrn dja ndjenfdla',
            'img' => '/img/produtos/4.jpg',
            'preco' => 500
        ]);
    }
}
