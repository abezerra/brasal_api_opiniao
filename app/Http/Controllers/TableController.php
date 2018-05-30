<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $data = \DB::select("SELECT * FROM 	BR_DADOS_CLIENTE_OPINIAO");
        return response()->json([
            'total' => count($data),
            'data' => $data
        ], 200);
    }
}