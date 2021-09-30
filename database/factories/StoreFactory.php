<?php

namespace Database\Factories;
use App\Store;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(Store::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'price' => $faker->numberBetween(500,10000),
        'desc' => $faker->paragraph,
        'pic_url' => $faker->imageUrl(640,480,'business',true),
        'enabled' => true
    ];
});
class StoreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
