<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ToolsController;
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

Route::redirect('/', '/home');

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', [HomeController::class, 'index'])->name('Home');

Route::get('/tools', [ToolsController::class, 'index'])->name('tools');
Route::get('/create', [ToolsController::class, 'create'])->name("create");
Route::post('/create', [ToolsController::class, 'store'])->name("store");
Route::get('/delete/{id}', [ToolsController::class, 'destroy'])->name('delete');
Route::get('/edit/{id}', [ToolsController::class,'edit'])->name('edit');
Route::put('/update/{id}', [ToolsController::class,'update'])->name('update');


Route::get('/faq', [FaqController::class, 'index'])->name('Faq');
Route::get('/aboutus', [AboutUsController::class, 'index'])->name('AboutUs');
Route::get('/contact', [ContactController::class, 'index'])->name('Contact');

Route::get('/dashboard', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
