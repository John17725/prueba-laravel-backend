<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vehiculos', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.list');
Route::get('/vehiculos-nuevo', [App\Http\Controllers\VehicleController::class, 'create'])->name('vehicles.create');
Route::post('vehiculos-guardar/', [App\Http\Controllers\VehicleController::class, 'store'])->name('vehicles.store');

Route::get('/marcas', [App\Http\Controllers\MarkController::class, 'index'])->name('marks.list');
Route::get('/marcas-nuevo', [App\Http\Controllers\MarkController::class, 'create'])->name('marks.create');
Route::post('marcas-guardar/', [App\Http\Controllers\MarkController::class, 'store'])->name('marks.store');

Route::get('/modelos', [App\Http\Controllers\ModelController::class, 'index'])->name('models.list');
Route::get('/modelos-nuevo', [App\Http\Controllers\ModelController::class, 'create'])->name('models.create');
Route::post('modelos-guardar/', [App\Http\Controllers\ModelController::class, 'store'])->name('models.store');

Route::get('/tipo-motor', [App\Http\Controllers\MotorTypeController::class, 'index'])->name('motors.list');
Route::get('/tipo-motor-nuevo', [App\Http\Controllers\MotorTypeController::class, 'create'])->name('motors.create');
Route::post('tipo-motor-guardar/', [App\Http\Controllers\MotorTypeController::class, 'store'])->name('motors.store');

Route::get('/tipo-traccion', [App\Http\Controllers\TractionController::class, 'index'])->name('traction.list');
Route::get('/tipo-traccion-nuevo', [App\Http\Controllers\TractionController::class, 'create'])->name('traction.create');
Route::post('tipo-traccion-guardar/', [App\Http\Controllers\TractionController::class, 'store'])->name('traction.store');

Route::get('/years', [App\Http\Controllers\VehicleYearController::class, 'index'])->name('years.list');
Route::get('/years-nuevo', [App\Http\Controllers\VehicleYearController::class, 'create'])->name('years.create');
Route::post('years-guardar/', [App\Http\Controllers\VehicleYearController::class, 'store'])->name('years.store');

Route::get('/plazas', [App\Http\Controllers\PlacesController::class, 'index'])->name('places.list');
Route::get('/plazas-nuevo', [App\Http\Controllers\PlacesController::class, 'create'])->name('places.create');
Route::post('plazas-guardar/', [App\Http\Controllers\PlacesController::class, 'store'])->name('places.store');


Route::get('/carrocerias', [App\Http\Controllers\BodyWorkController::class, 'index'])->name('bodywork.list');
Route::get('/carrocerias-nuevo', [App\Http\Controllers\BodyWorkController::class, 'create'])->name('bodywork.create');
Route::post('carrocerias-guardar/', [App\Http\Controllers\BodyWorkController::class, 'store'])->name('bodywork.store');

Route::get('/cajas-cambios', [App\Http\Controllers\GearboxController::class, 'index'])->name('gearboxes.list');
Route::get('/cajas-cambios-nuevo', [App\Http\Controllers\GearboxController::class, 'create'])->name('gearboxes.create');
Route::post('cajas-cambios-guardar/', [App\Http\Controllers\GearboxController::class, 'store'])->name('gearboxes.store');

Route::get('/series', [App\Http\Controllers\SerieController::class, 'index'])->name('series.list');
Route::get('/series-nuevo', [App\Http\Controllers\SerieController::class, 'create'])->name('series.create');
Route::post('series-guardar/', [App\Http\Controllers\SerieController::class, 'store'])->name('series.store');
