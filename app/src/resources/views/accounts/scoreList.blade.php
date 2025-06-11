<html lang="ja">
<body>
<h1>スコア一覧</h1>
<table>
    <tr>
        <th>ID</th>
        <th>ユーザー名</th>
        <th>スコア</th>
    </tr>
    @foreach($scores as $score)
        <tr>
            <td>{{$score['id']}}</td>
            <td>{{$score['name']}}</td>
            <td>{{$score['score']}}</td>
        </tr>
    @endforeach
</table>
<a href="{{url('accounts/admin')}}">戻る</a>
</body>
</html>
