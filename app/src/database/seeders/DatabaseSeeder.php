<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\ItemObject;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(AccountsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(UserItemsTableSeeder::class);
        $this->call(UserDetailsTableSeeder::class);
        $this->call(FieldTableSeeder::class);
        $this->call(FieldObjectTableSeeder::class);
        $this->call(ItemObjectTableSeeder::class);
    }
}
