<?php

use App\Http\Controllers\GroceryController;
use App\Http\Controllers\CategoryController;
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


Route::get('/groceries'               , [GroceryController::class,'index'])->name('groceries.index');
Route::get('/groceries/create'        , [GroceryController::class,'create'])->name('groceries.create');
Route::post('/groceries'              , [GroceryController::class,'store'])->name('groceries.store');


Route::put('/groceries/{grocery}'     , [GroceryController::class,'update'])->name('groceries.update');
Route::get('/groceries/{grocery}/edit', [GroceryController::class,'edit'])->name('groceries.edit');

Route::delete('/groceries/{grocery}'  , [GroceryController::class,'destroy'])->name('groceries.destroy');

Route::redirect('/','/groceries');

#content section create.blade
#<!-- action="{{ route('groceries.show')}}" -->