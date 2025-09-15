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
            'index' => 17,
            'item_id' => 1,
            'piece_id' => 1,
            'angle_x' => 0.0,
            'angle_y' => 0.0,
            'angle_z' => 0.0,
            'angle_w' => 1.0,
        ]);

        FieldObject::create([
            'field_id' => 1,
            'index' => 18,
            'item_id' => 15,
            'piece_id' => 3,
            'angle_x' => 0.0,
            'angle_y' => 0.0,
            'angle_z' => 0.0,
            'angle_w' => 1.0,
        ]);

        FieldObject::create([
            'field_id' => 1,
            'index' => 24,
            'item_id' => 1,
            'piece_id' => 3,
            'angle_x' => 0.0,
            'angle_y' => 0.0,
            'angle_z' => 0.0,
            'angle_w' => 1.0,
        ]);
    }
}
