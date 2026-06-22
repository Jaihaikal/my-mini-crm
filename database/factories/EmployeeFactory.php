<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 1. Generate the names first so we can reuse them for the email string
        $firstName = $this->faker->firstName;
        $lastName = $this->faker->lastName;

        // 2. Clean up names for the email (lowercase and remove spaces if any)
        $emailUser = strtolower($firstName . '.' . $lastName);
        // Remove any accidental special characters or spaces from names
        $emailUser = preg_replace('/[^a-z0-9.]/', '', $emailUser);

        // 3. Set up common Malaysian mobile prefixes (011, 012, 013, 014, 016, 017, 018, 019)
        $malaysianPrefixes = ['011', '012', '013', '014', '016', '017', '018', '019'];
        $prefix = $this->faker->randomElement($malaysianPrefixes);

        // 011 numbers usually have 8 digits after the prefix, others typically have 7
        $digitsCount = ($prefix === '011') ? 8 : 7;
        $phoneNumber = $prefix . '-' . $this->faker->numerify(str_repeat('#', $digitsCount));
        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'company_id' => Company::factory(),
            'email' => $emailUser . '@example.com',
            'phone' => $phoneNumber,
            //
        ];
    }
}
