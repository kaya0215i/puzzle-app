<?php

namespace App\Http\Controllers;

use App\Models\Friend;
use App\Models\FriendRequest;
use App\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index(Request $request)
    {
        $user = User::findOrFail($request->user()->id);

        if (!$user->friends()) {
            return response()->json();
        }

        foreach ($user->friends() as $friend) {
            $userName[] = $friend->name;
            $userRankId[] = $friend->rank_id;
            $userRankPoint[] = $friend->rank_point;
        }

        return response()->json([
            'user_name' => $userName,
            'rank_id' => $userRankId,
            'rank_point' => $userRankPoint
        ]);
    }

    public function sendFriendRequest(Request $request)
    {
        $user = User::findOrFail($request->user()->id);

        $requestToUser = User::where('name', $request->user_name)->first();

        FriendRequest::create([
            'user_id' => $requestToUser->id,
            'requester_user_id' => $user->id,
            'status' => 'pending'
        ]);

        return response()->json();
    }

    public function getArrivedFriendRequests(Request $request)
    {
        $user = User::findOrFail($request->user()->id);

        if ($user->arrived_friend_requests->isEmpty()) {
            return response()->json();
        }

        foreach ($user->arrived_friend_requests as $friendRequest) {
            $userName[] = $friendRequest->name;
            $userRankId[] = $friendRequest->rank_id;
            $userRankPoint[] = $friendRequest->rank_point;
        }

        return response()->json([
            'user_name' => $userName,
            'rank_id' => $userRankId,
            'rank_point' => $userRankPoint
        ]);
    }

    public function acceptFriendRequest(Request $request)
    {
        $user = User::findOrFail($request->user()->id);
        $requesterUser = User::where('name', $request->requester_user_name)->first();

        $friendRequest = $user->arrived_friend_requests()
            ->where('requester_user_id', $requesterUser->id)
            ->first();

        if ($friendRequest) {
            Friend::create([
                'user_id_from' => $user->id,
                'user_id_to' => $requesterUser->id,
            ]);

            $user->arrived_friend_requests()
                ->updateExistingPivot($requesterUser->id, ['status' => 'accepted']);
        }

        return response()->json();
    }
}
