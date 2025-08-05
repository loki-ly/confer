<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResearcherController;
use App\Http\Controllers\SpeakerController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/product',[ProductController::class , 'index'])-> name('product.index');
Route::get('/product/create',[ ProductController ::class , 'create'])-> name('product.create');
Route::post('/product',[ ProductController ::class , 'store'])-> name('product.store');
Route::get('/product/{product}/edit',[ ProductController ::class , 'edit'])-> name('product.edit');
Route::put('/product/{product}/update' , [ ProductController ::class , 'update'])-> name('product.update');
Route::delete('/product/{product}/delete' , [ ProductController ::class , 'delete'])-> name('product.delete');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');   
    })->name('dashboard');
});
Route:: get('/home',[AdminController:: class, 'index' ])-> name('home');
Route:: get('/home',[SpeakerController:: class, 'index' ])-> name('home');
Route:: get('/home',[ResearcherController:: class, 'index' ])-> name('home');
Route:: post('my_upload',[ResearcherController:: class, 'upload']);