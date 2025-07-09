@extends('layouts.app')
@section('title', 'フィールド情報')
@section('body')
    <div class="d-flex align-items-center flex-column">
        <h1 class="m-2" style="width: 70%">フィールド情報</h1>
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5" style="width: 50%">フィールドid</th>
                <td>{{$field->id}}</td>
            </tr>
            <tr>
                <th class="text-center fs-5">ユーザーid</th>
                <td>{{$field->user_id}}</td>
            </tr>
            <tr>
                <th class="text-center fs-5">ユーザー名</th>
                <td>{{$field->users->name}}</td>
            </tr>
        </table>
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5" style="width: 25%">X座標</th>
                <th class="text-center fs-5" style="width: 25%">Y座標</th>
                <th class="text-center fs-5">オブジェクトの種類</th>
            </tr>
            @foreach($field->objects as $object)
                <tr>
                    <td>{{$object->pivot->pos_X}}</td>
                    <td>{{$object->pivot->pos_Y}}</td>
                    <td>{{$object->name}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    <div class="d-flex align-items-center flex-column">
        <a href="{{url('fields/index?page=')}}{{$page}}" class="btn btn-primary">戻る</a>
    </div>
@endsection
