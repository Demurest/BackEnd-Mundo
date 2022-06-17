<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modelos;

class ModelosController extends Controller
{
    //
    public function index()
    {
        $query= Modelos::select("id as value","nombre_modelo as label")
        ->get();

        return  response()->json($query);
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
