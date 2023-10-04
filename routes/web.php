<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\QuoteController;
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

Route::get('/', function () {
    return Inertia::render('welcome');
});

Route::post('/quote',[QuoteController::class,'store']);

Route::get('/pricing',function (){
    return Inertia::render('pricing/pricing');
} );

Route::get('/get-a-quote',function (){
    return Inertia::render('get-a-quote/quote');
} );

Route::get('/services',function (){
    return Inertia::render('services/services');
} );


Route::get('/services/show',function (){
    return Inertia::render('services/show');
} );

Route::get('/about',function (){
    return Inertia::render('about/about');
} );
// Route::get('/contact-us',function () {
//     return Inertia::render('about/contact-us/contact');
// });

Route::get('/contact-us',function (){
    return Inertia::render('about/contact-us/contact');
} );