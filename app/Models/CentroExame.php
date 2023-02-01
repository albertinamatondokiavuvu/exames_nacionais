<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class centroExameExame extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongTo('App\Models\User');
    }
    public function alunos(){
        return $this->hasMany('App\Models\Aluno');
    }
}
