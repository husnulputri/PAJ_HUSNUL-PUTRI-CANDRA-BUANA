<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoterController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/hai', function () {
    return 'Hello World';
});

Route::get('/about', function () {
    return view('about');
 });

Route::get('/servis', function () {
    return view('servis');

});



Route::get('/vote', [VoterController::class, 'viewVoter']);


