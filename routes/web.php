<?php

use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vehiculos', [App\Http\Controllers\VehicleController::class, 'index'])->name('vehicles.list');
Route::get('/vehiculos-nuevo', [App\Http\Controllers\VehicleController::class, 'create'])->name('vehicles.create');
Route::post('vehiculos-guardar/', [App\Http\Controllers\VehicleController::class, 'store'])->name('vehicles.store');
Route::get('/vehiculos-editar/{id}', [App\Http\Controllers\VehicleController::class, 'edit'])->name('vehicles.edit');
Route::post('vehiculos-actualizar/', [App\Http\Controllers\VehicleController::class, 'update'])->name('vehicles.update');
Route::post('vehiculos-borrar/', [App\Http\Controllers\VehicleController::class, 'delete'])->name('vehicles.delete');

Route::get('/marcas', [App\Http\Controllers\MarkController::class, 'index'])->name('marks.list');
Route::get('/marcas-nuevo', [App\Http\Controllers\MarkController::class, 'create'])->name('marks.create');
Route::post('marcas-guardar/', [App\Http\Controllers\MarkController::class, 'store'])->name('marks.store');
Route::get('/marcas-editar/{id}', [App\Http\Controllers\MarkController::class, 'edit'])->name('marks.edit');
Route::post('marcas-actualizar/', [App\Http\Controllers\MarkController::class, 'update'])->name('marks.update');
Route::post('marcas-borrar/', [App\Http\Controllers\MarkController::class, 'delete'])->name('marks.delete');

Route::get('/modelos', [App\Http\Controllers\ModelController::class, 'index'])->name('models.list');
Route::get('/modelos-nuevo', [App\Http\Controllers\ModelController::class, 'create'])->name('models.create');
Route::post('modelos-guardar/', [App\Http\Controllers\ModelController::class, 'store'])->name('models.store');
Route::get('/modelos-editar/{id}', [App\Http\Controllers\ModelController::class, 'edit'])->name('models.edit');
Route::post('modelos-actualzar/', [App\Http\Controllers\ModelController::class, 'update'])->name('models.update');
Route::post('modelos-borrar/', [App\Http\Controllers\ModelController::class, 'delete'])->name('models.delete');

Route::get('/tipo-motor', [App\Http\Controllers\MotorTypeController::class, 'index'])->name('motors.list');
Route::get('/tipo-motor-nuevo', [App\Http\Controllers\MotorTypeController::class, 'create'])->name('motors.create');
Route::post('tipo-motor-guardar/', [App\Http\Controllers\MotorTypeController::class, 'store'])->name('motors.store');
Route::get('/tipo-motor-nuevo/{id}', [App\Http\Controllers\MotorTypeController::class, 'edit'])->name('motors.edit');
Route::post('tipo-motor-actualizar/', [App\Http\Controllers\MotorTypeController::class, 'update'])->name('motors.update');
Route::post('tipo-motor-borrar/', [App\Http\Controllers\MotorTypeController::class, 'delete'])->name('motors.delete');

Route::get('/tipo-traccion', [App\Http\Controllers\TractionController::class, 'index'])->name('traction.list');
Route::get('/tipo-traccion-nuevo', [App\Http\Controllers\TractionController::class, 'create'])->name('traction.create');
Route::post('tipo-traccion-guardar/', [App\Http\Controllers\TractionController::class, 'store'])->name('traction.store');
Route::get('/tipo-traccion-editar/{id}', [App\Http\Controllers\TractionController::class, 'edit'])->name('traction.edit');
Route::post('tipo-traccion-actualizar/', [App\Http\Controllers\TractionController::class, 'update'])->name('traction.update');
Route::post('tipo-traccion-borrar/', [App\Http\Controllers\TractionController::class, 'delete'])->name('traction.delete');

Route::get('/years', [App\Http\Controllers\VehicleYearController::class, 'index'])->name('years.list');
Route::get('/years-nuevo', [App\Http\Controllers\VehicleYearController::class, 'create'])->name('years.create');
Route::post('years-guardar/', [App\Http\Controllers\VehicleYearController::class, 'store'])->name('years.store');
Route::get('/years-editar/{id}', [App\Http\Controllers\VehicleYearController::class, 'edit'])->name('years.edit');
Route::post('years-actualizar/', [App\Http\Controllers\VehicleYearController::class, 'update'])->name('years.update');
Route::post('years-borrar/', [App\Http\Controllers\VehicleYearController::class, 'delete'])->name('years.delete');

Route::get('/plazas', [App\Http\Controllers\PlacesController::class, 'index'])->name('places.list');
Route::get('/plazas-nuevo', [App\Http\Controllers\PlacesController::class, 'create'])->name('places.create');
Route::post('plazas-guardar/', [App\Http\Controllers\PlacesController::class, 'store'])->name('places.store');
Route::get('/plazas-editar/{id}', [App\Http\Controllers\PlacesController::class, 'edit'])->name('places.edit');
Route::post('plazas-actualizar/', [App\Http\Controllers\PlacesController::class, 'update'])->name('places.update');
Route::post('plazas-borrar/', [App\Http\Controllers\PlacesController::class, 'delete'])->name('places.delete');

Route::get('/carrocerias', [App\Http\Controllers\BodyWorkController::class, 'index'])->name('bodywork.list');
Route::get('/carrocerias-nuevo', [App\Http\Controllers\BodyWorkController::class, 'create'])->name('bodywork.create');
Route::post('carrocerias-guardar/', [App\Http\Controllers\BodyWorkController::class, 'store'])->name('bodywork.store');
Route::get('/carrocerias-actualizar/{id}', [App\Http\Controllers\BodyWorkController::class, 'edit'])->name('bodywork.edit');
Route::post('carrocerias-update/', [App\Http\Controllers\BodyWorkController::class, 'update'])->name('bodywork.update');
Route::post('carrocerias-borrar/', [App\Http\Controllers\BodyWorkController::class, 'delete'])->name('bodywork.delete');

Route::get('/cajas-cambios', [App\Http\Controllers\GearboxController::class, 'index'])->name('gearboxes.list');
Route::get('/cajas-cambios-nuevo', [App\Http\Controllers\GearboxController::class, 'create'])->name('gearboxes.create');
Route::post('cajas-cambios-guardar/', [App\Http\Controllers\GearboxController::class, 'store'])->name('gearboxes.store');
Route::get('/cajas-cambios-actualizar/{id}', [App\Http\Controllers\GearboxController::class, 'edit'])->name('gearboxes.edit');
Route::post('cajas-cambios-actualizar/', [App\Http\Controllers\GearboxController::class, 'update'])->name('gearboxes.update');
Route::post('cajas-cambios-borrar/', [App\Http\Controllers\GearboxController::class, 'delete'])->name('gearboxes.delete');

Route::get('/series', [App\Http\Controllers\SerieController::class, 'index'])->name('series.list');
Route::get('/series-nuevo', [App\Http\Controllers\SerieController::class, 'create'])->name('series.create');
Route::post('series-guardar/', [App\Http\Controllers\SerieController::class, 'store'])->name('series.store');
Route::get('/series-editar/{id}', [App\Http\Controllers\SerieController::class, 'edit'])->name('series.edit');
Route::post('series-actualizar/', [App\Http\Controllers\SerieController::class, 'update'])->name('series.update');
Route::post('series-borrar/', [App\Http\Controllers\SerieController::class, 'delete'])->name('series.delete');