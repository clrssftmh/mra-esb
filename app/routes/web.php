<?php

use AnourValar\EloquentSerialize\Service;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\PostmanListController;
use App\Http\Controllers\ServiceCotroller;
use Illuminate\Support\Facades\Route;
use App\Livewire\ListService;
use App\Livewire\ChannelIdsComponent;
use App\Livewire\ListServiceDetail;
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

Route::get('/home', ChannelIdsComponent::class);
Route::get('channels/{id}', ListServiceDetail::class)->name('channels.show');


// Route::get('/channels', [ChannelIdsComponent::class, 'index'])->name('channels.index');
Route::get('/', HomeController::class)->name('home');
// Route::get('/download_postman/{id}', [PostmanListController::class, 'downloadFile'])->name('serviceList.download');

Route::get('/download_postman/{id}', [ServiceCotroller::class, 'downloadPostman']);

Route::get('/blog', [PostController::class, 'index'])->name('posts.index');

Route::get('/blog/{post:slug}', [PostController::class, 'show'])->name('posts.show');

// Route::get('/channels', [ServiceCotroller::class, 'listChannel'])->name('listchannel');

Route::get('/channels', [ChannelController::class, 'index'])->name('posts.data');
Route::get('/channels/clear-filters', [ChannelController::class, 'clearFilters'])->name('posts.clear-filters');
Route::get('/channel', 'ChannelController@getData')->name('posts.data');



//Route::get('/listservice', [ListService::class,'render'])->name('listservice');
Route::get('/listservice', ListService::class)->name('listservice');

Route::post('/sendId', [ListService::class,'getDdetail'])->name('sendID');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
