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

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container-fluid">
            <img src="../resource/RAMSNOISE.png" class="img-fluid">
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="記事・成果物" aria-label="Search">
                <button class="btn btn-secondary" type="submit">検索</button>
            </form>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand"><small>HOME PAGE</small></a>
        </div>
    </nav>

    <a href="../blog/editBlog.php">
        <button>ブログ作成</button>
    </a><br>

    hello
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