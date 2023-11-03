<?php
include(__DIR__ . "/../home/header.html");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../home/ramhome.css" type="text/css">
    <link rel="stylesheet" href="./createAccount.css" type="text/css">
    <title>新規登録</title>
</head>

<body>

    <div class="container-fluid" id="body">
        <section>
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6" id="userRegisterStr">
                    <h1>ユーザ登録 (無料)</h1>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </section>

        <section>
            <div class="row">
                <!-- 画面左部分 -->
                <div class="col-lg-3">
                </div>
                <!-- 画面左部分 -->

                <!-- 画面中央部分 -->

                <div class="col-lg-3" id="center">
                    メールアドレスで登録
                    <form action="" method="post">
                        <input class="form-control" type="text" placeholder="ユーザー名" name="userName">
                        <input class="form-control" type="mail" placeholder="メールアドレス" name="mailAddress">
                        <input class="form-control" type="password" placeholder="パスワード" name="userPass">
                    </form>
                </div>

                <div class="col-lg-3" id="center2">
                    他サービスで登録
                </div>
                <!-- 画面中央部分 -->

                <!-- 画面右部分 -->
                <div class="col-lg-3">
                </div>
                <!-- 画面右部分 -->
            </div>
        </section>

        <section>
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6" id="login">
                    <div class="row">
                        ログイン
                    </div>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </section>
    </div>
</body>

</html>