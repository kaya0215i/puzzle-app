<html lang="ja">
<body>
<h1>管理者アカウント一覧</h1>
<table>
    <tr>
        <th>ID</th>
        <th>アカウント名</th>
    </tr>
    @foreach($accounts as $account)
        <tr>
            <td>{{$account['id']}}</td>
            <td>{{$account['name']}}</td>
        </tr>
    @endforeach
</table>
<a href="{{url('accounts/index')}}">戻る</a>
</body>
</html>
