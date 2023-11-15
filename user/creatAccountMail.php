<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require(__DIR__ . '/../vendor/autoload.php');

try {
    $mail = new PHPMailer(true);
    // 他のメール送信関連のコード
} catch (Exception $e) {
    echo 'エラー: ' . $e->getMessage();
}

$mailAddress = $_GET['mail'];


try {
    // $mail->SMTPDebug = 2; //デバッグ用
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.lolipop.jp';
    $mail->Username = 'info@ramnoisy.com';
    $mail->Password = 'gsK01Tf9s1BC-G9h84islg';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->CharSet = "utf-8";
    $mail->Encoding = "base64";
    $mail->setFrom('info@ramnoisy.com', 'RAMSNOISE事務局');
    $mail->addAddress($mailAddress, "aa");
    $mail->isHTML(true);
    $mail->Subject = '【RAMSNOISE】ユーザ登録のご確認';
    $mail->Body = 'RAMSNOISEアカウントをご利用いただきありがとうございます。<br><br>'
        . '登録手続きはまだ完了していません。<br>'
        . '以下のボタンからサイトにアクセスして、引き続き登録の手続きをお願い致します。<br>'
        . '<a href="https://ramnoisy.com/user/creatAccountSetting?mail=' . $mailAddress . '"><button style="background-color: #008CBA; color: white; padding: 10px; border: none; cursor: pointer;">登録へ</button></a>';

    //メール送信
    $mail->send();
    // echo '成功';

} catch (Exception $e) {
    // echo $mailAddress;
    // echo '失敗: ', $mail->ErrorInfo;
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
    <link rel="stylesheet" href="./creatAccountMail.css" type="text/css">
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
                <div class="col-lg-3">
                </div>
                <div class="col-lg-1" id="progress-out">
                </div>
                <div class="col-lg-4" id="progress-out">
                    <p id="progress-text">メールアドレス入力>メール認証>プロフィール設定</p>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="33"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                <div class="col-lg-1" id="progress-out">
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

                        <input class="form-control" type="text" readonly="true" value="<?php echo $mailAddress; ?>">
                        メールに記載されているURLにアクセスして、登録を完了してください。<br><br>
                        ※確認メールは info@ramnoisy.com から送信いたします。<br>
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