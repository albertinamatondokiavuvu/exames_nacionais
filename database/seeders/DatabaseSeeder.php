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
        /*Classe::create([
            'nome_classe'=>'12ª Classe',
            'user_id'=> '1',
        ]);*/
        User::create([
            'name'=>'MED',
            'email'=>'med@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'admin',
            'telefone'=>931537786,
         ]);
         User::create([
            'name'=>'Delfina',
            'email'=>'dp@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'DP',
            'telefone'=>931537786,
         ]);
         User::create([
            'name'=>'Alex',
            'email'=>'dm@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'DM',
            'telefone'=>931537786,
         ]);
         User::create([
            'name'=>'Fernando',
            'email'=>'dc@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'DC',
            'telefone'=>931537786,
         ]);
         User::create([
            'name'=>'Garcia',
            'email'=>'sp@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'Sp',
            'telefone'=>931537786,
         ]);
    }
}
