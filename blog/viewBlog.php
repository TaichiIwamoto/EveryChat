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
    <link rel="stylesheet" href="./editBlog.css" type="text/css">

    <title>RAMSNOISE-BLOGVIEW</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../resource/RAMSNOISE.png" class="img-fluid">
        </div>
        <a href="../home/ramhome.php">
            <button class="btn btn-primary">ホームへ</button>
        </a>
    </nav>


    <?php
    $id = $_GET['id'];
    $sql = "SELECT title,body FROM article_table WHERE id=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam("id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll();
    ?>
    <div hidden="true" id="articleText">
        <?php echo $result[0]['body']; ?>
    </div>
    <div id=output></div>



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