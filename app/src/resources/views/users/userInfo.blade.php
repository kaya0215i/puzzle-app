@extends('layouts.app')
@section('title', 'ユーザー情報')
@section('body')
    <h1>ユーザー情報</h1>
    <table>
        <tr>
            <th>id</th>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <th>名前</th>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <th>レベル</th>
            <td>{{$user->level}}</td>
        </tr>
        <tr>
            <th>経験値</th>
            <td>{{$user->exp}}</td>
        </tr>
        <tr>
            <th>作成日</th>
            <td>{{$user->created_at}}</td>
        </tr>
        <tr>
            <th>最終更新日</th>
            <td>{{$user->updated_at}}</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <th>アイテム名</th>
            <th>所持数</th>
        </tr>
        @foreach($item as $column)
            <tr>
                <td>{{$column['itemName']}}</td>
                <td>{{$column['amount']}}</td>
            </tr>
        @endforeach
    </table>
    <br>
    {{$item->links('vendor.pagination.bootstrap-5')}}
    @if($from === 'userList')
        <a href="{{url('users/userList?page=')}}{{$page}}">戻る</a>
    @elseif($from === 'userItemList')
        <a href="{{url('users/userItemList?page=')}}{{$page}}">戻る</a>
    @endif
@endsection
