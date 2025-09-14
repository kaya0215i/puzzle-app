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
        
        $fieldInfo[] = $field->json;

        return response()->json(
            $fieldInfo
        );
    }
}
