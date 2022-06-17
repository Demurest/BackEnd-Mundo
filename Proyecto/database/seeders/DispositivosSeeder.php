<?php

namespace Database\Seeders;

use App\Models\Dispositivos;
use Illuminate\Database\Seeder;

class DispositivosSeeder extends Seeder
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
            ['mod_id'=>'1','bod_id'=>'1','nombre_dispo'=>'iphone'],
           ['mod_id'=>'2','bod_id'=>'1','nombre_dispo'=>'iPhone '],

           ['mod_id'=>'3','bod_id'=>'1','nombre_dispo'=>'Xiaomi'],

           ['mod_id'=>'4','bod_id'=>'3','nombre_dispo'=>'Huawei'],
           ['mod_id'=>'5','bod_id'=>'2','nombre_dispo'=>'Huawei'],

           ['mod_id'=>'6','bod_id'=>'2','nombre_dispo'=>'Galaxy'],
           ['mod_id'=>'7','bod_id'=>'3','nombre_dispo'=>'Galaxy'],
        ];

        Dispositivos::insert($datos);
    }
}
