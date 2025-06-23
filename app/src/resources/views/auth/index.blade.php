@extends('layouts.app')
@section('title', 'ログイン')
@section('body')
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
        <p>ユーザー名</p>
        <input type="text" name="accountName">
        <p>パスワード</p>
        <input type="password" name="accountPass"><br>
        <input type="submit" name="btn_login" value="ログイン">
    </form>
@endsection

