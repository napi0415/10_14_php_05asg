<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WBSC U-15日本代表トライアウト入力 ログイン画面</title>
</head>

<body>
    <div class="text-center">

        <form action="todo_login_act.php" method="POST">
            <img class="mb-1" src="img/samurai_logo.png" alt="" width="300" height="300">
            <fieldset>
                <legend>WBSC U-15日本代表トライアウト入力 ログイン画面</legend>
                <div>
                    username: <input type="text" name="username">
                </div>
                <div>
                    password: <input type="text" name="password">
                </div>
                <div>
                    <button>Login</button>
                </div>
                <a href="todo_register.php">or register</a>
            </fieldset>
        </form>

</body>

</html>