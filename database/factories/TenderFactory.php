<?php

namespace Database\Factories;


use App\Models\Method;
use App\Models\Tender;
use Illuminate\Database\Eloquent\Factories\Factory;

class TenderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tender::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tender_id' => $this->faker->unique()->numberBetween(200000, 5000000),
            'description' => $this->faker->text(150),
            'document_price' => $this->faker->randomDigit,
            'date' => $this->faker->dateTimeBetween('-1 days', '+30 days'),
            'tender_security' => $this->faker->randomDigit,
            'department_id' => $this->faker->numberBetween(1, 10),
            'method_id' => $this->faker->numberBetween(1, 10),
            'location_id' => $this->faker->numberBetween(1, 10),
            'liquid' => $this->faker->numberBetween(1000, 100000),

        ];
    }
}
