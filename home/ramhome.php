<?php
require_once("connectDB.php");
$pdo = Connect();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./ramhome.css" type="text/css">
    <title>RAMSNOISE</title>
</head>

<body>
    <!-- ヘッダ -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: hwb(172 4% 21%)">
        <img class=" navbar-brand" src="../resource/RAMSNOISE.png">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../home/ramhome.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Link
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../user/settingProfile.php">マイプロフィール</a>
                        <a class="dropdown-item" href="#">マイブログ</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">サービス一覧詳細</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- ヘッダ -->


    <div class="container-fluid">
        <div class="row">
            <!-- 画面左 -->
            <div class="col-lg-3">
                <h2 class="memo-top">開発メモ</h2>
                <div class="memo memo-color1">書籍</div>
                <a class="memo-item" href="https://www.youtube.com/">こちらはyoutubeになります</a>
                <div class="memo memo-color2">講座</div>
                <a class="memo-item" href="https://www.youtube.com/">こちらもyoutubeになります</a>
                <div class="memo memo-color3">ニュース</div>
                <a class="memo-item" href="https://www.youtube.com/">なんとこちらもyoutubeになります</a>
            </div>
            <!-- 画面左 -->

            <!-- 画面中央 -->
            <div class="col-lg-6" id="body-center">
                <h3 class="dev">ブログ一覧</h3>
                <?php
                $sql = "SELECT * FROM article_table";
                $stmt = $pdo->query($sql);
                $result = $stmt->fetchAll();
                $i = 0;
                foreach ($result as $line) {
                    ?>
                    <div class="card mx-auto" id="card">
                        <div class="card-body" id="cardBody">
                            <div class="row container-fluid" id="cardTitle">
                                <img src="../resource/guest.jpg" id="userImage">
                                <a class="card-title" href="../blog/viewBlog.php?id=<?php echo $line[0]; ?>">
                                    <?php echo $result[$i]['title'] ?>
                                </a>
                            </div>
                            <h6>
                                <?php echo $result[$i]['date'] ?>
                            </h6>
                            <p class="card-text">
                                <?php echo $result[$i]['body'] ?>
                            </p>

                            <p class="card-text">
                                <a href="#">
                                    <?php echo $result[$i]['language'] ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    <?php
                    $i += 1;
                }
                ?>
            </div>
            <!-- 画面中央 -->

            <!-- 画面右 -->
            <div class="col-lg-3">
                <div class="service">サービス一覧</div>
            </div>
            <!-- 画面右 -->
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

</body>

</html>