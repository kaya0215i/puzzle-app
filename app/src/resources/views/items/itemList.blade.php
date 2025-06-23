@extends('layouts.app')
@section('title', 'アイテム一覧')
@section('body')
    <h1>アイテム一覧</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>名前</th>
            <th>種別</th>
            <th>効果値</th>
            <th>説明</th>
            <th>操作</th>
        </tr>
        @foreach($items as $item)
            <tr>
                <td>{{$item['id']}}</td>
                <td>{{$item['name']}}</td>
                <td>{{$item['class']}}</td>
                <td>{{$item['effect_value']}}</td>
                <td>{{$item['text']}}</td>
                <td style="display: flex">
                    <form method="post" action="{{url('items/confirm')}}/{{$item['id']}}">
                        @csrf
                        <input type="submit" value="削除">
                    </form>
                    <form method="post" action="{{url('items/edit')}}/{{$item['id']}}">
                        @csrf
                        <input type="submit" value="更新">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <br>
    {{$items->links('vendor.pagination.bootstrap-5')}}
    <a href="{{url('items/create')}}">アイテム作成</a><br>
    <a href="{{url('accounts/index')}}">戻る</a>
@endsection

