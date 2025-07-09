<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\UserItems;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show(Request $request)
    {
        $item = UserItems::select('items.name as itemName', 'user_items.amount as amount')
            ->leftJoin('users', 'users.id', '=', 'user_items.user_id')
            ->leftJoin('items', 'items.id', '=', 'user_items.item_id')
            ->where('users.id', '=', $request->user_id)
            ->get();
        return response()->json($item);
    }
}
