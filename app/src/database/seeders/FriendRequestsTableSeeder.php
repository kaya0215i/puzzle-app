<?php

namespace Database\Seeders;

use App\Models\FriendRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FriendRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FriendRequest::create([
            'user_id' => 1,
            'requester_user_id' => 2,
            'status' => 'accepted'
        ]);
        FriendRequest::create([
            'user_id' => 3,
            'requester_user_id' => 1,
            'status' => 'pending'
        ]);
        FriendRequest::create([
            'user_id' => 3,
            'requester_user_id' => 2,
            'status' => 'pending'
        ]);
    }
}
