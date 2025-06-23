<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        return view('accounts/index');
    }

    // アカウント一覧を表示する
    public function showAccounts(Request $request)
    {
        $data = Account::paginate(10);

        return view('accounts/accountList', ['accounts' => $data]);
    }
}
