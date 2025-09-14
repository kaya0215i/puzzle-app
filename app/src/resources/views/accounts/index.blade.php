@extends('layouts.app')
@section('title', '管理トップ')
@section('body')
    <div class="d-flex align-items-center flex-column">
        <h1 class="m-4">管理トップ</h1>
        <a href="{{url('accounts/accountList')}}" class="btn btn-primary">管理者アカウント一覧</a><br>
        <a href="{{url('users/index')}}" class="btn btn-primary">ユーザー一覧</a><br>
        <a href="{{url('items/index')}}" class="btn btn-primary">アイテム一覧</a><br>
        <a href="{{url('fields/index')}}" class="btn btn-primary">フィールド一覧</a><br>
        <br>
        <a href="{{url('logout')}}" class="btn btn-danger">ログアウト</a>
    </div>
@endsection
