<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return "Bienvenido a la página principal";
});

Route::get('/cursos', function () {
    return "Welcome to the courses page";
});

Route::get('courses/create', function () {
    return "In this page you will be able to create a new course.";
});

Route::get('courses/{course}', function ($course) { // Takes the url parameter
    return "Welcome to this course: $course";
});

Route::get('courses/{course}/{category?}', function ($course, $category = null) { // Takes the url parameter
    if ($category) {
        return "Welcome to the $course from the $category category";
    } else {
        return "Welcome to the $course";
    }
});
