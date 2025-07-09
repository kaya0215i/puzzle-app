@extends('layouts.app')
@section('title', 'ユーザー情報')
@section('body')
    <div class="d-flex align-items-center flex-column">
        <h1 class="m-2" style="width: 70%">ユーザー情報</h1>
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5" style="width: 20%">id</th>
                <td>{{$user->id}}</td>
            </tr>
            <tr>
                <th class="text-center fs-5">名前</th>
                <td>{{$user->name}}</td>
            </tr>
            <tr>
                <th class="text-center fs-5">レベル</th>
                <td>{{$user->level}}</td>
            </tr>
            <tr>
                <th class="text-center fs-5">経験値</th>
                <td>{{$user->exp}}</td>
            </tr>
            <tr>
                <th class="text-center fs-5">作成日</th>
                <td>{{$user->created_at}}</td>
            </tr>
            <tr>
                <th class="text-center fs-5">最終更新日</th>
                <td>{{$user->updated_at}}</td>
            </tr>
        </table>
        <br>
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5">アイテム名</th>
                <th class="text-center fs-5" style="width: 10%">所持数</th>
            </tr>
            @foreach($item as $column)
                <tr>
                    <td>{{$column['itemName']}}</td>
                    <td class="text-end">{{$column['amount']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    {{$item->links('vendor.pagination.bootstrap-5')}}
    <div class="d-flex align-items-center flex-column">
        @if($from === 'userList')
            <a href="{{url('users/index?page=')}}{{$page}}" class="btn btn-primary">戻る</a>
        @elseif($from === 'userItemList')
            <a href="{{url('userItems/index?page=')}}{{$page}}" class="btn btn-primary">戻る</a>
        @endif
    </div>
@endsection
