<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRestaurantRequest;
use App\Http\Requests\UpdateRestaurantRequest;
use App\Http\Resources\RestaurantResource;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    public function index()
    {
        return RestaurantResource::collection(
            Restaurant::where('user_id', Auth::id())->get()
        );
    }


    public function store(StoreRestaurantRequest $request)
    {
        Restaurant::create($request->validated());
        return response()->json([
            'message' => 'Restaurant is created!'
        ]);
    }



    public function update(UpdateRestaurantRequest $request, Restaurant $restaurant)
    {
        $getRestaurant = Restaurant::findOrFail($restaurant->id);
        $fields = $request->validated();

        if ($request->hasFile('logo') && $request->logo !== null) {
            if ($getRestaurant['logo'] !== null) {
                Storage::disk('public')->delete($getRestaurant['logo']);
            }
            $fields['logo'] = Storage::disk('public')->put('restaurant_logo', $request->logo);
        }

        if ($request->logo === null) {
            $fields['logo'] = $getRestaurant['logo'];
        }

        $restaurant->update($fields);
        return response()->json([
            'message' => 'Restaurant is updated!'
        ]);
    }


    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();
        return response()->json([
            'message' => 'Restaurant is deleted!'
        ]);
    }
}
