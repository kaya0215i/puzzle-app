<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function getUserInfo(Request $request)
    {
//        //テーブルの全てのレコードを取得
//        $accounts = Account::All();
//    　　//テーブルのレコード数を取得
//    　　$count = Account::count();
//    　　//idで検索,見つからなかったら404エラー
//    　　$account = Account::findOrFail(1);
//    　　//条件を指定して取得
//    　　$account = Account::where(‘name’, ‘=‘, ‘jobi’)->get();
//    　　//複数の条件を指定して取得
//    　　$account = Account::where(‘name’, ‘=‘, ‘jobi’)
//    　　　　　　　　->where(‘created_at’, ‘>=‘, ‘2024-06-08’)
//    　　　　　　　　->get();


        return Account::All();
    }

    public function index(Request $request)
    {
        if (!$request->session()->get('login')) {
            return redirect('/');
        }


        return view('accounts/index');
    }

    // アカウント一覧を表示する
    public function showAccounts(Request $request)
    {
        if (!$request->session()->get('login')) {
            return redirect('/');
        }

        $data = $this->getUserInfo($request);

        return view('accounts/accountList', ['accounts' => $data]);
    }
}
