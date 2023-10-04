<?php
require_once("connectDB.php");
$pdo = connect();
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

<header>
    <div class="home">Home Page</div>
</header>

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: hwb(172 4% 21%)">
        <div class="container-fluid">
            <img src="../resource/RAMSNOISE.png" class="img-fluid">
            <form class="d-flex">
                <button type="button" class="btn btn-darkgrey">Link</button>
                <input class="form-control me-2" type="search" placeholder="記事・成果物" aria-label="Search">
                <button class="btn btn-secondary" type="submit">検索</button>
            </form>
        </div>
    </nav>
<body> 

    <div class="body-left">
        <h2 class="memo-top">開発メモ</h2>
        <div class="memo memo-color1">書籍</div>
        <a class="memo-item" href="https://www.youtube.com/">こちらはyoutubeになります</a>
        <div class="memo memo-color2">講座</div>
        <a class="memo-item" href="https://www.youtube.com/">こちらもyoutubeになります</a>
        <div class="memo memo-color3">ニュース</div>
        <a class="memo-item" href="https://www.youtube.com/">なんとこちらもyoutubeになります</a>

    </div>

    <div class="body-center">
        <h3 class="dev">開発物</h3>
        <a href="../blog/editBlog.php">
            <button>ブログ作成</button>
        </a><br>


        <?php
        $sql = "SELECT * FROM article_table";
        $stmt = $pdo->query($sql);
        $result = $stmt->fetchAll();
        $i = 0;
        echo "ブログ一覧<br>";
        foreach ($result as $line) {
            ?>
            <a href="../blog/viewBlog.php?id=<?php echo $line[0]; ?>">
                <button>
                    <?php echo $result[$i]['title'] ?>
                </button><br>
            </a>
            <?php
            $i += 1;
        }
        ?>
    </div>

    <div class="body-right">
        <div class="service">サービス一覧</div>
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