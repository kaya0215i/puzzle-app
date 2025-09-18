<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function field_objects()
    {
        return $this->belongsToMany(
            Item::class, 'field_objects', 'field_id', 'item_id'
        )->withPivot('index');
        //return $this->hasMany(FieldObject::class);
    }

    public function ranks()
    {
        return $this->hasOne(Rank::class, 'id', 'rank_id');
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
