<?php

namespace App\Http\Controllers;

use App\Http\Resources\FieldResource;
use App\Models\Field;
use App\Models\FieldObject;
use App\Models\User;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'character_type' => ['required'],
            'round' => ['required'],
            'index' => ['required'],
            'item_id' => ['required'],
            'piece_id' => ['required'],
            'piece_angle' => ['required'],
        ]);

        $field = Field::create([
            'user_id' => $request->user()->id,
            'character_type' => $validated['character_type'],
            'round' => $validated['round'],
        ]);

        for ($i = 0; $i < count($validated['index']); $i++) {
            FieldObject::create([
                'field_id' => $field->id,
                'index' => $validated['index'][$i],
                'item_id' => $validated['item_id'][$i],
                'piece_id' => $validated['piece_id'][$i],
                'angle_x' => $validated['piece_angle'][$i]['x'],
                'angle_y' => $validated['piece_angle'][$i]['y'],
                'angle_z' => $validated['piece_angle'][$i]['z'],
                'angle_w' => $validated['piece_angle'][$i]['w'],
            ]);
        }

        return response()->json();
    }

    public function getFieldInfo(Request $request)
    {
        $field = Field::whereNot('id', '=', $request->user()->id)
            ->where('round', '=', $request->round)
            ->get();
        $field = $field->random();

        $user = User::findOrFail($request->user()->id);

        foreach ($field->field_objects as $field_objects) {
            $index[] = $field_objects->pivot->index;
            $item_id[] = $field_objects->pivot->item_id;
            $piece_id[] = $field_objects->pivot->piece_id;
            $angle['x'] = $field_objects->pivot->angle_x;
            $angle['y'] = $field_objects->pivot->angle_y;
            $angle['z'] = $field_objects->pivot->angle_z;
            $angle['w'] = $field_objects->pivot->angle_w;
            $piece_angle[] = $angle;
        }

        return response()->json([
            'name' => $user['name'],
            'character_type' => $field['character_type'],
            'index' => $index,
            'item_id' => $item_id,
            'piece_id' => $piece_id,
            'piece_angle' => $piece_angle,
        ]);
    }
}
