<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CoursesController;

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

Route::get('/', HomeController::class);

Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');

Route::get('courses/create', [CoursesController::class, 'create'])->name('courses.create');

Route::post('courses', [CoursesController::class, 'store'])->name('courses.store');

Route::get('courses/{course}', [CoursesController::class, 'show'])->name('courses.show');
