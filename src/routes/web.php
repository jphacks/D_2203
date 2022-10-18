<?php

use App\Models\Judgement;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\CourseController;
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

Route::get('/courses', [CourseController::class, 'index']);

//それぞれのコースのホームページへのルーティング
Route::get('/courses/{course}',  [CourseController::class, 'show'])->middleware(['auth']);

//それぞれのコースのステージ別ページへのルーティング
Route::get('/courses/{course}/{course2}', function($slug,$slug2){
    return view("courses.{$slug}.{$slug2}");
})->middleware(['auth'])->middleware('clear');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
