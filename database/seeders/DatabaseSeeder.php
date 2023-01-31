<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Classe;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Classe::create([
            'nome_classe'=>'12ª Classe',
        ]);
        User::create([
            'name'=>'MED',
            'email'=>'med@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'admin',
            'telefone'=>931537786,

         ]);
    }
}
