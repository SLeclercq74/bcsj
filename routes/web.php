<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingRoomController;
use App\Http\Controllers\CharteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Manager\GameController;
 use App\Http\Controllers\M_TeamController;
use App\Http\Controllers\AdminController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/manager/teams', [M_TeamController::class, 'Index'])->name('manager.team-list');
    Route::get('/manager/games', [GameController::class, 'Index'])->name('manager.game-list');
});

Route::get('/charte',[CharteController::class, 'Index'])->name('charte');
Route::get('/training',[TrainingController::class, 'Index'])->name('training');
Route::get('/club',[ClubController::class, 'Index'])->name('club');
Route::get('/photos',[PhotosController::class, 'Index'])->name('photos');
Route::get('/results',[ResultController::class, 'Index'])->name('results');
Route::get('/subscription',[SubscriptionController::class, 'Index'])->name('subscription');
Route::get('/contact',[ContactController::class, 'Index'])->name('contact');
Route::get('/teams',[TeamsController::class, 'Index'])->name('teams');
Route::get('/',[HomeController::class, 'Index'])->name('home');

require __DIR__.'/auth.php';
