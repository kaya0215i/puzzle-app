<?php

namespace App\Http\Controllers;

use App\Http\Resources\FieldResource;
use App\Models\Field;
use App\Models\User;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function showRandomFieldInfo(Request $request)
    {
        $field = Field::whereNot('id', '=', $request->user_id)->get();
        $field = $field->random();

        $fieldInfo[] = $field->id;
        $fieldInfo[] = $field->users->name;

        foreach ($field->objects as $object) {
            $fieldInfo[] = $object->pivot->pos_X;
            $fieldInfo[] = $object->pivot->pos_Y;
            $fieldInfo[] = $object->name;
        }

        return response()->json(
            $fieldInfo
        );
    }
}
