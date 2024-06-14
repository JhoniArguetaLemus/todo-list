<?php
use App\Http\Controllers\Lista_tareas;
use Illuminate\Support\Facades\Route;

Route::get('/', [Lista_tareas ::class, 'principal'])->name('home');
Route::post('/guardar_tarea', [Lista_tareas::class, 'guardar_tarea'])->name('tareas.guardar');

Route::get('/tareas/ver', [Lista_tareas::class, 'ver_tareas'])->name('tareas.ver');


Route::delete('/tareas/{id}', [Lista_tareas::class, 'eliminar_tarea'])->name('tareas.eliminar');

Route::get('/tareas_completadas', [Lista_tareas::class, 'tareas_completadas'])->name('tareas_completadas');

Route::delete('/tareas_completadas/{id}', [Lista_tareas::class, 'eliminar_tarea_completada'])->name('tarea_completada.eliminar');



