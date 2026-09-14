<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::prefix('dashboard')->name('dashboard.')->group(function () {
	Route::get('/mahasiswa/{nrp}', [HomeController::class, 'profile'])
		->where('nrp', '[0-9]{10}')
		->name('mahasiswa.profile');

	Route::get('/hitung-ipk/{ip1}/{ip2}', [HomeController::class, 'calculateGpa'])
		->where([
			'ip1' => '(?:[0-3](?:\.[0-9]{1,2})?|4(?:\.0{1,2})?)',
			'ip2' => '(?:[0-3](?:\.[0-9]{1,2})?|4(?:\.0{1,2})?)',
		])
		->name('gpa.calculate');
});

Route::get('/agent/{tema?}', [HomeController::class, 'agent'])->name('agent.idea');

Route::fallback(function () {
	return response()->view('errors.404', [], 404);
});
