<?php

namespace Database\Seeders;

use App\Models\Marcas;
use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
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
            ['nombre_marca'=>'Apple'],
           ['nombre_marca'=>'Xiaomi'],
           ['nombre_marca'=>'Huawei'],
           ['nombre_marca'=>'Samsung']
        ];

        Marcas::insert($datos);
    }
}
