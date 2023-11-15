<?php
$mailAddress = $_GET['mail'];

if (!empty($_POST['userName']) && !empty($_POST['userPass']) && !empty($_POST['userPassCheck'])) {
    header("Location:./creatAccountSettingDetail.php");
} else {

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
    <link rel="stylesheet" href="./creatAccountSetting.css" type="text/css">
    <title>ユーザー登録：プロフィール設定</title>
</head>

<body>
    <div class="container-fluid">
        <section>
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6" id="userRegisterStr">
                    <h1>プロフィール設定</h1>
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
                        <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
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
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6" id="center1">
                    <span id="inline1">「<span class="red">*</span>」は必須入力項目です</span>


                    <form action="" method="post">
                        <p>
                            ユーザーネーム<span class="red">*</span>
                            <input id="userName" type="text" name="userName" placeholder="ラムズ太郎"
                                class="form-control form">
                        </p>
                        <p>
                            パスワード<span class="red">*</span>
                            <input id="password" type="password" name="userPass" placeholder="*******"
                                class="form-control form">
                        </p>
                        <p>
                            パスワード確認<span class="red">*</span>
                            <input id="passwordCheck" type="password" name="userPassCheck" placeholder="*******"
                                class="form-control form">
                        </p>
                        <div hidden="true" id="alertPop" class="alert alert-danger  align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16">
                                <path
                                    d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>

                        </div>

                        <button type="submit" name="submit" id="submit" class="btn btn-success">登録</button>
                    </form>
                </div>
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
    <script src="./creatAccountSetting.js"></script>
</body>

</html>