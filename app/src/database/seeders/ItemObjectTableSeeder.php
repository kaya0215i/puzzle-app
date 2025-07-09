<?php

namespace Database\Seeders;

use App\Models\ItemObject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemObjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItemObject::create([
            'name' => '木の剣',
        ]);
        ItemObject::create([
            'name' => '木の盾',
        ]);
        ItemObject::create([
            'name' => 'りんご',
        ]);
    }
}
