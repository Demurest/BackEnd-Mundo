<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bodegas;

class BodegasController extends Controller
{
    //

    public function index()
    {

        $query = Bodegas::select('nombre_bodega as label','id as value')
        ->get();

        return response()->json($query);
    }
 
    public function show($id)
    {

    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function delete(Request $request, $id)
    {

    }
}
