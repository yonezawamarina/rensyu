<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\CalculateController;
use App\Http\Controllers\PostTestController;

// use App\Http\Controllers\DogfoodController;

// use App\Models\Dogfood;

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




// チャートデータ取得処理

Route::get('/chartjs', function () {
    return view('chartjs');
});
Route::get('/chartjs', function () {
    return view('chartjs');
});

// Route::get('/chartjs', function () {
//     return view('chartjs');
// });

// Route::get('/calculate', 'CalculateController@getcalc');
// Route::get('/calculate', [CalculateController::class, 'getcalc'])->name('calculate.getcalc');



Route::get('/inputForm',[PostTestController::class,'inputForm'])->name('post.inputform');
Route::post('/formPost',[PostTestController::class,'formPost'])->name('post.formpost');


// Route::get('/inputForm', function () {
//     return view('inputForm');
// });



Route::get('/calculate', function () {
    return view('calculate/num');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
