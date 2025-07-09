<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        if ($request->session()->get('login')) {
            return redirect('/accounts/index');
        }
        //dd($request);
        //Debugbar::error('エラー');

        return view('auth/index', ['error_id' => $request->error_id]);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'account_name' => ['required', 'min:4', 'max:20'],
            'account_pass' => ['required'],
        ]);

        $accounts = Account::where('name', '=', $request['account_name'])->get();

        foreach ($accounts as $account) {
            if (Hash::check($validated['account_pass'], $account->password)) {
                $request->session()->put('login', true);
                return redirect('/accounts/index');
            }
        }
        return redirect('/1');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('login');
        return redirect('/');
    }
}
