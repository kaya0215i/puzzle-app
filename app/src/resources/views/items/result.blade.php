@extends('layouts.app')
@section('title', '結果')
@section('body')
    <h1 class="m-2">{{$title}}</h1>
    <div class="d-flex align-items-center flex-column">
        <h2>{{$text}}</h2>

        @if(!empty($oldItem) && !empty($newItem))
            <table class="table table-striped table-bordered border-dark" style="width: 30%">
                <tr>
                    <th></th>
                    <th class="text-center fs-5">変更前</th>
                    <th class="text-center fs-5">変更後</th>
                </tr>
                <tr>
                    <th class="text-center fs-5">アイテム名</th>
                    <td>{{$oldItem->name}}</td>
                    <td>{{$newItem->name}}</td>
                </tr>
                <tr>
                    <th class="text-center fs-5">種別</th>
                    <td>
                        @if($oldItem->is_weapon === 1)
                            武器
                        @elseif($oldItem->is_weapon === 0)
                            アイテム
                        @endif
                    </td>
                    <td>
                        @if($newItem->is_weapon === true)
                            武器
                        @elseif($newItem->is_weapon === false)
                            アイテム
                        @endif
                    </td>
                </tr>
                <tr>
                    <th class="text-center fs-5">効果値</th>
                    <td>{{$oldItem->amount}}</td>
                    <td>{{$newItem->amount}}</td>
                </tr>
                <tr>
                    <th class="text-center fs-5">エネルギー回復</th>
                    <td>{{$oldItem->energy_up}}</td>
                    <td>{{$newItem->energy_up}}</td>
                </tr>
                <tr>
                    <th class="text-center fs-5">エネルギーコスト</th>
                    <td>{{$oldItem->energy_cost}}</td>
                    <td>{{$newItem->energy_cost}}</td>
                </tr>
                <tr>
                    <th class="text-center fs-5">クールタイム</th>
                    <td>{{$oldItem->cool_time}}</td>
                    <td>{{$newItem->cool_time}}</td>
                </tr>
                <tr>
                    <th class="text-center fs-5">アイテム説明</th>
                    <td>{{$oldItem->text}}</td>
                    <td>{{$newItem->text}}</td>
                </tr>
                <tr>
                    <th class="text-center fs-5">値段</th>
                    <td>{{$oldItem->price}}</td>
                    <td>{{$newItem->price}}</td>
                </tr>
            </table>
        @endif

        @if(!empty($id))
            <form method="post" action="{{url('items/destroy')}}/{{$id}}">
                @csrf
                <br>
                <input type="submit" value="削除" class="btn btn-danger">
            </form>
        @endif
    </div>
    <br><br>
    <div class="d-flex align-items-center flex-column">
        <a href="{{url('items/index')}}" class="btn btn-primary">アイテム一覧</a><br>
        <a href="{{url('accounts/index')}}" class="btn btn-primary">トップに戻る</a>
    </div>
@endsection


