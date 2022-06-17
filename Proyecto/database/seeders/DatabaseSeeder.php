<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(MarcasSeeder::class);
        $this->call(ModelosSeeder::class);
        $this->call(BodegasSeeder::class);
        $this->call(DispositivosSeeder::class);
    }
}
