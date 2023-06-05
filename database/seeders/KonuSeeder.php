<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KonuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Konu::factory(20)->create();
    }
}
