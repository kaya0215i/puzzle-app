<html lang="ja">
<body>
<h1>所持アイテム一覧</h1>
<table>
    <tr>
        <th>ID</th>
        <th>ユーザー名</th>
        <th>アイテム名</th>
        <th>所持数</th>
    </tr>
    @foreach($data as $column)
        <tr>
            <td>{{$column['id']}}</td>
            <td>{{$column['userName']}}</td>
            <td>{{$column['itemName']}}</td>
            <td>{{$column['amount']}}</td>
        </tr>
    @endforeach
</table>
<a href="{{url('accounts/index')}}">戻る</a>
</body>
</html>

