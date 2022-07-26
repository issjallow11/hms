<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;

class ClientFactory extends Factory
{
  protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'clinic_no' => 'crh1',
            'first_name' => $this->faker->name,
            'middle_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'address' => $this->faker->name,
            'date_of_birth' => $this->faker->dateTime,
            // 'age' => $this->faker->random,
            // 'age' => $this->faker->age,
            'marital_status' => $this->faker->name,
            'nationality' => $this->faker->nationality,
            'sexual_oritentation' => $this->faker->sexual_oritentation,
            'medical_history' => $this->faker->medical_history,
            'medications' => $this->faker->medications,
            'allergies' => $this->faker->allergies,
            'ethnicity' => $this->faker->ethnicity,
            'telephone_1' => $this->faker->telephone_1,
            'telephone_2' => $this->faker->telephone_2,
            'email' => $this->faker->unique()->safeEmail,
            'preferred_form_of_contact' => $this->faker->preferred_form_of_contact,
            'education' => $this->faker->education,
            'education_level' => $this->faker->education_level,
            'occupation' => $this->faker->occupation,
        ];
    }
}
