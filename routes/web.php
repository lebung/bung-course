<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Courses\HomeController;
use App\Http\Controllers\Courses\CoursesController;
use App\Http\Controllers\Courses\CourseController;
use App\Http\Controllers\Courses\AboutController;
use App\Http\Controllers\Courses\PackageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::prefix('/')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('index');
    
});
Route::prefix('courses')->name('courses')->group(function () {
    Route::get('', [CoursesController::class, 'index'])->name('courses');
});
Route::prefix('course-detail')->name('course')->group(function () {
    Route::get('', [CourseController::class, 'index'])->name('course');
});
Route::prefix('about')->name('about')->group(function () {
    Route::get('', [AboutController::class, 'index'])->name('about');
});
Route::prefix('package')->name('package')->group(function () {
    Route::get('', [PackageController::class, 'index'])->name('package');
});
