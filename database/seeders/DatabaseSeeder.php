<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
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
        User::factory(10)->create();

        // $this->call(CourseSeeder::class); // We can call the seeder here or directly as per below. This calls the new created CourseSeeder doc
        Course::factory(50)->create();
    }
}
