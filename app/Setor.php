<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    //protected $fillable = [];
   
    //protected $hidden = [];

    //protected $casts = [ ];

    public function pessoa(){
        return $this->hasMany(Pessoa::class);
    }
}
