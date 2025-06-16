<html lang="ja">
<body>
<h1>アイテム一覧</h1>
<table>
    <tr>
        <th>ID</th>
        <th>名前</th>
        <th>種別</th>
        <th>効果値</th>
        <th>説明</th>
    </tr>
    @foreach($items as $item)
        <tr>
            <td>{{$item['id']}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['class']}}</td>
            <td>{{$item['effect_value']}}</td>
            <td>{{$item['text']}}</td>
        </tr>
    @endforeach
</table>
<a href="{{url('accounts/index')}}">戻る</a>
</body>
</html>

