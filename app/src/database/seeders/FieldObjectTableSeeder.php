<?php

namespace Database\Seeders;

use App\Models\FieldObject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FieldObjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FieldObject::create([
            'field_id' => 1,
            'pos_X' => 0,
            'pos_Y' => 0,
            'item_object_id' => 1,
        ]);
        FieldObject::create([
            'field_id' => 1,
            'pos_X' => 1,
            'pos_Y' => 0,
            'item_object_id' => 2,
        ]);
        FieldObject::create([
            'field_id' => 1,
            'pos_X' => 0,
            'pos_Y' => 1,
            'item_object_id' => 3,
        ]);

        FieldObject::create([
            'field_id' => 2,
            'pos_X' => 1,
            'pos_Y' => 0,
            'item_object_id' => 1,
        ]);
        FieldObject::create([
            'field_id' => 2,
            'pos_X' => 2,
            'pos_Y' => 0,
            'item_object_id' => 2,
        ]);
        FieldObject::create([
            'field_id' => 2,
            'pos_X' => 3,
            'pos_Y' => 1,
            'item_object_id' => 3,
        ]);
    }
}
