@extends('layouts.app')
@section('title', 'アイテム更新')
@section('body')
    <h1>アイテム更新</h1>
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <form method="post" action="{{url('items/update')}}/{{$data['id']}}">
        @csrf
        <input type="text" name="name" placeholder="{{$data['name']}}"><br>
        <input type="radio" name="class" value="consumables" @if($data['class'] === '消耗品' ) checked @endif>
        消耗品
        <input type="radio" name="class" value="equipment" @if($data['class'] === '装備品' ) checked @endif>
        装備品<br>
        <input type="number" name="effect_value" placeholder="{{$data['effect_value']}}"><br>
        <input type="text" name="text" placeholder="{{$data['text']}}"><br>
        <input type="submit" value="更新">
    </form>
    <br>
    <a href="{{url('accounts/index')}}">トップに戻る</a>
@endsection

