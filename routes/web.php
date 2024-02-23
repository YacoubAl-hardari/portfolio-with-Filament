<?php

use App\Livewire\Front\PostDetails\ShowPostDetails;
use App\Livewire\Home\ShowHomePage;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes V 1.3
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', ShowHomePage::class)->name('home');

Route::get('/blog/{slug}', ShowPostDetails::class)->name('ShowPostDetails');




Route::get('/lang/{lang}',function($lang){

       
    if(array_key_exists($lang,config('app.support_langs')))
    {
        session()->put('lang',$lang);
    }

    return redirect()->back();

})->name('lang-swicher');

Route::any('{url}', function () {
    return abort(404);
})->where('url', '.*');

