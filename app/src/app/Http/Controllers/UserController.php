<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Models\UserItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function showUsers(Request $request)
    {
        $this->isLogin($request);

        $userData = User::All();

        return view('users/userList', ['users' => $userData]);
    }

    function showUserItems(Request $request)
    {
        $this->isLogin($request);

        $data = UserItems::select('user_items.id as id', 'users.name as userName', 'items.name as itemName',
            'user_items.amount as amount')
            ->leftJoin('users', 'users.id', '=', 'user_items.user_id')
            ->leftJoin('items', 'items.id', '=', 'user_items.item_id')
            ->get();

        return view('users/userItemList', ['data' => $data]);
    }

    function showItems(Request $request)
    {
        $this->isLogin($request);

        $itemData = Item::All();

        return view('users/itemList', ['items' => $itemData]);
    }

    function isLogin(Request $request)
    {
        if (!$request->session()->get('login')) {
            return redirect('/');
        }
        return 0;
    }
}
