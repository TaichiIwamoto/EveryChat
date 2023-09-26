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
    ブログ作成<br>
    <textarea name="articleName" placeholder="記事タイトル" cols="100" rows="2" id="articleName"></textarea><br>
    <textarea name="articleBody" cols="100" rows="30"></textarea><br>
    <div class="btn-group" role="group" aria-label="Basic outlined example">
        <button id="imgSelected" type="button" class="btn-outline-primary">画像</button>
        <button id="linkSelected" type="button" class="btn-outline-primary">リンク</button>
        <button id="youtubeSelected" type="button" class="btn-outline-primary">YouTube</button>
    </div><br>
    <input type="submit" value="作成" name="articleCreate">

    <!-- モーダルウィンドウ -->
    <button hidden="true" id="modalPop" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLabel"></h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="close">閉じる</button>
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