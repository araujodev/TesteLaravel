<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controllerget extends Controller
{
    public function returnJson()
    {
        return response()->json([
            'funcionando' => true
        ]);

    }

    public function returnBody(Request $request)
    {
        $input = $request->all();
        dd($input);
    }
}