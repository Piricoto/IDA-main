<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MensajeController;
use App\Http\Controllers\DragDropController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PropiedadesController;

// Route::get('/', function () {
//     return redirect('/login');
// });
Route::get('/', function () {
    return view('login.main');
});


// Ruta para mostrar la vista de login

Route::get('main', [LoginController::class, 'main'])->name('main');
Route::get('portal', [LoginController::class, 'index'])->name('portal');

Route::resource('users', UserController::class)->names('admin.user');



Route::resource('propiedades', PropiedadesController::class);
Route::PUT('updateprop/{id}', [PropiedadesController::class, 'updateprop'])->name('updateprop');
Route::resource('imagenes', ImagenesController::class);
Route::resource('bids', BidController::class);
Route::resource('mensajes', MensajeController::class);

Route::resource('users', UserController::class);

Route::get('drag-drop-form', [DragDropController::class, 'form']);
Route::post('uploadFiles', [DragDropController::class, 'uploadFiles']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('dashboard', DashboardController::class)->names([
        'index'   => 'dashboard',
        'create'  => 'dashboard.create',
        'store'   => 'dashboard.store',
        'show'    => 'dashboard.show',
        'edit'    => 'dashboard.edit',
        'update'  => 'dashboard.update',
        'destroy' => 'dashboard.destroy',
    ]);;
    // Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

});
