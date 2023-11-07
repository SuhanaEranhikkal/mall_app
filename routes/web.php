<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MallController;

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::get('/home',[MallController::class,'homepage'])->middleware('auth')->name('home');
Route::get('view_customers',[MallController::class,'view_customers'])->name('view_customers');
Route::get('shop',[MallController::class,'shop'])->name('shop');
Route::get('view_product',[MallController::class,'view_product'])->name('view_product');
Route::get('/products',[MallController::class,'products'])->name('products');
Route::get('register_shop/{id}',[MallController::class,'register_shop'])->name('register_shop');
Route::get('register_shop/{id}',[MallController::class,'register_shop'])->name('register_shop');
Route::post('verify/{id}',[MallController::class,'verify'])->name('verify');
Route::get('request',[MallController::class,'request'])->name('request');
Route::get('accept/{id}',[MallController::class,'accept'])->name('accept');
Route::get('my_product/{id}',[MallController::class,'my_product'])->name('my_product');
Route::get('users',[MallController::class,'users'])->name('users');
Route::get('add_product/{id}',[MallController::class,'add_product'])->name('add_product');
Route::post('set_product/{id}',[MallController::class,'set_product'])->name('set_product');
Route::get('delete_user/{id}',[MallController::class,'delete_user'])->name('delete_user');
Route::get('product_delete/{id}',[MallController::class,'product_delete'])->name('product_delete');
//route for applying filter
Route::get('filter/{category}',[MallController::class,'filterproduct'])->name('filter');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
