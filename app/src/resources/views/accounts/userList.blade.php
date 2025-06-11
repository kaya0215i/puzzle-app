<html lang="ja">
<body>
<h1>ユーザー一覧</h1>
<table>
    <tr>
        <th>ID</th>
        <th>ユーザー名</th>
    </tr>
    @foreach($accounts as $account)
        <tr>
            <td>{{$account['id']}}</td>
            <td>{{$account['name']}}</td>
        </tr>
    @endforeach
</table>
<a href="{{url('accounts/admin')}}">戻る</a>
</body>
</html>

