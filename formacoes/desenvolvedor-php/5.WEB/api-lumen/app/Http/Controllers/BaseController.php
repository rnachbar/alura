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

    public function index(Request $request) {
        /**
         * offset busca a partir daquele elemento.
         * Estou na página 1, faço 1 - 1 que é 0, multiplicado por qualquer coisa é 0, então buscamos do início, do elemento 0.
         */
        // $offset = ($request->page - 1) * $request->per_page;

        // return $this->classe::query()
        //     ->offset($offset)
        //     ->limit($request->per_page)
        //     ->get();

        /**
         * Fazendo paginação com o Lumen.
         */
        return $this->classe::paginate($request->per_page);
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
