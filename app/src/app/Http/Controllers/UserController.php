<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Models\UserItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(Request $request)
    {
        //$userData = User::All();
        $userData = User::paginate(10);

        return view('users/userList', ['users' => $userData]);
    }

    function showUserInfo(request $request)
    {
        $user = User::select('id', 'name', 'level', 'exp', 'created_at', 'updated_at')
            ->where('id', '=', $request->id)
            ->first();

        $item = UserItems::select('items.name as itemName', 'user_items.amount as amount')
            ->leftJoin('users', 'users.id', '=', 'user_items.user_id')
            ->leftJoin('items', 'items.id', '=', 'user_items.item_id')
            ->where('users.id', '=', $request->id)
            ->paginate(10);

        return view('users/userInfo',
            ['user' => $user, 'item' => $item, 'from' => $request->from, 'page' => $request->page]);
    }
}
