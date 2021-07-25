<?php

namespace App;

use \Illuminate\Database\Eloquent\Model;

class Serie extends Model
{

    public $timestamps = false;
    protected $fillable = ['nome'];
    //Por padrão, o Laravel/Lumen o default são 15
    //protected $perPage = 3;

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

}
