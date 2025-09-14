@extends('layouts.app')
@section('title', 'アイテム更新')
@section('body')
    <h1 class="m-2 text-center">アイテム更新</h1>
    <div class="d-flex align-items-center flex-column">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form method="post" action="{{url('items/update')}}/{{$data['id']}}">
            @csrf
            <label for="name">
                <p class="m-0 fw-bold">アイテム名</p>
                <input id="name" type="text" name="name" placeholder="{{$data['name']}}" class="mb-3">
            </label><br>
            <label for="weapon">
                <input id="weapon" type="radio" name="is_weapon" value="weapon"
                       @if($data['is_weapon'] === 1 ) checked
                       @endif class="mb-3">
                武器
            </label>
            <label for="item">
                <input id="item" type="radio" name="is_weapon" value="item"
                       @if($data['is_weapon'] === 0 ) checked
                       @endif class="mb-3">
                アイテム
            </label>
            <br>
            <label for="amount">
                <p class="m-0 fw-bold">効果値</p>
                <input id="amount" type="number" name="amount" placeholder="{{$data['amount']}}"
                       class="mb-3">
            </label>
            <br>
            <label for="energy_up">
                <p class="m-0 fw-bold">エネルギー回復</p>
                <input id="energy_up" type="number" name="energy_up" placeholder="{{$data['energy_up']}}"
                       class="mb-3">
            </label>
            <br>
            <label for="energy_cost">
                <p class="m-0 fw-bold">エネルギーコスト</p>
                <input id="energy_cost" type="number" name="energy_cost" placeholder="{{$data['energy_cost']}}"
                       class="mb-3">
            </label>
            <br>
            <label for="cool_time">
                <p class="m-0 fw-bold">クールタイム</p>
                <input id="cool_time" type="number" name="cool_time" placeholder="{{$data['cool_time']}}"
                       class="mb-3">
            </label>
            <br>
            <label for="text">
                <p class="m-0 fw-bold">アイテム説明</p>
                <input id="text" type="text" name="text" placeholder="{{$data['text']}}" class="mb-3">
            </label>
            <br>
            <label for="price">
                <p class="m-0 fw-bold">値段</p>
                <input id="price" type="number" name="price" placeholder="{{$data['price']}}"
                       class="mb-3">
            </label>
            <br>
            <div class="d-flex align-items-center flex-column">
                <input type="submit" value="更新" class="btn btn-warning">
            </div>
        </form>
    </div>
    <br><br>
    <div class="d-flex align-items-center flex-column">
        <a href="{{url('items/index')}}" class="btn btn-primary">戻る</a><br>
        <a href="{{url('accounts/index')}}" class="btn btn-primary">トップに戻る</a>
    </div>
@endsection

