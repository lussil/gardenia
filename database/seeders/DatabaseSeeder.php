<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\User;
use App\Models\Produto;
use App\Models\Comentario;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriaSeeder::class,
            UserSeeder::class,
            ProdutoSeeder::class,
            ComentarioSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
