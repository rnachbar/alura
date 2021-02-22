<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model {

    public $timestamps = false;
    protected $fillable = ['nome'];
    protected $perPage = 3;
    protected $appends = ['links'];

    public function episodios() {
        return $this->hasMany(Episodio::class);
    }

    public function getLinksAttribute($links): array {
        return [
            'self' => '/series/' . $this->id,
            'episodios' => '/series/' . $this->id . '/episodios'
        ];
    }

}
