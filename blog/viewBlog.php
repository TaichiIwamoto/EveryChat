<?php
include_once(__DIR__ . "/../connectDB.php");
$pdo = connect();

$id = $_GET['id'];
$sql = "SELECT title,body FROM article_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam("id", $id, PDO::PARAM_INT);
$stmt->execute();
$result = $stmt->fetchAll();

include(__DIR__ . "/../home/header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./editBlog.css" type="text/css">

    <title>RAMSNOISE-BLOGVIEW</title>
</head>

<body>
    <!-- パンくず -->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../home/ramhome.php">ホーム</a></li>
            <li class="breadcrumb-item">
                <?php echo "ブログ閲覧：" . $result[0]['title']; ?>
            </li>
        </ol>
    </nav>
    <!-- パンくず -->
    <div class="container-fluid">
        <div class="row">
            <!-- 画面左 -->
            <div class="col-md-3">
            </div>
            <!-- 画面中央 -->
            <div class="col-md-5" id="articleCSS">
                <div hidden="true" id="articleText">
                    <?php echo $result[0]['body']; ?>
                </div>
                <div id=output></div>
            </div>
            <!-- 画面右 -->
            <div class="col-md-4"></div>
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
    <script src="viewBlog.js"></script>
</body>

</html>