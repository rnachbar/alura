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

}
