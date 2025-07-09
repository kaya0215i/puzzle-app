<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    function index(Request $request)
    {
        //$itemData = Item::All();
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
            'effect_value' => ['required'],
            'text' => ['required', 'min:3', 'max:50'],
        ]);

        $itemClass = '';
        if ($request->class === 'consumables') {
            $itemClass = '消耗品';
        } elseif ($request->class === 'equipment') {
            $itemClass = '装備品';
        }


        Item::create([
            'name' => $validated['name'],
            'class' => $itemClass,
            'effect_value' => $validated['effect_value'],
            'text' => $validated['text'],
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
        $data = Item::select('id', 'name', 'class', 'effect_value', 'text')
            ->where('id', '=', $request->id)
            ->first();

        return view('items/edit', ['data' => $data]);
    }

    function updateItem(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'min:3', 'max:20'],
            'effect_value' => ['required'],
            'text' => ['required', 'min:3', 'max:50'],
        ]);

        $itemClass = '';
        if ($request->class === 'consumables') {
            $itemClass = '消耗品';
        } elseif ($request->class === 'equipment') {
            $itemClass = '装備品';
        }

        $oldItem = Item::select('name', 'class', 'effect_value', 'text')
            ->where('id', '=', $request->id)
            ->first();

        $item = Item::findOrFail($request->id);
        $item->name = $validated['name'];
        $item->class = $itemClass;
        $item->effect_value = $validated['effect_value'];
        $item->text = $validated['text'];
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
