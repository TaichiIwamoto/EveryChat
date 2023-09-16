<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="test" name="test">
        <input type="submit" value="投稿" name="submit">
    </form>

    <?php
    if (!empty($_POST['submit'])) {
        if (!empty($_POST['test'])) {
            echo $_POST['test'];
        } else {
            echo "hello";
        }
    }
    ?>
</body>

</html>