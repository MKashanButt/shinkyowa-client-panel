<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CustomerAccounts;

class CustomerAccountsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerAccounts::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'customer_id' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'customer_name' => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'customer_email' => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'password' => $this->faker->password(),
        ];
    }
}
