<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function show($course)
    {
        // return view('courses.show', ['c' => $course]); // option A
        return view('courses.show', compact('course')); // option B. When the name is equal to its variable
    }
}
