<?php
$mail = $_GET['mail'];

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
    <title>ユーザー登録：メール送信</title>
</head>

<body>
    <div class="container-fluid" id="body">
        <section>
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6" id="userRegisterStr">
                    <h1>メール送信完了</h1>
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
                        <h4><b>下記のメールアドレス宛に、確認メールをお送りしました。</h4></b><br>

                        <input class="form-control" type="text" readonly="true" value="<?php echo $mail; ?>">

                        メールに記載されているURLにアクセスして、登録を完了してください。<br><br>
                        ※確認メールは ramsnoise@com.jp から送信いたします。<br>
                        ※登録完了手続きはメール送信から24時間以内に行ってください。<br>
                        ※メールが届かない場合は、迷惑メールなどに割り振られていないかご確認ください。
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