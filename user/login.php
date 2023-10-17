<?php
include_once(__DIR__ . "/../connectDB.php");
$pdo = connect();

if (!empty($_POST['check'])) {
    //フォームから受け取った値を変数に代入
    $name = $_POST['userName'];
    $password = $_POST['userPass'];
    $mail = $_POST['userMail'];

    //DBからユーザ情報を取得
    $sql = 'SELECT * FROM user_table WHERE name = :name';
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam('name', $name, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll();

    //パスワード判定
    if (password_verify($password, $result[0]['userpass'])) {
        echo 'ログイン成功';
    } else {
        echo 'ユーザ名またはパスワードが間違っています';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" placeholder="ユーザ名" name="userName"><br>
        <input type="text" placeholder="メールアドレス" name="userMail"><br>
        <input type="password" placeholder="パスワード" name="userPass"><br>
        <input type="submit" value="ログイン" name="check">
    </form>
</body>

</html>