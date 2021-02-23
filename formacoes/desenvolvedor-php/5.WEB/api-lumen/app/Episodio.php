<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodio extends Model {

    public $timestamps = false;
    protected $fillable = ['temporada', 'numero', 'assistido', 'serie_id'];
    protected $appends = ['links'];

    public function serie () {
        return $this->belongsTo(Serie::class);
    }

    /**
     * Retornando atributo assistido como boolean através do metodo Accessor.
     * https://laravel.com/docs/8.x/eloquent-mutators
     */
    public function getAssistidoAttribute ($value) : bool {
        return $value;
    }

    public function getLinksAttribute(): array {
        return [
            'self' => '/episodios/' . $this->id,
            'serie' => '/series/' . $this->serie_id
        ];
    }

}
