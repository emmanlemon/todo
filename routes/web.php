<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


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

route::redirect('/' ,'/todo');

Route::controller(TodoController::class)->group(function(){
    route::get('/todo' , 'index')->name('index');
    // route::get('/blog/create', 'create')->name('create');
    route::post('/todo', 'store')->name('store');
    // route::post('/update' , 'update')->name('update');
    // route::delete('blog/{blog}' , 'destroy')->name('destroy');
    // route::get('update/{id}' , 'edit');
    // route::get('blog/view/{id}' , 'show');
});
