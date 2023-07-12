<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LocaleController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});





/*
 * Global Routes
 *
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages
Route::get('lang/{lang}', [LocaleController::class, 'change'])->name('locale.change');

/*
 * Frontend Routes
 * All route names are prefixed with 'frontend.'
 */
/* Route::group(['as' => 'frontend.'], function () { */
Route::group(['as' => 'frontend.'], function () {
    // includeRouteFiles(__DIR__.'/frontend/');
    require_once(__DIR__.'/frontend/auth.php');
    require_once(__DIR__.'/frontend/home.php');
    require_once(__DIR__.'/frontend/user.php');
});

/*
 * Backend Routes
 * These routes can only be accessed by users with type `admin`
 * Routes for the admin section of the application
 * All routes in this group are prefixed with 'admin' and have the 'admin' middleware applied
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    // Include all the routes from the backend directory
    // includeRouteFiles(__DIR__.'/backend/');
    require_once(__DIR__.'/backend/admin.php');
    require_once(__DIR__.'/backend/auth.php');
});
