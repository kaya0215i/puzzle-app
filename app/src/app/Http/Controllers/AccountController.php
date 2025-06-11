<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function getUserInfo(Request $request)
    {
        $data = [
            [
                'id' => 1,
                'name' => 'テストさん',
                'password' => '1234',
                'score' => 12000
            ],
            [
                'id' => 2,
                'name' => 'jobi',
                'password' => '5678',
                'score' => 54000
            ]
        ];

        return $data;
    }

    public function showAdmin(Request $request)
    {
        if (!$request->session()->get('login')) {
            return redirect('/');
        }


        return view('accounts/admin');
    }

    // アカウント一覧を表示する
    public function showUsers(Request $request)
    {
        if (!$request->session()->get('login')) {
            return redirect('/');
        }

        $data = $this->getUserInfo($request);

        return view('accounts/userList', ['accounts' => $data]);
    }

    public function showScores(Request $request)
    {
        if (!$request->session()->get('login')) {
            return redirect('/');
        }

        $data = $this->getUserInfo($request);

        return view('accounts/scoreList', ['scores' => $data]);
    }

    public function login(Request $request)
    {
        if ($request->session()->get('login')) {
            return redirect('/accounts/admin');
        }
        //dd($request);
        //Debugbar::error('エラー');
        return view('accounts/login', ['error_id' => $request->error_id]);
    }

    public function doLogin(Request $request)
    {
        if ($request['userName'] === 'jobi' && $request['userPass'] === 'jobi') {
            $request->session()->put('login', true);
            return redirect('/accounts/admin');
        }
        return redirect('/1');
    }

    public function doLogout(Request $request)
    {
        $request->session()->forget('login');
        return redirect('/');
    }
}
