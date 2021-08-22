<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Expertise;

class ExpertiseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expertise::factory(10)->create();
    }
}
