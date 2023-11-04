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
    <link rel="stylesheet" href="./settingProfile.css" type="text/css">
    <title>RAMSNOISE-PROFILE</title>
</head>

<body>
    <!-- パンくず -->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../home/ramhome.php">ホーム</a></li>
            <li class="breadcrumb-item">
                マイプロフィール
            </li>
        </ol>
    </nav>
    <!-- パンくず -->
    <div class="container-fluid">
        <div class="row">
            <!-- 画面左部分 -->
            <div class="col-lg-4">
            </div>
            <!-- 画面左部分 -->

            <!-- 画面中央 -->
            <div class="col-lg-4" id="profileCenter">
                <h1 id="userName">$UserNickName</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-fluid" src="../resource/guest.jpg" id="userImage" alt="プロフィール画像">
                        <p hidden="true" id="userImageChangeText">
                            <変更>
                        </p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-8">
                    </div>
                    <div class="col-lg-4">
                        <div class="float-right">
                            <button class="btn btn-primary ">
                                プロフィール閲覧
                            </button>
                        </div>
                    </div>
                </div>

                <p>
                    本名
                    <input class="form-control" type="text" placeholder="ラム太郎" name="userName">
                </p>

                <p>
                    ニックネーム
                    <input class="form-control" type="text" placeholder="ラムラック" name="userNickName">
                </p>

                <p>
                    URL
                    <input class="form-control" type="url" placeholder="https://ram.com/ramtaro" name="userURL">
                </p>

                <!-- 誕生日設定 -->
                <p>
                    誕生日
                <div class="row" id="BirthPullDown">
                    <!-- 年 -->
                    <div class="dropdown">
                        <button name="yearButton" class="btn btn-outline-secondary dropdown-toggle  dropdown-select"
                            type="button" id="yearButton" data-toggle="dropdown" aria-expanded="false">
                        </button>年
                        <ul id="yearPullDown" class="dropdown-menu dropdown-scrollable" aria-labelledby="yearButton">
                        </ul>
                    </div>
                    <!-- 年 -->

                    <!-- 月 -->
                    <div class="dropdown">
                        <button name="monthButton" class="btn btn-outline-secondary dropdown-toggle  dropdown-select"
                            type="button" id="monthButton" data-toggle="dropdown" aria-expanded="false">
                        </button>月
                        <ul id="monthPullDown" class="dropdown-menu" aria-labelledby="monthButton">
                        </ul>
                    </div>
                    <!-- 月 -->

                    <!-- 日 -->
                    <div class="dropdown">
                        <button name="dayButton" class="btn btn-outline-secondary dropdown-toggle  dropdown-select"
                            type="button" id="dayButton" data-toggle="dropdown" aria-expanded="false">
                        </button>日
                        <ul id="dayPullDown" class="dropdown-menu" aria-labelledby="dayButton">
                        </ul>
                    </div>
                    <!-- 日 -->

                </div>
                </p>
                <!-- 誕生日設定 -->
                <p>
                    自己紹介文
                    <textarea class="container-fluid" name="introduction" rows="5"></textarea>
                </p>

                <form action="" method="post">
                    <input class="btn btn-success float-right" type="submit" value="編集">
                </form>




            </div>
            <!-- 画面中央 -->

            <!-- 画面右部分 -->
            <div class=" col-lg-4">

            </div>
            <!-- 画面右部分 -->

        </div>
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

    <script src="./settingProfile.js"></script>

</body>

</html>