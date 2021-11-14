<?php

namespace Database\Factories;

use App\Models\ChapterFormation;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChapterFormationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ChapterFormation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'chapter_id' => $this->faker->numberBetween(1,10),
            'formation_id' => $this->faker->numberBetween(1,10),
        ];
    }
}
