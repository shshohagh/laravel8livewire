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

Route::get('/post',Post::class)->name('post');
Route::get('/user',User::class)->name('houserme');
Route::get('/home/{name?}',Home::class)->name('home');
Route::get('/form',Form::class)->name('form');
Route::get('/students',Students::class)->name('students');
Route::get('/uploads',Uploads::class)->name('uploads');
Route::get('/upload-images',Images::class)->name('upload-images');



