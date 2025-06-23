@extends('layouts.app')
@section('title', 'アイテム作成')
@section('body')
    <h1>アイテム作成</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form action="{{url('items/store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="名前を入力"><br>
        <input type="radio" name="class" value="consumables" checked>
        消耗品
        <input type="radio" name="class" value="equipment">
        装備品<br>
        <input type="number" name="effect_value" placeholder="効果値を入力"><br>
        <input type="text" name="text" placeholder="アイテム説明を入力"><br>
        <input type="submit" value="登録">
    </form>
    <br>
    <a href="{{url('accounts/index')}}">戻る</a>
@endsection

