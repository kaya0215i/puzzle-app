<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'kaya',
            'rank_id' => 7,
            'rank_point' => 100,
        ]);
        User::create([
            'name' => 'kkkk',
            'rank_id' => 1,
            'rank_point' => 0,
        ]);
        User::create([
            'name' => 'tatata',
            'rank_id' => 3,
            'rank_point' => 40,
        ]);
//        User::create([
//            'name' => 'kei',
//            'level' => 19,
//            'exp' => 87,
//        ]);
//        User::create([
//            'name' => 'jun',
//            'level' => 20,
//            'exp' => 61,
//        ]);
//        User::factory(99)->create();
    }
}
