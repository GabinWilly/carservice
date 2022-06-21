<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_user' => $this->faker->sentence(5),
            'marque_cars' => $this->faker->sentence(5),
            'reservée' => $this->faker->numberBetween(0,1),
        ];
    }
}
