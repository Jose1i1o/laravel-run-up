<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        return "Welcome to the courses page";
    }

    public function create()
    {
        return "In this page you will be able to create a new course.";
    }

    public function show($course)
    {
        return "Welcome to this course: $course";
    }
}
