<?php

namespace App\Http\Controllers;

use App\Models\Dispositivos;
use Illuminate\Http\Request;

class DispositivosController extends Controller
{
    //

    public function index(Request $request)
    {


        $query = Dispositivos::join('modelos','modelos.id','=','dispositivos.mod_id')
        ->join('bodegas','dispositivos.bod_id','=','bodegas.id')
        ->join('marcas','marcas.id','=','modelos.mar_id')
        ->select(
            "dispositivos.id as id",
            "dispositivos.nombre_dispo",
            "modelos.nombre_modelo",
            "marcas.nombre_marca",
            "dispositivos.id as dis_id ",
            "bodegas.id as bodega_id",
            "marcas.id as marca_id",
            "modelos.id as mod_id")
        ->when(isset($request->bodId), function ($query)use($request){
            return $query->where(
            'bodegas.id','=',$request->bodId
            );
        })
        ->when(isset($request->marId), function ($query) use($request){
            return $query->where(
                'marcas.id','=', $request->marId
            );
        })
        ->when(isset($request->modId), function ($query) use($request){
            return $query->where(
                'modelos.id','=', $request->modId
            );
        })
        ->get();


        return response()->json($query);
    }
 
    public function show($id)
    {
        $dispositivo = Dispositivos::find($id);
        return $dispositivo;
    }

    public function store(Request $request)
    {
        $dispositivo = new Dispositivos();
        $dispositivo-> mod_id = $request->mod_id;
        $dispositivo-> bod_id = $request->bod_id;
        $dispositivo-> nombre_dispo = $request->nombre_dispo;

        $dispositivo->save();
        return response()->json();
    }

    public function update(Request $request, $id)
    {
        $dispositivo = Dispositivos::findOrFail($request->id);
        $dispositivo-> mod_id = $request->mod_id;
        $dispositivo-> bod_id = $request->bod_id;
        $dispositivo-> nombre_dispo = $request->nombre_dispo;

        $dispositivo->save();
        return response()->json();
    }

    public function destroy($id)
    {
        $dispositivo = Dispositivos::destroy($id);
        return response()->json();
    }
}
