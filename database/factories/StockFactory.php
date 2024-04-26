<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Stock;

class StockFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stock::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'stock' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'make' => $this->faker->numberBetween(-10000, 10000),
            'model' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'year' => $this->faker->numberBetween(-10000, 10000),
            'fob' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'currency' => $this->faker->regexify('[A-Za-z0-9]{1}'),
            'mileage' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'engine' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'doors' => $this->faker->regexify('[A-Za-z0-9]{4}'),
            'transmission' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'body_type' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'fuel' => $this->faker->regexify('[A-Za-z0-9]{10}'),
            'category_id' => $this->faker->numberBetween(-10000, 10000),
            'extras' => $this->faker->text(),
            'buy_link' => $this->faker->text(),
        ];
    }
}
