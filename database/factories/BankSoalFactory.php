<?php

namespace Database\Factories;

use App\Models\BankSoal;
use App\Models\Peraturan;
use Illuminate\Database\Eloquent\Factories\Factory;


class BankSoalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BankSoal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'peraturan_id' => Peraturan::inRandomOrder()->first()->id,
            'soal' => $this->faker->sentence(),
            'pil_A' => $this->faker->word(),
            'pil_B' => $this->faker->word(),
            'pil_C' => $this->faker->word(),
            'pil_D' => $this->faker->word(),
            'pil_E' => $this->faker->word(),
            'kunci' => $this->faker->randomElement(['A','B','C','D','E'])
        ];
    }
}
