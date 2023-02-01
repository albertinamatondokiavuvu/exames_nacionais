<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;
    protected $guarded = ['id']; 

    public function user(){
        return $this->belongTo('App\Models\User');
    }
    public function centroExameexame(){
        return $this->belongTo('App\Models\centroExameExame');
    }
    public function classe(){
        return $this->belongTo('App\Models\Classe');
    }
    public function turma(){
        return $this->belongTo('App\Models\Turma');
    }
}
