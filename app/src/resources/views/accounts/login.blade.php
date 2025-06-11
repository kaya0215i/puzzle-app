<html lang="ja">
<body>
@if ($error_id === '1')
    <p>ユーザー名、パスワードが正しくありません。</p>
@endif
<form method="post" action="{{url('doLogin')}}">
    @csrf
    <p>ユーザー名</p>
    <input type="text" name="userName">
    <p>パスワード</p>
    <input type="password" name="userPass"><br>
    <input type="submit" name="btn_login" value="ログイン">
</form>
</body>
</html>
