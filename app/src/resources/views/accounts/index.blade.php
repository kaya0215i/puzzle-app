@extends('layouts.app')
@section('title', '管理トップ')
@section('body')
    <h1>管理画面</h1>
    <a href="{{url('accounts/accountList')}}">管理者アカウント一覧</a><br>
    <a href="{{url('users/userList')}}">ユーザー一覧</a><br>
    <a href="{{url('items/index')}}">アイテム一覧</a><br>
    <a href="{{url('users/userItemList')}}">所持アイテム一覧</a><br>
    <br>
    <a href="{{url('logout')}}">ログアウト</a>
@endsection
