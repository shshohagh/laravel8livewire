<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Post;
use App\Http\Livewire\User;
use App\Http\Livewire\Home;
use App\Http\Livewire\Form;
Use App\Http\Livewire\Students;
use App\Http\Livewire\uploads;
use App\Http\Livewire\Images;

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

Route::get('/post',Post::class);
Route::get('/user',User::class);
Route::get('/home/{name?}',Home::class);
Route::get('/form',Form::class);
Route::get('/students',Students::class);
Route::get('/uploads',Uploads::class);
Route::get('/upload-images',Images::class);



