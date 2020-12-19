<?php

namespace Database\Factories;

use App\Models\Questionnaire;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class QuestionnaireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Questionnaire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => 2,
            'style_id' => 2,
            'user_id' => 4,
            'project_name' => $this->faker->name,
            'project_description' => $this->faker->paragraph(4),
            'project_address'=> $this->faker->address,
            'budget_range' => '2000-3000$',
        ];
    }
}
