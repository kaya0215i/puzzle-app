@extends('layouts.app')
@section('title', 'アイテム一覧')
@section('body')
    <div class="d-flex align-items-center flex-column">
        <h1 class="m-2" style="width: 70%">アイテム一覧</h1>
        <table class="table table-striped table-bordered border-dark" style="width: 70%">
            <tr>
                <th class="text-center fs-5" style="width: 5%">ID</th>
                <th class="text-center fs-5">名前</th>
                <th class="text-center fs-5">種別</th>
                <th class="text-center fs-5">効果値</th>
                <th class="text-center fs-5">説明</th>
                <th class="text-center fs-5" style="width: 8%">操作</th>
            </tr>
            @foreach($items as $item)
                <tr>
                    <td class="text-center">{{$item['id']}}</td>
                    <td>{{$item['name']}}</td>
                    <td>{{$item['class']}}</td>
                    <td>{{$item['effect_value']}}</td>
                    <td>{{$item['text']}}</td>
                    <td class="d-flex justify-content-sm-between align-items-center">
                        <form method="post" action="{{url('items/confirm')}}/{{$item['id']}}">
                            @csrf
                            <input type="submit" value="削除" class="btn btn-danger">
                        </form>
                        <form method="post" action="{{url('items/edit')}}/{{$item['id']}}">
                            @csrf
                            <input type="submit" value="更新" class="btn btn-warning">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <br>
    {{$items->links('vendor.pagination.bootstrap-5')}}
    <div class="d-flex align-items-center flex-column">
        <a href="{{url('items/create')}}" class="btn btn-success">アイテム作成</a><br>
        <a href="{{url('accounts/index')}}" class="btn btn-primary">戻る</a>
    </div>
@endsection

