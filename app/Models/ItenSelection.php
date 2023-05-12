<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItenSelection extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function itenConstruction(){
        return $this->hasMany('App\Models\ItenConstruction');
    }
}
