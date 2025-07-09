@extends('layouts.app')
@section('title', 'ログイン')
@section('body')
    <h1 class="m-2 text-center">ログイン</h1>
    <div class="d-flex align-items-center flex-column">
        @if ($error_id === '1')
            <p>ユーザー名、パスワードが正しくありません。</p>
        @endif
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form method="post" action="{{url('login')}}">
            @csrf
            <label for="name">
                <p class="m-0 fw-bold">アカウント名</p>
                <input id="name" type="text" name="account_name" class="mb-3">
            </label>
            <br>
            <label for="pass">
                <p class="m-0 fw-bold">パスワード</p>
                <input id="pass" type="password" name="account_pass" class="mb-3">
            </label>
            <div class="d-flex align-items-center flex-column">
                <input type="submit" name="btn_login" value="ログイン" class="btn btn-primary">
            </div>
        </form>
    </div>
@endsection

