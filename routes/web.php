<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::middleware(['auth'])->group(function () {
    // Afficher le tableau de bord avec le formulaire
    Route::get('/dashboard', [UserController::class, 'showForm'])->name('dashboard');
    
    // Enregistrer les informations de l'utilisateur
    Route::post('/user/store', [UserController::class, 'store'])->name('user.store');
});


Route::get('/jobs/sector/{sector}', [JobController::class, 'getJobsBySector'])->name('jobs.getBySector');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{id}', [JobController::class, 'show'])->name('jobs.show');
Route::get('/jobs/{id}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{id}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{id}', [JobController::class, 'destroy'])->name('jobs.destroy');
Route::get('/jobs/sector/{sector}', [JobController::class, 'getJobsBySector'])->name('jobs.getBySector');
