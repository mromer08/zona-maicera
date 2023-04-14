<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ScoreController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/game', [GameController::class, 'index'])
->middleware(['auth', 'verified'])
->name('game.index');

Route::get('/questions/{question}', [QuestionController::class, 'show'])
->middleware(['auth', 'verified'])
->name('questions.show');

Route::post('/game/next', [QuestionController::class, 'showNextQuestion'])
->middleware(['auth', 'verified'])
->name('game.next');

Route::get('/scores', [ScoreController::class, 'index'])
->middleware(['auth', 'verified'])
->name('scores.index');

Route::post('/scores', [ScoreController::class, 'store'])
->middleware(['auth', 'verified'])
->name('scores.store');

require __DIR__.'/auth.php';
