<?php

namespace Database\Factories;

use App\Models\Element;
use Illuminate\Database\Eloquent\Factories\Factory;

class ElementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Element::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'page' => 'index',
            'position'=>'gallery',
            'title' => $this->faker->realText(10),
            'subtitle' => $this->faker->realText(10),
            'pic' => $this->faker->imageUrl,
            'enabled' => rand(0,1),
            'isShowTitle' => rand(0,1)
        ];
    }
}
