@extends('layouts.app')
@section('title', 'フィールド一覧')
@section('body')
    <div class="d-flex align-items-center flex-column">
        <h1 class="m-2" style="width: 70%">フィールド一覧</h1>
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5">id</th>
                <th class="text-center fs-5">ユーザーid</th>
                <th class="text-center fs-5">ユーザー名</th>
                <th class="text-center fs-5">ランク</th>
                <th class="text-center fs-5">ラウンド</th>
                <th class="text-center fs-5">作成日</th>

            </tr>
            @foreach ($fields as $field)
                <tr>
                    <td class="text-center">
                        <a href="{{url('fields/fieldInfo/')}}/{{$field->id}}/{{$fields->currentPage()}}">{{$field->id}}</a>
                    </td>
                    <td>{{$field->user_id}}</td>
                    <td>{{$field->users->name}}</td>
                    <td>{{$field->ranks->name}}</td>
                    <td>{{$field->round}}</td>
                    <td>{{$field->created_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    {{$fields->links('vendor.pagination.bootstrap-5')}}
    <div class="d-flex align-items-center flex-column">
        <a href="{{url('accounts/index')}}" class="btn btn-primary">戻る</a>
    </div>
@endsection
