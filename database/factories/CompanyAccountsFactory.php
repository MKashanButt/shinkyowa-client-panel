<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\CompanyAccounts;

class CompanyAccountsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CompanyAccounts::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(),
            'description' => $this->faker->text(),
            'debit' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'credit' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'balance' => $this->faker->regexify('[A-Za-z0-9]{10}'),
        ];
    }
}
