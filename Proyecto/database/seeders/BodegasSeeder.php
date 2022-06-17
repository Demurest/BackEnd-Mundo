<?php

namespace Database\Seeders;

use App\Models\Bodegas;
use Illuminate\Database\Seeder;

class BodegasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       $datos = [
        ['nombre_bodega'=>'Santiago'],
        ['nombre_bodega'=>'Concepcion'],
       ['nombre_bodega'=>'Lota'],

    ];

     Bodegas::insert($datos);
    }
}
