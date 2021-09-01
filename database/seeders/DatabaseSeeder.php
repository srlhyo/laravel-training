<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            \App\Models\User::factory(10)->create(),
            \App\Models\Organisation::factory(10)->create(),
            \App\Models\UserOrganisation::factory(10)->create(),
        ]);
    }
}
