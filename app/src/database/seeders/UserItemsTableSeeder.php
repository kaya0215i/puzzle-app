<?php

namespace Database\Seeders;

use App\Models\UserItems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserItems::create([
            'user_id' => 1,
            'item_id' => 1,
            'amount' => 5,
        ]);
        UserItems::create([
            'user_id' => 1,
            'item_id' => 2,
            'amount' => 500,
        ]);
        UserItems::create([
            'user_id' => 1,
            'item_id' => 3,
            'amount' => 2,
        ]);
        UserItems::create([
            'user_id' => 1,
            'item_id' => 4,
            'amount' => 1,
        ]);

        UserItems::factory(99)->create();
    }
}
