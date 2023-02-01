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
            'nome_classe'=>'6ª Classe',
        ]);
        Classe::create([
            'nome_classe'=>'9ª Classe',
        ]);
        Classe::create([
            'nome_classe'=>'12ª Classe',
        ]);
        //users_type
        User::create([
            'name'=>'MED',
            'email'=>'med@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'admin',
            'telefone'=>931537786,

         ]);
         User::create([
            'name'=>'dp',
            'email'=>'dp@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'DP',
            'provincia' => 'Luanda',
            'municipio' => 'Viana',
            'telefone'=>931537782,

         ]);
         User::create([
            'name'=>'dm',
            'email'=>'dm@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'DM',
            'provincia' => 'Luanda',
            'municipio' => 'Viana',
            'telefone'=>931537783,

         ]);
         User::create([
            'name'=>'dc',
            'email'=>'dc@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'DC',
            'provincia' => 'Luanda',
            'municipio' => 'Viana',
            'instituicao' =>'INADE',
            'telefone'=>931537784,

         ]);
         User::create([
            'name'=>'sp',
            'email'=>'sp@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'SP',
            'provincia' => 'Luanda',
            'municipio' => 'Viana',
            'instituicao' =>'INADE',
            'telefone'=>931537787,

         ]);
         User::create([
            'name'=>'v',
            'email'=>'v@gmail.com',
            'password'=>Hash::make('12345678'),
            'tipo_user'=>'V',
            'provincia' => 'Luanda',
            'municipio' => 'Viana',
            'instituicao' =>'INADE',
            'telefone'=>931537788,

         ]);
    }
}
