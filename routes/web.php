<?php

use App\Models\Contact;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('home');
})->name('index')->middleware('auth');

Route::get('/home', function () {
    $contacts = Contact::where('user_id',Auth::id())
    ->get();
    return view('contacts',compact('contacts'));
})->name('home')->middleware('auth');

Auth::routes();

Route::post('contact/search',[ContactController::class,'search'])->name('contact.search');
Route::resource('contact',ContactController::class)->middleware('auth');


