<?php
include_once(__DIR__ . "/../connectDB.php");
$pdo = connect();
$login = true;

if (!empty($_POST['check'])) {
    //フォームから受け取った値を変数に代入
    $password = $_POST['userPass'];
    $mail = $_POST['userMail'];

    //DBからユーザ情報を取得
    $sql = 'SELECT * FROM user_table WHERE mail = :mail';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam('mail', $mail, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll();

    //パスワード判定
    if (password_verify($password, $result[0]['userpass'])) {
        $name = $result[0]['name'];
        ?>
        <script>
            var name = '<?php echo $name; ?>';
            sessionStorage.setItem('userName', name);
            window.location.href = "../home/ramhome.php";
        </script>
        <?php
    } else {
        $login = false;
    }
}

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
    <link rel="stylesheet" href="./creatAccount.css" type="text/css">

    <title>ログイン</title>
</head>

<body>
    <div class="container-fluid" id="body">
        <section>
            <div class="row">
                <!-- 左 -->
                <div class="col-lg-3">
                </div>
                <!-- 中央 -->
                <div class="col-lg-6" id="userRegisterStr">
                    <h1>ログイン</h1>
                </div>
                <!-- 右 -->
                <div class="col-lg-3">
                </div>
            </div>
        </section>
        <section>
            <div class="row">
                <!-- 左 -->
                <div class="col-lg-3">
                </div>
                <!-- 中央 -->
                <div class="col-lg-3" id="center1">
                    ログインIDとパスワードを入力してください
                    <form action="" method="post">
                        <input class="form-control" type="text" placeholder="ログインID" name="userMail">
                        <input class="form-control" type="password" placeholder="パスワード" name="userPass">
                        <input class="btn btn-primary" type="submit" value="ログイン" name="check">
                    </form>
                    <?php
                    //ログイン失敗時
                    if ($login == false) {
                        ?>
                        <div class="alert alert-primary d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                            <div>
                                ログインID又はパスワードが間違っています
                            </div>
                        </div>
                        <a href="./resetPass.php">
                            パスワードを忘れた方はこちら
                        </a>
                        <?php
                    }
                    ?>
                </div>
                <div class="col-lg-3" id="center2">
                    他サービスでログイン
                </div>
                <!-- 右 -->
                <div class="col-lg-3">
                </div>
        </section>
        <section>
            <div class="row">
                <!-- 左 -->
                <div class="col-lg-3">
                </div>
                <!-- 中央 -->
                <div class="col-lg-6" id="center3">
                    <p class="text-center">
                        アカウントをまだお持ちでない方はこちらから<br>
                        <button class="btn btn-primary" onclick="location.href='./creatAccount.php'">新規登録</button>
                    </p>
                </div>
                <!-- 右 -->
                <div class="col-lg-3">
                </div>
            </div>

        </section>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="./login.js"></script>
</body>

</html>