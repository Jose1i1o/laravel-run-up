<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;


class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Course::factory(50)->create(); // This is the best option but can be called at databaseSeeder --> Laravel8 recommendation

        // The commented text below is the option 1, filling the content directly here. But we can better use factories and the faker method;
        // $course = new Course();

        // $course->name = "Laravel";
        // $course->description = "The best PHP framework";
        // $course->category = "Software development";

        // $course->save();

        // $course2 = new Course();

        // $course2->name = "Laravel";
        // $course2->description = "The best PHP framework";
        // $course2->category = "Software development";

        // $course2->save();

        // $course3 = new Course();

        // $course3->name = "Laravel";
        // $course3->description = "The best PHP framework";
        // $course3->category = "Software development";

        // $course3->save();
    }
}
