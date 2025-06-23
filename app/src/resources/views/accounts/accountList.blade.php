@extends('layouts.app')
@section('title', '管理者アカウント一覧')
@section('body')
    <h1>管理者アカウント一覧</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>アカウント名</th>
            <th>パスワードハッシュ</th>
        </tr>
        @foreach($accounts as $account)
            <tr>
                <td>{{$account['id']}}</td>
                <td>{{$account['name']}}</td>
                <td>{{$account['password']}}</td>
            </tr>
        @endforeach
    </table>
    <br>
    {{$accounts->links('vendor.pagination.bootstrap-5')}}
    <a href="{{url('accounts/index')}}">戻る</a>
@endsection
