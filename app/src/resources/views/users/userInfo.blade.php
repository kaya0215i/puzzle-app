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
                <th class="text-center fs-5">ランク</th>
                <td>{{$user->ranks->name}}</td>
            </tr>
            <tr>
                <th class="text-center fs-5">ランクポイント</th>
                <td>{{$user->rank_point}}</td>
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
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5">フレンド</th>
            </tr>
            @if($user->friends()->isEmpty())
                <tr>
                    <td class="text-center">無し</td>
                </tr>
            @endif
            @foreach($user->friends() as $friend)
                <tr>
                    <td class="text-center">{{$friend->name}}</td>
                </tr>
            @endforeach
        </table>
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5">フレンド依頼</th>
            </tr>
            @if($user->arrived_friend_requests()->isEmpty())
                <tr>
                    <td class="text-center">無し</td>
                </tr>
            @endif
            @foreach($user->arrived_friend_requests() as $request)
                <tr>
                    <td class="text-center">{{$request->name}}</td>
                </tr>
            @endforeach
        </table>
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5">フレンド申請中</th>
            </tr>
            @if($user->applied_friend_requests()->isEmpty())
                <tr>
                    <td class="text-center">無し</td>
                </tr>
            @endif
            @foreach($user->applied_friend_requests() as $requested)
                <tr>
                    <td class="text-center">{{$requested->name}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    <div class="d-flex align-items-center flex-column">
        @if($from === 'userList')
            <a href="{{url('users/index?page=')}}{{$page}}" class="btn btn-primary">戻る</a>
        @elseif($from === 'userItemList')
            <a href="{{url('userItems/index?page=')}}{{$page}}" class="btn btn-primary">戻る</a>
        @endif
    </div>
@endsection
