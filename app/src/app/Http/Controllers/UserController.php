<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
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

        return view('users/userInfo',
            ['user' => $user, 'from' => $request->from, 'page' => $request->page]);
    }
}
