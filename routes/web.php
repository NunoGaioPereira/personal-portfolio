<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Website


// Route::get('language/{locale}', function ($locale) {
//     app()->setLocale($locale);
//     session()->put('locale', $locale);
//     return redirect()->back();
// });
// Route::get('/{locale?}', function ($locale = 'en') {
//     if (! in_array($locale, ['en', 'pt'])) {
//         $locale = 'en';
//     }
//     App::setLocale($locale);

//     return view('website.home');
// });

// Route::prefix('{lang?}')->middleware('locale')->group(function() {
//     Route::get('/', function () {
//         return view('website.home');
//     });
// });

Route::get('/', function () {
    return view('website.home');
});

Route::get('/about', function () {
    return view('website.about');
});
Route::get('/services', function () {
    return view('website.services');
});
Route::get('/portfolio', function () {
    return view('website.portfolio');
});
Route::get('/contact', function () {
    return view('website.contact');
});
Route::get('/policies', function () {
    return view('website.policies');
});
Route::get('/projects/{project}', function ($project) {
    return view('website.projects.' .  $project);
});

Route::post('contact', [WebsiteController::class, 'send'])->name('contact.send');

