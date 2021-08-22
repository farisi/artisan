<?php

namespace Database\Factories;

use App\Models\Artisan;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArtisanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artisan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => Str::random(10),
            'lastname'=>Str::random(10),
            'mobile'=>'0812'.rand(100000, 999999)
        ];
    }
}
