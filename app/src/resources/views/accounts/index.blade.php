<html lang="ja">
<body>
<h1>{{$title}}</h1>
<table>
    <tr>
        <th>名前</th>
        <th>パスワード</th>
    </tr>
    @foreach($accounts as $account)
        <tr>
            <td>{{$account['name']}}</td>
            <td>{{$account['password']}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
