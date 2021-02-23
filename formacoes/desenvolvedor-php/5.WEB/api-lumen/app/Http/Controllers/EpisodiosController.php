<?php

namespace App\Http\Controllers;

use App\Episodio;
// use Illuminate\Support\Facades\Auth;

class EpisodiosController extends BaseController {

    public function __construct() {
        $this->classe = Episodio::class;
    }

    public function buscaPorSerie(int $serieId) {
        $episodios = Episodio::query()
            ->where('serie_id', $serieId)
            // ->get();
            ->paginate();

        // Auth::user();
        return $episodios;
    }

}
