<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/clear-cache', function() {
//      \Artisan::call('optimize:clear');
//     return 'Caches vidés avec succès !';
// });


// Route::get('/run-storage-link', function () {
//     \Artisan::call('storage:link');
//     return 'Lien symbolique créé avec succès !';
// });

/////lien pour le stockde fichi
// Route::get('/storage/{path}', function ($path) {
//     $file = Storage::disk('public')->path($path);

//     if (!file_exists($file)) {
//         abort(404);
//     }

//     return Response::file($file);
// })->where('path', '.*');

Route::get('/', [PagesController::class, 'get_index'])->name('index');
Route::get('/A-propos', [PagesController::class, 'get_a_propos'])->name('A-Propos');
Route::get('/Filieres', [PagesController::class, 'get_filieres'])->name('Filieres');
Route::get('/Tarifs', [PagesController::class, 'get_tarifs'])->name('Tarifs');
Route::get('/Formations', [PagesController::class, 'get_formations'])->name('Formations');
Route::get('/Contact', [PagesController::class, 'get_contact'])->name('Contact');

Route::post('/contact/message', [PagesController::class, 'post_contact_message'])->name('Contact-Message');
