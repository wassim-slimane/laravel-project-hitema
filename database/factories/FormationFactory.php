<?php

namespace Database\Factories;

use App\Models\Formation;
use Illuminate\Database\Eloquent\Factories\Factory;

class FormationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Formation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->numberBetween(1, 4),
            'title' => $this->faker->name(),
            'description' => $this->faker->text(),
            'presentation' => $this->faker->text(),
            'price' => $this->faker->numberBetween(100, 1000),
            'category_id' => $this->faker->numberBetween(1, 3),
            'publicationStatus' => 1,
        ];
    }
}
