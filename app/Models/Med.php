<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Med extends Model
{
    use HasFactory;
    public function medPesquisa($provincia,$municipio)
    {
        $response['logs']= CentroExame::where([['provincia','=',$provincia],['municipio','=',$municipio]]);

        return $response['logs']->get();
    }
}
