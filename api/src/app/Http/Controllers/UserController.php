<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Rank;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = User::findOrFail($request->user()->id);
        return response()->json(
            UserResource::make($user)
        );
    }

    public function show(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        return response()->json(
            UserResource::make($user)
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:4', 'max:255'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'rank_id' => 1,
            'rank_point' => 0,
        ]);

        // APIトークンを発行する
        $token = $user->createToken($request->name)->plainTextToken;

        return response()->json(['token' => $token], 200);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:4', 'max:20'],
            'rank_id' => ['required'],
            'rank_point' => ['required'],
        ]);

        $user = User::findOrFail($request->user()->id);
        $user->name = $validated['name'];
        $user->rank_id = $validated['rank_id'];
        $user->rank_point = $validated['rank_point'];
        $user->save();

        return response()->json();
    }
}
