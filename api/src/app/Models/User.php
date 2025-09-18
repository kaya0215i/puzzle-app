<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Userモデル
 */
class User extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;

    protected $guarded = [
        'id',
    ];

    public function rank()
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
            'requester_user_id')->wherePivot('status', 'pending');
    }
}
