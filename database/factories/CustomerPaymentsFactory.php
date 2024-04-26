<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerPayments;

class CustomerPaymentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerPayments::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'customer_account' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'vehicle_name' => $this->faker->regexify('[A-Za-z0-9]{30}'),
            'chassis' => $this->faker->regexify('[A-Za-z0-9]{30}'),
            'c&f' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'payment_recieved_date' => $this->faker->date(),
            'balance' => $this->faker->regexify('[A-Za-z0-9]{10}'),
        ];
    }
}
