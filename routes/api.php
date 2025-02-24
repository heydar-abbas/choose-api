<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\CityResource;
use App\Http\Resources\ItemResource;
use App\Http\Resources\RestaurantResource;
use App\Models\Category;
use App\Models\City;
use App\Models\Item;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.delete');

    Route::apiResource('restaurants', RestaurantController::class);
    Route::apiResource('items', ItemController::class);
});

Route::get('/allcities', function () {
    return CityResource::collection(
        City::all()
    );
})->name('all.cities');

Route::get('/c/restaurants/{cityId}', function ($cityId) {
    return RestaurantResource::collection(
        Restaurant::where('city_id', $cityId)->get()
    );
})->name('city.restaurants.show');

Route::get('/categories', function () {
    return CategoryResource::collection(
        Category::all()
    );
})->name('categories');

Route::get('/restaurant/{id}', [RestaurantController::class, 'show'])
    ->name('restaurant.show');

Route::get('/restaurant/{id}/items', function ($id) {
    return ItemResource::collection(
        Item::where('restaurant_id', $id)->get()
    );
})->name('restaurant.items');

Route::get('/item/{id}', [ItemController::class, 'show'])->name('item.show');

require __DIR__ . '/auth.php';
