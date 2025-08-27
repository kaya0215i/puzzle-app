<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
        ]);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $str = '%' . $request->name . '%';

        $user = User::where('name', 'like', $str)->get();
        return response()->json(
            UserResource::collection($user)
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
            'level' => 0,
            'exp' => 0,
        ]);

        UserDetail::create([
            'user_id' => $user->id,
            'money' => 0,
        ]);

        // APIトークンを発行する
        $token = $user->createToken($request->name)->plainTextToken;

        return response()->json(['token' => $token], 200);
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:4', 'max:20'],
        ]);

        $user = User::findOrFail($request->user()->id);
        $user->name = $validated['name'];
        $user->save();

        return response()->json();
    }
}
