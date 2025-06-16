<html lang="ja">
<body>
<h1>ユーザー一覧</h1>
<table>
    <tr>
        <th>ID</th>
        <th>ユーザー名</th>
        <th>レベル</th>
        <th>経験値</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['level']}}</td>
            <td>{{$user['exp']}}</td>
        </tr>
    @endforeach
</table>
<a href="{{url('accounts/index')}}">戻る</a>
</body>
</html>

