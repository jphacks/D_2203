<?php

use App\Http\Controllers\ClearController;
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



Route::get('/', function(){
    return view('top');
});
Route::get('/courses', [CourseController::class, 'index']);

//それぞれのコースのホームページへのルーティング
Route::get('/courses/{course}',  [CourseController::class, 'show'])->middleware(['auth']);

//それぞれのコースのステージ別ページへのルーティング
Route::get('/courses/{course}/{course2}', [CourseController::class, 'detail'])->middleware(['auth'])->middleware('clear');

Route::post('/courses/{course}/{course2}/update', [ClearController::class, 'clear']);

require __DIR__.'/auth.php';
