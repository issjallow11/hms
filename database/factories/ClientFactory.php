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
            'clinic_no' => $this->faker->name,
            'first_name' => $this->faker->first_name,
            'middle_name' => $this->faker->middle_name,
            'last_name' => $this->faker->last_name,
            'address' => $this->faker->address,
            'date_of_birth' => $this->faker->date_of_birth,
            'age' => $this->faker->age,
            'age' => $this->faker->age,
            'marital_status' => $this->faker->marital_status,
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
