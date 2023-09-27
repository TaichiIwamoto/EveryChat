<?php
if (!empty($_POST['tmpSave'])) {
    if (!empty($_POST['articleBody']) && !empty($_POST['articleTitle'])) {
        require_once("connectDB.php");
        $pdo = connect();
        $title = $_POST['articleTitle'];
        $body = $_POST['articleBody'];
        $sql = "SELECT * FROM article_table WHERE title=:title LIMIT 1";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam("title", $title, PDO::PARAM_STR);
        $stmt->execute();
        $count = $stmt->fetchColumn();

        if ($count == 0) {
            $sql = "INSERT INTO article_table (author,title,body,upload) VALUES ('churritos97',:title,:body,0)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam('title', $title, PDO::PARAM_STR);
            $stmt->bindParam('body', $body, PDO::PARAM_STR);
            $stmt->execute();
        } else {
            $sql = "UPDATE article_table set title=:new_title, body=:body WHERE title=:title";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam('title', $title, PDO::PARAM_STR);
            $stmt->bindParam('body', $body, PDO::PARAM_STR);
            $stmt->bindParam('new_title', $title, PDO::PARAM_STR);
            $stmt->execute();
        }
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
    <link rel="stylesheet" href="./editBlog.css" type="text/css">

    <title>RAMSNOISE-EDIT-BLOG</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../resource/RAMSNOISE.png" class="img-fluid">
        </div>
    </nav>

    <!-- 記事タイトル -->
    <form action="" method="post">
        ブログタイトル<br>
        <input readonly="true" name="articleTitle" placeholder="記事タイトル" type="text" size="97" id="articleName">
        <!-- 記事タイトル -->
        <br>

        <!-- 切り替えDOM -->
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button id="articleEdit" type="button" class="btn-outline-primary">編集</button>
            <button id="articlePreview" type="button" class="btn-outline-primary">プレビュー</button>
        </div><br>
        <!-- 切り替えDOM -->


        <!-- 記事本文 -->
        <div id="output"></div>
        <textarea id="articleBody" name="articleBody" cols="100" rows="30"></textarea><br>

        <!-- 記事本文 -->

        <!-- 挿入DOM -->
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <button id="imgSelected" type="button" class="btn-outline-primary">画像</button>
            <button id="linkSelected" type="button" class="btn-outline-primary">リンク</button>
            <button id="youtubeSelected" type="button" class="btn-outline-primary">YouTube</button>
        </div><br>
        <!-- 挿入DOM -->


        <!-- 記事保存 -->
        <div class="btn-group" role="group" aria-label="Basic outlined example">
            <input name="tmpSave" id="tmpSave" type="submit" class="btn-outline-info" value="一時保存">
            <input name="upload" type="submit" class="btn-success" value="投稿">
        </div>
        <br>
        <!-- 記事保存 -->


        <!-- モーダルウィンドウ -->
        <button hidden="true" id="modalPop" type="button" class="btn btn-primary" data-toggle="modal"
            data-target="#modal">
            Launch demo modal
        </button>
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel"></h5>
                        <button id="modalClose" type="button" class="btn-close" data-dismiss="modal"
                            aria-label="close">閉じる</button>
                    </div>
                    <div class="modal-body">
                        <input id="insert" type="url" name="insert" placeholder="test" size="57">
                    </div>
                    <div class="modal-footer">
                        <button id="inserted" type="button" class="btn btn-primary">挿入</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- モーダルウィンドウ -->



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <script src="./editBlog.js"></script>

</body>

</html>