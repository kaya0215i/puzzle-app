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
}
