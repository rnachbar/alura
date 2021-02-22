<?php

namespace App\Http\Controllers;

use App\Episodios;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class EpisodiosController extends BaseController {

    public function index() {
        return Episodio::all();
    }

    public function store(Request $request) {
        return response()
            ->json(Episodio::create($request->all()), 201);
    }

    public function show(int $id) {
        $episodio = Episodio::find($id);

        if (is_null($episodio)) :
            return response()->json('', 204);
        endif;

        return response()->json($episodio, 200);
    }

    public function update(int $id, Request $request) {
        $episodio = Episodio::find($id);

        if (is_null($episodio)) :
            return response()->json(['erro' => 'Recurso não encontrada'], 404);
        endif;

        $episodio->fill($request->all());
        $episodio->save();

        return $episodio;
    }

    public function destroy(int $id) {
        $quantidadeRecursosRemovidos = Episodio::destroy($id);

        if ($quantidadeRecursosRemovidos === 0) :
            return response()->json(['erro' => 'Recurso não encontrada'], 404);
        endif;

        return response()->json('', 204);
    }

}
