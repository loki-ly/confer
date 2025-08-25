<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ResearcherController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home.index');
// });
Route:: get('/',[AdminController:: class, 'home' ]);

Route::get('/product',[ProductController::class , 'index'])-> name('product.index');
Route::get('/product/create',[ ProductController ::class , 'create'])-> name('product.create');
Route::post('/product',[ ProductController ::class , 'store'])-> name('product.store');
Route::get('/product/{product}/edit',[ ProductController ::class , 'edit'])-> name('product.edit');
Route::put('/product/{product}/update' , [ ProductController ::class , 'update'])-> name('product.update');
Route::delete('/product/{product}/delete' , [ ProductController ::class , 'delete'])-> name('product.delete');


// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');   
//     })->name('dashboard');
// });
Route:: get('/home',[AdminController:: class, 'index' ])->name('home');
Route:: get('/home',[SpeakerController:: class, 'index' ])->name('home');
Route:: get('/home',[ResearcherController:: class, 'index' ])->name('home');
Route:: post('my_upload',[ResearcherController:: class, 'upload']);
Route:: get('display_data',[ResearcherController:: class, 'display']);
Route:: get('my_download/{file}',[ResearcherController:: class, 'download']);
Route:: get('view_file/{file}',[ResearcherController:: class, 'view']);


Route:: get('/create_room',[AdminController:: class, 'create_room' ]);
Route:: post('/add_room',[AdminController:: class, 'add_room' ]);

Route:: get('/view_room',[AdminController:: class, 'view_room' ]);
Route:: get('/room_delete/{id}',[AdminController:: class, 'room_delete' ]);
Route:: get('/room_update/{id}',[AdminController:: class, 'room_update' ]);
Route:: post('/edit_room/{id}',[AdminController:: class, 'edit_room' ]);

Route:: get('/room_details/{id}',[HomeController:: class, 'room_details' ]);

Route:: post('/add_booking/{id}',[HomeController:: class, 'add_booking' ]);
Route:: get('/bookings',[AdminController:: class, 'bookings' ]);
// Route:: get('/booking_delete/{id}',[HomeController:: class, 'booking_delete'


