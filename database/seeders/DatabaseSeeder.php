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
        \App\Models\User::factory(10)->create(); // Tabla user y que se creen 10 usuarios
        \App\Models\Post::factory(120)->create(); // Tabla post y que se creen 120 posts
    }
}
