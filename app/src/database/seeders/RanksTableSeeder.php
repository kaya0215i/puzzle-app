<?php

namespace Database\Seeders;

use App\Models\Rank;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RanksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Rank::create([
            'name' => 'アイアン',
        ]);
        Rank::create([
            'name' => 'ブロンズ',
        ]);
        Rank::create([
            'name' => 'シルバー',
        ]);
        Rank::create([
            'name' => 'ゴールド',
        ]);
        Rank::create([
            'name' => 'プラチナ',
        ]);
        Rank::create([
            'name' => 'ダイヤモンド',
        ]);
        Rank::create([
            'name' => 'レジェンド',
        ]);
    }
}
