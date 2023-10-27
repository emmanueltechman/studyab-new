<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Fee;

class FeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Fee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'application_fee' => $this->faker->randomFloat(2, 0, 99999999.99),
            'living_expenses' => $this->faker->randomFloat(2, 0, 99999999.99),
            'local_tuition' => $this->faker->randomFloat(2, 0, 99999999.99),
            'int_tuition' => $this->faker->randomFloat(2, 0, 99999999.99),
        ];
    }
}
