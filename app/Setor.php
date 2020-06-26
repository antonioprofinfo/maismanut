<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    protected $fillable = [

        'descricao', 'area', 'tel_setor', 'ramal',
    ];

    //protected $hidden = [];

    //protected $casts = [ ];

    public function pessoa(){
        return $this->hasMany(Pessoa::class);
    }
}
