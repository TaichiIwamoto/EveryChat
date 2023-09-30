<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./settingProfile.css" type="text/css">
    <title>RAMSNOISE-PROFILE</title>
</head>

<body>
    <!-- トップヘッダ -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <div class="col-md-4">
                <img src="../resource/RAMSNOISE.png" class="img-fluid">
            </div>
            <div class="col-md-6"></div>
            <div class="col-md-1">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle form-control" type="button" data-toggle="dropdown"
                        aria-expanded="false">
                        Link
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="../user/settingProfile.php">プロフィール</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-1">
                <a href="../home/ramhome.php">
                    <button class="btn btn-primary">ホームへ</button>
                </a>
            </div>
    </nav>
    <!-- トップヘッダ -->

    <div class="container-fluid">
        <div class="row">
            <!-- 画面左部分 -->
            <div class="col-md-4">
            </div>
            <!-- 画面左部分 -->

            <!-- 画面中央 -->
            <div class="col-md-4" id="profileCenter">
                <h1>$UserNickName</h1>

                <div class="row">
                    <div class="col-md-12">
                        <img class="img-fluid" src="../resource/guest.jpg" id="userImage" alt="プロフィール画像">
                        <p hidden="true" id="userImageChangeText">
                            <変更>
                        </p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-8">
                    </div>
                    <div class="col-md-4">
                        <button class="btn btn-primary container-fluid">
                            プロフィールを編集
                        </button>
                    </div>
                </div>
                <p>
                    本名
                    <input class="form-control" type="text" nameplace="ラム太郎" name="userName">
                </p>

                <p>
                    ニックネーム
                    <input class="form-control" type="text" nameplace="ラムラック" name="userNickName">
                </p>

                <p>

                </p>



            </div>
            <!-- 画面中央 -->

            <!-- 画面右部分 -->
            <div class="col-md-4">

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