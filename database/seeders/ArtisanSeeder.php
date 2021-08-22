<?php

namespace Database\Seeders;

use App\Models\Artisan;
use Illuminate\Database\Seeder;

class ArtisanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artisan::factory(10)->create();
    }
}
