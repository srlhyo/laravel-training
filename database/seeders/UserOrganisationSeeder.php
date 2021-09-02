<?php

namespace Database\Seeders;

use App\Models\UserOrganisation;
use Illuminate\Database\Seeder;

class UserOrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserOrganisation::factory(10)->create();
    }
}
