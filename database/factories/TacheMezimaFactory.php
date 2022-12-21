<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TacheMezimaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nomTache'=> $this->faker->name(),
            'dureeTache'=>4,
            'statutTache'=>false,
            'tacheAnt'=>'1'
        ];
    }
}
