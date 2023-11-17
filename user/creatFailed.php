<?php
$mailAddress = $_GET['mail'];
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
    <link rel="stylesheet" href="./creatAccountMail.css" type="text/css">

    <title>新規登録</title>
</head>

<body>
    <div class="container-fluid" id="body">
        <section>
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6" id="userRegisterStr">
                    <h1>メール送信失敗</h1>
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

                <div class="col-lg-6" id="center1">
                    <div id="centerIn">
                        <h4><b>下記のメールアドレスは既に登録されています。</h4></b><br>
                        <input class="form-control" type="text" readonly="true" value="<?php echo $mailAddress; ?>">
                        <p>
                            パスワードを忘れた方はこちらから<br>
                            <button class="btn btn-success"
                                onclick="location.href='./resetPassword.php?mail=<?php echo $mailAddress; ?>'">パスワード再設定</button>
                        </p>
                    </div>
                </div>
                <!-- 画面中央部分 -->

                <!-- 画面右部分 -->
                <div class="col-lg-3">
                </div>
                <!-- 画面右部分 -->
            </div>
        </section>


    </div>

</body>

</html>