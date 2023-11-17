<?php
include_once(__DIR__ . "/../connectDB.php");
$pdo = Connect();
$name = $_POST['userName'];
$sql = "SELECT * FROM article_table WHERE author = :author";
$stmt = $pdo->prepare($sql);
$stmt->bindParam("author", $name, PDO::PARAM_STR);
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
    <link rel="stylesheet" href="../home/ramhome.css">
    <link rel="stylesheet" href="./myBlog.css">
    <title>マイブログ</title>
</head>

<body>
    <!-- パンくず -->
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../home/ramhome.php">ホーム</a></li>
            <li class="breadcrumb-item">
                <?php echo $name; ?>さんのブログ
                </a>
            </li>
        </ol>
    </nav>
    <!-- パンくず -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <form action="" method="post">
                    <input hidden="true" id="userName" type="text" name="userName">
                    <input hidden="true" type="submit" id="submit">
                </form>
            </div>
            <div class="col-lg-6 align-self-start" id="center">
                <?php
                if (isset($name)) {
                    ?>
                    <h1>
                        <?php echo $name; ?>さんのブログ一覧
                    </h1>
                    <?php
                    $i = 0;
                    foreach ($result as $line) {
                        ?>
                        <div class="float-left" id="checkBox">
                            a
                        </div>
                        <div class="card mx-auto" id="card">
                            <div class="card-body" id="cardBody">
                                <div class="row container-fluid" id="cardTitle">
                                    <div class="col-12">
                                        <img src="../resource/guest.jpg" id="userImage">
                                        <a class="card-title" href="../blog/viewBlog.php?id=<?php echo $line[0]; ?>">
                                            <?php echo $result[$i]['title'] ?>
                                        </a>
                                        <div class="float-right">
                                            <button id="blogEdit" class="btn btn-success"
                                                onclick="location.href='./editBlog.php'">
                                                このブログを編集する
                                            </button>
                                        </div>
                                    </div>
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
                }
                ?>

            </div>
            <div class="col-lg-2" id="right">
                <button class="btn btn-primary" onclick="location.href='./editBlog.php'"
                    id="rightContent">ブログ新規作成</button>
            </div>

            <div class="col-lg-1">
            </div>
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
    <script src="./myBlog.js"></script>

</body>

</html>