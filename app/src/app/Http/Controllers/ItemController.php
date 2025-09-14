<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index(Request $request)
    {
        $itemData = Item::paginate(10);

        return view('items/itemList', ['items' => $itemData]);
    }

    function createItem(Request $request)
    {
        return view('items/createItem');
    }

    function storeItem(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'amount' => ['required'],
            'energy_up' => ['required'],
            'energy_cost' => ['required'],
            'cool_time' => ['required'],
            'text' => ['required', 'min:3', 'max:150'],
            'price' => ['required'],
        ]);

        $isWeapon = '';
        if ($request->is_weapon === 'weapon') {
            $isWeapon = true;
        } elseif ($request->is_weapon === 'item') {
            $isWeapon = false;
        }


        Item::create([
            'name' => $validated['name'],
            'is_weapon' => $isWeapon,
            'amount' => $validated['amount'],
            'energy_up' => $validated['energy_up'],
            'energy_cost' => $validated['energy_cost'],
            'cool_time' => $validated['cool_time'],
            'text' => $validated['text'],
            'price' => $validated['price'],
        ]);

        $title = 'アイテム作成';
        $text = '[' . $request->name . '] ' . 'を作成しました。';

        return redirect('items/result')->with('title', $title)->with('text', $text);
    }

    function confirmItem(Request $request)
    {
        $itemName = Item::select('name')
            ->where('id', '=', $request->id)
            ->first();

        $title = 'アイテム削除';
        $text = '[' . $itemName['name'] . '] ' . 'を削除しますか?';

        return redirect('items/result')->with('title', $title)->with('text', $text)->with('id', $request->id);
    }

    function destroyItem(Request $request)
    {
        $itemName = Item::select('name')
            ->where('id', '=', $request->id)
            ->first();

        $item = Item::findOrFail($request->id);
        $item->delete();

        $title = 'アイテム削除';
        $text = '[' . $itemName['name'] . '] ' . 'を削除しました。';

        return redirect('items/result')->with('title', $title)->with('text', $text);
    }

    function editItem(Request $request)
    {
        $data = Item::select('id', 'name', 'is_weapon', 'amount', 'energy_up', 'energy_cost', 'cool_time', 'text',
            'price')
            ->where('id', '=', $request->id)
            ->first();

        return view('items/edit', ['data' => $data]);
    }

    function updateItem(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'amount' => ['required'],
            'energy_up' => ['required'],
            'energy_cost' => ['required'],
            'cool_time' => ['required'],
            'text' => ['required', 'min:3', 'max:150'],
            'price' => ['required'],
        ]);

        $isWeapon = '';
        if ($request->is_weapon === 'weapon') {
            $isWeapon = true;
        } elseif ($request->is_weapon === 'item') {
            $isWeapon = false;
        }

        $oldItem = Item::select('id', 'name', 'is_weapon', 'amount', 'energy_up', 'energy_cost', 'cool_time', 'text',
            'price')
            ->where('id', '=', $request->id)
            ->first();

        $item = Item::findOrFail($request->id);
        $item->name = $validated['name'];
        $item->is_weapon = $isWeapon;
        $item->amount = $validated['amount'];
        $item->energy_up = $validated['energy_up'];
        $item->energy_cost = $validated['energy_cost'];
        $item->cool_time = $validated['cool_time'];
        $item->text = $validated['text'];
        $item->price = $validated['price'];
        $item->save();

        $title = 'アイテム更新';
        $text = '情報を更新しました。';

        return redirect('items/result')->with('title', $title)->with('text', $text)->with('oldItem',
            $oldItem)->with('newItem', $item);
    }

    function result(Request $request)
    {
        $title = $request->session()->get('title');
        $text = $request->session()->get('text');
        $id = $request->session()->get('id');
        $oldItem = $request->session()->get('oldItem');
        $newItem = $request->session()->get('newItem');
        return view('items/result',
            ['title' => $title, 'text' => $text, 'id' => $id, 'oldItem' => $oldItem, 'newItem' => $newItem]);
    }
}
