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
            'level' => 9999,
            'exp' => 9999,
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
