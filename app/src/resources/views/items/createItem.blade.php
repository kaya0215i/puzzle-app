@extends('layouts.app')
@section('title', 'アイテム作成')
@section('body')
    <h1 class="m-2 text-center">アイテム作成</h1>
    <div class="d-flex align-items-center flex-column">
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{url('items/store')}}" method="post">
            @csrf
            <label for="name">
                <p class="m-0 fw-bold">アイテム名</p>
                <input id="name" type="text" name="name" class="mb-3">
            </label>
            <br>
            <label for="weapon">
                <input id="weapon" type="radio" name="is_weapon" value="weapon" checked class="mb-3">
                武器
            </label>
            <label for="item">
                <input id="item" type="radio" name="is_weapon" value="item" class="mb-3">
                アイテム
            </label>
            <br>
            <label for="amount">
                <p class="m-0 fw-bold">効果値</p>
                <input id="amount" type="number" name="amount" class="mb-3">
            </label>
            <br>
            <label for="energy_up">
                <p class="m-0 fw-bold">エネルギー回復</p>
                <input id="energy_up" type="number" name="energy_up" class="mb-3">
            </label>
            <br>
            <label for="energy_cost">
                <p class="m-0 fw-bold">エネルギーコスト</p>
                <input id="energy_cost" type="number" name="energy_cost" class="mb-3">
            </label>
            <br>
            <label for="cool_time">
                <p class="m-0 fw-bold">クールタイム</p>
                <input id="cool_time" type="number" name="cool_time" class="mb-3">
            </label>
            <br>
            <label for="text">
                <p class="m-0 fw-bold">アイテム説明</p>
                <input id="text" type="text" name="text" class="mb-3">
            </label>
            <br>
            <label for="price">
                <p class="m-0 fw-bold">値段</p>
                <input id="price" type="number" name="price" class="mb-3">
            </label>
            <br>
            <div class="d-flex align-items-center flex-column">
                <input type="submit" value="登録" class="btn btn-success">
            </div>
        </form>
    </div>
    <br><br>
    <div class="d-flex align-items-center flex-column">
        <a href="{{url('items/index')}}" class="btn btn-primary">戻る</a><br>
        <a href="{{url('accounts/index')}}" class="btn btn-primary">トップに戻る</a>
    </div>
@endsection

