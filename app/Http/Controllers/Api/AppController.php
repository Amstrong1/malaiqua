<?php

namespace App\Http\Controllers\Api;

use App\Models\Structure;
use App\Http\Controllers\Controller;

class AppController extends Controller
{
    public function index()
    {
        $structures = Structure::with('rooms')->get();

        return response()->json([
            'structures' => $structures
        ]);
    }
}
