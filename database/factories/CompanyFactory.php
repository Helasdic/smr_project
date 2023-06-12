<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // create company with faker
            'company_name' => $this->faker->company,
            'company_address' => $this->faker->address,
            'join_date' => $this->faker->date(),
            'jobdesk' => $this->faker->randomElement(['PPH21', 'PPN', 'PPH25']),
        ];
    }
}
