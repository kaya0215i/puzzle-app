<?php

namespace App\Http\Controllers;

use App\Models\Field;
use Illuminate\Http\Request;

class FieldController extends Controller
{
    // 一覧表示
    public function index(request $request)
    {
        // モデル取得
        $fields = Field::paginate(10);

        return view('fields/index', ['fields' => $fields]);
    }

    public function showFieldInfo(request $request)
    {
        $field = Field::where('id', '=', $request->id)->first();

        return view('fields/fieldInfo', ['field' => $field, 'page' => $request->page]);
    }
}
