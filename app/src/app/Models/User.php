<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function ranks()
    {
        return $this->hasOne(Rank::class, 'id', 'rank_id');
    }

    public function friends()
    {
        $friendsTo = $this->belongsToMany(User::class, 'friends', 'user_id_from', 'user_id_to')->get();

        $friendsFrom = $this->belongsToMany(User::class, 'friends', 'user_id_to', 'user_id_from')->get();

        return $friendsTo->merge($friendsFrom)->unique('id')->sortBy('name');
    }

    // 届いたフレンドリクエスト
    public function arrived_friend_requests()
    {
        return $this->belongsToMany(User::class, 'friend_requests', 'user_id',
            'requester_user_id')->wherePivot('status', 'pending')->get();
    }

    // 送ったフレンドリクエスト
    public function applied_friend_requests()
    {
        return $this->belongsToMany(User::class, 'friend_requests', 'requester_user_id',
            'user_id')->wherePivot('status', 'pending')->get();
    }
}
