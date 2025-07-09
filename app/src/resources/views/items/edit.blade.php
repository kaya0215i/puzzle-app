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
            <label for="consumables">
                <input id="consumables" type="radio" name="class" value="consumables"
                       @if($data['class'] === '消耗品' ) checked
                       @endif class="mb-3">
                消耗品
            </label>
            <label for="equipment">
                <input id="equipment" type="radio" name="class" value="equipment"
                       @if($data['class'] === '装備品' ) checked
                       @endif class="mb-3">
                装備品
            </label>
            <br>
            <label for="effect_value">
                <p class="m-0 fw-bold">効果値</p>
                <input id="effect_value" type="number" name="effect_value" placeholder="{{$data['effect_value']}}"
                       class="mb-3">
            </label>
            <br>
            <label for="text">
                <p class="m-0 fw-bold">アイテム説明</p>
                <input id="text" type="text" name="text" placeholder="{{$data['text']}}" class="mb-3">
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

