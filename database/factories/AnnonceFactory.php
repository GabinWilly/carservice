<?php

namespace Database\Factories;

use App\Models\Annonce;
Use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnnonceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Annonce::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(6),
            'description' => $this->faker->sentence(12), 
        ];
    }
}
