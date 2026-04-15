<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public routes
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});
// Home → pizzas index
// Route::get('/', [PizzaController::class, 'index']);

// Test route
Route::get('/test', function () {
    return view('test');
});

Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);
Route::get('/pizzas', [PizzaController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Auth routes (Laravel Breeze)
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';

/*
|--------------------------------------------------------------------------
| Authenticated routes
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /*
    |--------------------------------------------------------------------------
    | Pizza CRUD (authenticated)
    |--------------------------------------------------------------------------
    */

    Route::get('/pizzas/create', [PizzaController::class, 'create']);
    Route::post('/pizzas', [PizzaController::class, 'store']);
    Route::get('/pizzas/{pizza}/edit', [PizzaController::class, 'edit']);
    Route::put('/pizzas/{pizza}', [PizzaController::class, 'update']);
    Route::delete('/pizzas/{pizza}', [PizzaController::class, 'destroy']);

    // Admin panel
   Route::get('/admin/pizzas', [PizzaController::class, 'admin'])
    ->name('admin.pizzas');
    Route::get('/admin/messages', [ContactController::class, 'index'])
    ->middleware('auth')
    ->name('admin.messages');
});