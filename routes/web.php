<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', [ProductController::class, 'showHome']);
Route::get('/home', [ProductController::class, 'showHome']);

//DogMenu
Route::get('/menu', [ProductController::class, 'showProductsAndCategories']);
Route::get('/dog_food', [ProductController::class, 'showDogFoodProducts']);
Route::get('/dog_health', [ProductController::class, 'showdogHealthProducts']);
Route::get('/dog_fashion', [ProductController::class, 'showDogFashionProducts']);
Route::get('/dog_toy', [ProductController::class, 'showdogToyProducts']);

//CatMenu
Route::get('/cat_food', [ProductController::class, 'showcatFoodProducts']);
Route::get('/cat_health', [ProductController::class, 'showcatHealthProducts']);
Route::get('/cat_fashion', [ProductController::class, 'showcatFashionProducts']);
Route::get('/cat_toy', [ProductController::class, 'showcatToyProducts']);

//auth
Route::get('/login', [ProductController::class, 'login']);
Route::get('/register', [ProductController::class, 'register']);

//Service
Route::get('/catHotel', [ProductController::class, 'catHotel']);
Route::get('/SpaGrooming', [ProductController::class, 'SpaGrooming']);

//admin
Route::get('/admin',function(){
    return view('content.admin');
});

