<?php

namespace App;

use \Illuminate\Database\Eloquent\Model;

class Serie extends Model
{

    public $timestamps = false;
    protected $fillable = ['nome'];
    protected $appends = ['links'];
    //Por padrão, o Laravel/Lumen o default são 15
    //protected $perPage = 3;

    public function episodios()
    {
        return $this->hasMany(Episodio::class);
    }

    public function getLinksAttribute($links): array
    {
        return [
            'self' => '/api/series/'.$this->id,
            'episodios' => '/api/series/' . $this->id . '/episodios'
        ];
    }

}
