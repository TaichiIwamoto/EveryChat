<?php
include(__DIR__ . "/../home/header.html");
include_once(__DIR__ . "/../connectDB.php");
if (!empty($_POST['submit'])) {
    if (!empty($_POST['mailAddress'])) {
        $mail = $_POST['mailAddress'];

        header('Location:./createAccountMail.php?mail=' . $mail);

        // $pass = $_POST['userPass'];
        // $pass = password_hash($pass, PASSWORD_DEFAULT);
        // $pdo = connect();
        // $sql = "INSERT INTO user_table (name,mail,userpass) VALUES (:name,:mail,:userpass)";
        // $stmt = $pdo->prepare($sql);
        // $stmt->bindParam("name", $_POST["userName"], PDO::PARAM_STR);
        // $stmt->bindParam("mail", $_POST["mailAddress"], PDO::PARAM_STR);
        // $stmt->bindParam("userpass", $pass, PDO::PARAM_STR);
        // $stmt->execute();
    }
}

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

                <div class="col-lg-3" id="center1">
                    メールアドレスで登録
                    <form action="" method="post">
                        <input class="form-control" type="email" placeholder="メールアドレス" name="mailAddress">
                        <input class="btn btn-primary" type="submit" value="確認メールを送信する" name="submit">
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
                <div class="col-lg-6" id="center3">
                    <p class="text-center">
                        RAMSNOISEに登録済みの方はこちら<br>
                        <button class="btn btn-primary" onclick="location.href='./login.php'">
                            ログイン
                        </button>
                    </p>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </section>
    </div>
</body>

</html>