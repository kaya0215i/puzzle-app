<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Item::create([
            'name' => '回復薬',
            'class' => '消耗品',
            'effect_value' => 10,
            'text' => 'ライフが回復する'
        ]);
        Item::create([
            'name' => '回復薬グレート',
            'class' => '消耗品',
            'effect_value' => 25,
            'text' => 'ライフが多く回復する'
        ]);
        Item::create([
            'name' => '復活の羽',
            'class' => '消耗品',
            'effect_value' => 1,
            'text' => '一度死んでも復活する'
        ]);
        Item::create([
            'name' => 'しああわせの靴',
            'class' => '装備品',
            'effect_value' => 15,
            'text' => 'クリア時に経験値が加算'
        ]);
    }
}
