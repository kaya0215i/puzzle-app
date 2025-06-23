@extends('layouts.app')
@section('title', 'ユーザー一覧')
@section('body')
    <h1>ユーザー一覧</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>ユーザー名</th>
            <th>レベル</th>
            <th>経験値</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>
                    <a href="{{url('users/userInfo/')}}/{{$user['id']}}/userList/{{$users->currentPage()}}">{{$user['name']}}</a>
                </td>
                <td>{{$user['level']}}</td>
                <td>{{$user['exp']}}</td>
            </tr>
        @endforeach
    </table>
    <br>
    {{$users->links('vendor.pagination.bootstrap-5')}}
    <a href="{{url('accounts/index')}}">戻る</a>
@endsection

