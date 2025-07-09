@extends('layouts.app')
@section('title', 'ユーザー一覧')
@section('body')
    <div class="d-flex align-items-center flex-column">
        <h1 class="m-2" style="width: 70%">ユーザー一覧</h1>
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5" style="width: 5%">ID</th>
                <th class="text-center fs-5" style="width: 40%">ユーザー名</th>
                <th class="text-center fs-5">レベル</th>
                <th class="text-center fs-5">経験値</th>
                <th class="text-center fs-5">お金</th>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td class="text-center">{{$user['id']}}</td>
                    <td>
                        <a href="{{url('users/userInfo/')}}/{{$user['id']}}/userList/{{$users->currentPage()}}">{{$user['name']}}</a>
                    </td>
                    <td>{{$user['level']}}</td>
                    <td>{{$user['exp']}}</td>
                    @if(isset($user->detail->money))
                        <td>{{$user->detail->money}}</td>
                    @else
                        <td></td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    {{$users->links('vendor.pagination.bootstrap-5')}}
    <div class="d-flex justify-content-center">
        <a href="{{url('accounts/index')}}" class="btn btn-primary">戻る</a>
    </div>
@endsection

