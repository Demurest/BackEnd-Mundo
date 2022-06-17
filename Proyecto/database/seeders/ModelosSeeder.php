<?php

namespace Database\Seeders;

use App\Models\Modelos;
use Illuminate\Database\Seeder;

class ModelosSeeder extends Seeder
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
            ['mar_id'=>'1','nombre_modelo'=>'SE'],
           ['mar_id'=>'1','nombre_modelo'=>'13 Pro Max'],
           ['mar_id'=>'2','nombre_modelo'=>'11T Pro'],
           ['mar_id'=>'3','nombre_modelo'=>'Mate 20 pro'],
           ['mar_id'=>'3','nombre_modelo'=>'Mate 10 pro'],
           ['mar_id'=>'4','nombre_modelo'=>'S22 Ultra.'],
           ['mar_id'=>'4','nombre_modelo'=>'A53 5G.'],
        ];

        Modelos::insert($datos);
    }
}
