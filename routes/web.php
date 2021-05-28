<?php

use App\Http\Controllers\Conversation\ConversationController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth', 'verified']],function (){
    Route::get('/conversation', [ConversationController::class, 'index'])->name('conversation.index');
    Route::get('/conversation/create', [ConversationController::class, 'create'])->name('conversation.create');
    Route::get('/conversation/{conversation}', [ConversationController::class, 'show'])->name('conversation.show');

});
