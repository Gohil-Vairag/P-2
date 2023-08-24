<?php

use App\Http\Controllers\Auth\logincontroller;
use App\Http\Controllers\workController;
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
    return view('login');
})->name('login');

Route::post('/login', [logincontroller::class, 'login'])->name('login');
Route::get('/logout', [logincontroller::class, 'logout']);
Route::get('/register', [logincontroller::class, 'register']);


Route::get('/dashborad', [workController::class, 'dashborad']);
Route::get('/create', [workController::class, 'create']);
Route::post('/store', [workController::class, 'store']);
Route::get('/list', [workController::class, 'list']);
Route::get('edit/{id}', [WorkController::class, 'edit']);
Route::get('delete/{id}', [WorkController::class, 'delete']);

Route::group(['prefix'=>'work'], function(){
    Route::get('list',[workController::class,'list'])->name('user.list');
    Route::get('create',[workController::class,'create'])->name('user.create');
    Route::post('store',[workController::class,'store'])->name('user.store');
    Route::get('edit',[workController::class,'edit']);
    Route::post('update',[workController::class,'update']);
    Route::get('delete/{id}',[workController::class,'delete']);
    Route::get('delete',[workController::class,'deleteAjax'])->name('user.delete.ajax');

});
