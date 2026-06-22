<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companyName = $this->faker->company;
        $slug = strtolower(preg_replace('/[^A-Za-z0-9]/', '', $companyName));

        return [
            'name' => $this->faker->name . ' Sdn Bhd',
            'email' => 'info@' . $slug . '.com.my',             'logo'=> null,
            'website' => $this->faker->url,
        ];
    }
}
