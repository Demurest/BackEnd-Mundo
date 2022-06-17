<?php

namespace App\Http\Controllers;

use App\Models\Marcas;
use Illuminate\Http\Request;

class MarcasController extends Controller
{
    //

    public function index()
    {
        $query = Marcas::select('nombre_marca as label', 'id as value')
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
