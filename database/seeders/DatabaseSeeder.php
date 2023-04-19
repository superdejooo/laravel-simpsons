<?php

namespace Database\Seeders;

use App\Models\Simpsons;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Simpsons::factory(10)->create();
    }
}
