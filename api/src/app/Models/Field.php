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

    public function objects()
    {
        return $this->belongsToMany(
            ItemObject::class, 'field_objects', 'field_id', 'item_id'
        )->withPivot('pos_X', 'pos_Y');
        //return $this->hasMany(FieldObject::class);
    }

    public function users()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
