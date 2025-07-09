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
            <label for="consumables">
                <input id="consumables" type="radio" name="class" value="consumables" checked class="mb-3">
                消耗品
            </label>
            <label for="equipment">
                <input id="equipment" type="radio" name="class" value="equipment" class="mb-3">
                装備品
            </label>
            <br>
            <label for="effect_value">
                <p class="m-0 fw-bold">効果値</p>
                <input id="effect_value" type="number" name="effect_value" class="mb-3">
            </label>
            <br>
            <label for="text">
                <p class="m-0 fw-bold">アイテム説明</p>
                <input id="text" type="text" name="text" class="mb-3">
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

