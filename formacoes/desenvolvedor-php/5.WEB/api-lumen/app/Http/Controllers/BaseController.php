<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

/**
 * Uma classe abstrata não pode ser instanciada.
 */
abstract class BaseController extends Controller {

    protected $classe;
    // protected $classe: string; # No php 7.4

    public function index() {
        return $this->classe::all();
    }

    public function store(Request $request) {
        return response()
            ->json($this->classe::create($request->all()), 201);
    }

    public function show(int $id) {
        $recurso = $this->classe::find($id);

        if (is_null($recurso)) :
            return response()->json('', 204);
        endif;

        return response()->json($recurso, 200);
    }

    public function update(int $id, Request $request) {
        $recurso = $this->classe::find($id);

        if (is_null($recurso)) :
            return response()->json(['erro' => 'Recurso não encontrada'], 404);
        endif;

        $recurso->fill($request->all());
        $recurso->save();

        return $recurso;
    }

    public function destroy(int $id) {
        $quantidadeRecursosRemovidos = $this->classe::destroy($id);

        if ($quantidadeRecursosRemovidos === 0) :
            return response()->json(['erro' => 'Recurso não encontrada'], 404);
        endif;

        return response()->json('', 204);
    }

}
