@extends('layouts.app')
@section('title', '結果')
@section('body')
    <h1>{{$title}}</h1>
    <p>{{$text}}</p>
    @if(!empty($id))
        <form method="post" action="{{url('items/destroy')}}/{{$id}}">
            @csrf
            <input type="submit" value="削除">
        </form>
    @endif
    <br>
    <a href="{{url('items/index')}}">アイテム一覧</a><br>
    <a href="{{url('accounts/index')}}">トップに戻る</a>
@endsection


