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

    public function visit()
    {
        $data = \DB::select("SELECT * FROM 	BR_DADOS_DTVISITA_OBRA");
        return response()->json([
            'total' => count($data),
            'data' => $data
        ], 200);
    }

    public function shutdown_by_date()
    {
        $data = \DB::select("SELECT * FROM 	BR_OPINIAO_DTDESLIGTO");
        return response()->json([
            'total' => count($data),
            'data' => $data
        ], 200);
    }


    public function delivery_date()
    {
        $data = \DB::select("SELECT * FROM  BR_DADOS_DT_ENTREGA");
        return response()->json([
            'total' => count($data),
            'data' => $data
        ], 200);
    }
}