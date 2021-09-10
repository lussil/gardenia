<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


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
            'name' => 'admininastro',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789'),
            'perfil' => 2,
        ]);

        User::create([
            'name' => 'lucas',
            'email' => 'lucas@gmail.com',
            'password' => Hash::make('123456789'),
            'perfil' => 1,
        ]);
          
        }
}
