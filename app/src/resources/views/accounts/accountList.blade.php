@extends('layouts.app')
@section('title', '管理者アカウント一覧')
@section('body')
    <div class="d-flex align-items-center flex-column">
        <h1 class="m-2" style="width: 70%">管理者アカウント一覧</h1>
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5">ID</th>
                <th class="text-center fs-5">アカウント名</th>
                <th class="text-center fs-5">パスワードハッシュ</th>
            </tr>
            @foreach($accounts as $account)
                <tr>
                    <td class="text-center">{{$account['id']}}</td>
                    <td>{{$account['name']}}</td>
                    <td>{{$account['password']}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    {{$accounts->links('vendor.pagination.bootstrap-5')}}
    <div class="d-flex justify-content-center">
        <a href="{{url('accounts/index')}}" class="btn btn-primary">戻る</a>
    </div>
@endsection
