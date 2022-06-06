<?php

namespace Database\Factories;

use App\Models\Peraturan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeraturanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Peraturan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'no_peraturan' => $this->faker->numberBetween('1','20'),
            'tentang' => $this->faker->sentence(),
            'tgl_ditetapkan' => $this->faker->datetime(),
            'tgl_diundangkan' => $this->faker->datetime(),
        ];
    }
}
