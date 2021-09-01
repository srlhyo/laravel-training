<?php

namespace Database\Factories;

use App\Models\UserOrganisation;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserOrganisationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserOrganisation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => rand(1, 10),
            'organisation_id' => rand(1, 10)
        ];
    }
}
