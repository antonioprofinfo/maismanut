<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'matricula', 'funcao', 'tel_fixo', 'tel_movel',
    ];

    //protected $hidden = [];

    //protected $casts = [ ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setor(){
        return $this->belongsTo(Setor::class);
    }
}
