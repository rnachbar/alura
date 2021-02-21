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
            ->json(Serie::create(['nome' => $request->nome]), 201);
    }

    public function show(int $id) {
        $serie = Serie::find($id);

        if (is_null($serie)) :
            return response()->json('', 204);
        endif;

        return response()->json($serie, 200);
    }

}
