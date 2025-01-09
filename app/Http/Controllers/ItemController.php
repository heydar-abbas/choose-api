<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Resources\ItemResource;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        return ItemResource::collection(
            Item::where('user_id', Auth::id())->get()
        );
    }


    public function show($id)
    {
        return new ItemResource(
            Item::findOrfail($id)
        );
    }


    public function store(StoreItemRequest $request)
    {
        Item::create($request->validated());
        return response()->json([
            'message' => 'Item is created!'
        ]);
    }


    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->update($request->validated());
        return response()->json([
            'message' => 'Item is updated!'
        ]);
    }


    public function destroy(Item $item)
    {
        $item->delete();
        return response()->json([
            'message' => 'Item is deleted!'
        ]);
    }
}
