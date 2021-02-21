<?php

namespace App\Http\Controllers;

use App\Serie;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class SeriesController extends BaseController {

    public function index() {
        return Serie::all();
    }

    public function store(Request $request) {
        return response()
            ->json(Serie::create($request->all()), 201);
    }

    public function show(int $id) {
        $serie = Serie::find($id);

        if (is_null($serie)) :
            return response()->json('', 204);
        endif;

        return response()->json($serie, 200);
    }

    public function update(int $id, Request $request) {
        $serie = Serie::find($id);

        if (is_null($serie)) :
            return response()->json(['erro' => 'Recurso não encontrada'], 404);
        endif;

        $serie->fill($request->all());
        $serie->save();

        return $serie;
    }

    public function destroy(int $id) {
        $quantidadeRecursosRemovidos = Serie::destroy($id);

        if ($quantidadeRecursosRemovidos === 0) :
            return response()->json(['erro' => 'Recurso não encontrada'], 404);
        endif;

        return response()->json('', 204);
    }

}
