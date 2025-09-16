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
            'name' => '鉄剣',
            'is_weapon' => true,
            'amount' => 3,
            'energy_up' => 0,
            'energy_cost' => 2,
            'cool_time' => 2,
            'text' => '',
            'price' => 3,
        ]);

        Item::create([
            'name' => '斧',
            'is_weapon' => true,
            'amount' => 5,
            'energy_up' => 0,
            'energy_cost' => 3,
            'cool_time' => 5,
            'text' => '',
            'price' => 5,
        ]);

        Item::create([
            'name' => 'ハンマー',
            'is_weapon' => true,
            'amount' => 7,
            'energy_up' => 0,
            'energy_cost' => 5,
            'cool_time' => 7,
            'text' => '',
            'price' => 10,
        ]);

        Item::create([
            'name' => 'ピストル',
            'is_weapon' => true,
            'amount' => 6,
            'energy_up' => 0,
            'energy_cost' => 1,
            'cool_time' => 3.5,
            'text' => '20%の確率で外れる',
            'price' => 4,
        ]);

        Item::create([
            'name' => '短剣',
            'is_weapon' => true,
            'amount' => 2,
            'energy_up' => 0,
            'energy_cost' => 1.5,
            'cool_time' => 1,
            'text' => '',
            'price' => 4,
        ]);

        Item::create([
            'name' => '小斧',
            'is_weapon' => true,
            'amount' => 5,
            'energy_up' => 0,
            'energy_cost' => 2.2,
            'cool_time' => 2.5,
            'text' => '',
            'price' => 5,
        ]);

        Item::create([
            'name' => 'リボルバー',
            'is_weapon' => true,
            'amount' => 10,
            'energy_up' => 0,
            'energy_cost' => 1,
            'cool_time' => 2.5,
            'text' => '50%の確率で外れる',
            'price' => 6,
        ]);

        Item::create([
            'name' => 'こん棒',
            'is_weapon' => true,
            'amount' => 3.5,
            'energy_up' => 0,
            'energy_cost' => 2.5,
            'cool_time' => 2.5,
            'text' => '',
            'price' => 4,
        ]);

        Item::create([
            'name' => '錆びれた剣',
            'is_weapon' => true,
            'amount' => 3,
            'energy_up' => 0,
            'energy_cost' => 1,
            'cool_time' => 2,
            'text' => '',
            'price' => 4,
        ]);

        Item::create([
            'name' => '木盾',
            'is_weapon' => false,
            'amount' => 1,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 6,
            'text' => '6秒ごとにアーマーを1獲得',
            'price' => 3,
        ]);

        Item::create([
            'name' => '銅盾',
            'is_weapon' => false,
            'amount' => 3,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 8,
            'text' => '8秒ごとにアーマーを3獲得',
            'price' => 5,
        ]);

        Item::create([
            'name' => '鉄盾',
            'is_weapon' => false,
            'amount' => 6,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 10,
            'text' => '10秒ごとにアーマーを6獲得',
            'price' => 6,
        ]);

        Item::create([
            'name' => 'りんご',
            'is_weapon' => false,
            'amount' => 5,
            'energy_up' => 2,
            'energy_cost' => 0,
            'cool_time' => 3,
            'text' => '3秒ごとに体力を5回復、エネルギーを2獲得',
            'price' => 3,
        ]);

        Item::create([
            'name' => '梨',
            'is_weapon' => false,
            'amount' => 2.5,
            'energy_up' => 6,
            'energy_cost' => 0,
            'cool_time' => 4,
            'text' => '3秒ごとに体力を2.5回復、エネルギーを4獲得',
            'price' => 4,
        ]);

        Item::create([
            'name' => '力のポーション',
            'is_weapon' => false,
            'amount' => 1.07,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 0,
            'text' => '攻撃力が7%上昇',
            'price' => 6,
        ]);

        Item::create([
            'name' => '素早さのポーション',
            'is_weapon' => false,
            'amount' => 1.03,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 0,
            'text' => '素早さが3%上昇',
            'price' => 5,
        ]);

        Item::create([
            'name' => '毒のポーション',
            'is_weapon' => false,
            'amount' => 3,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 4,
            'text' => '4秒ごとに毒を3与える',
            'price' => 3,
        ]);

        Item::create([
            'name' => 'ルビー',
            'is_weapon' => false,
            'amount' => 1.2,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 0,
            'text' => '隣のピースの攻撃力が20%上昇',
            'price' => 4,
        ]);

        Item::create([
            'name' => 'サファイア',
            'is_weapon' => false,
            'amount' => 1.07,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 0,
            'text' => '隣のピースのクールタイムが7%減少',
            'price' => 5,
        ]);

        Item::create([
            'name' => '毒龍',
            'is_weapon' => false,
            'amount' => 1,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 5,
            'text' => '5秒ごとに毒を1与える　毒を受けていると与える毒の量が増える',
            'price' => 6,
        ]);

        Item::create([
            'name' => '眠龍',
            'is_weapon' => false,
            'amount' => 2,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 7,
            'text' => '7秒ごとに睡眠を2与える',
            'price' => 7,
        ]);

        Item::create([
            'name' => '痺龍',
            'is_weapon' => false,
            'amount' => 3,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 7,
            'text' => '7秒ごとに痺れを3与える',
            'price' => 7,
        ]);

        Item::create([
            'name' => 'チェスト',
            'is_weapon' => false,
            'amount' => 5,
            'energy_up' => 0,
            'energy_cost' => 0,
            'cool_time' => 10,
            'text' => '10秒ごとに5%の確率でコインを5獲得',
            'price' => 3,
        ]);
    }
}
