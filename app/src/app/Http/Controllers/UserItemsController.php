<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserItems;
use Illuminate\Http\Request;

class UserItemsController extends Controller
{
    function index(Request $request)
    {
        $data = UserItems::select('user_items.id as id', 'users.name as userName', 'items.name as itemName',
            'user_items.amount as amount', 'users.id as userId')
            ->leftJoin('users', 'users.id', '=', 'user_items.user_id')
            ->leftJoin('items', 'items.id', '=', 'user_items.item_id')
            ->paginate(10);

        return view('users/userItemList', ['data' => $data]);
    }
}
