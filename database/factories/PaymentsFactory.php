<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Payments;

class PaymentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Payments::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_account' => $this->faker->numberBetween(-10000, 10000),
            'date' => $this->faker->date(),
            'amount' => $this->faker->regexify('[A-Za-z0-9]{20}'),
        ];
    }
}
