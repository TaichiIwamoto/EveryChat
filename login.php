<?php
require_once("connectDB.php");
$pdo = connect();

// //新規作成
// if (!empty($_POST)) {
//     //不備確認
//     if ($_POST['email'] === "") {
//         $error['email'] = "blank";
//     }
//     if ($_POST['password'] === "") {
//         $error['password'] = "blank";
//     }

//     //アドレスの重複確認
//     if (!isset($error)) {
//         $member = $pdo->prepare('SELECT COUNT(*) as cnt FROM users WHERE email=:email');
//         $member->execute(
//             array(
//                 $_POST['email']
//             )
//         );
//         $record = $member->fetch();
//         if ($record['cnt'] > 0) {
//             $error['email'] = 'duplicate';
//         }
//     }

//     //次へ進む
//     if (!isset($error)) {
//         $_SESSION['join'] = $_POST; // フォームの内容をセッションで保存
//         exit();
//     }
// }

// if (!empty($_POST['check'])) {
//     // パスワードの暗号化
//     $hash = password_hash($_SESSION['join']['password'], PASSWORD_BCRYPT);

//     // 入力情報をデータベースに登録
//     $statement = $db->prepare('INSERT INTO users SET name=:name, email=:email, password=:password');
//     $statement->execute(
//         array(
//             $_SESSION['join']['name'],
//             $_SESSION['join']['email'],
//             $hash
//         )
//     );

//     unset($_SESSION['join']);
//     exit();
// }

if (!empty($_POST['check'])) {
    //フォームから受け取った値を変数に代入
    $name = $_POST['userName'];
    $password = $_POST['userPass'];
    $mail = $_POST['userMail'];

    //DBからユーザ情報を取得
    $sql = 'SELECT * FROM user_table WHERE name = :name';
    $sth = $pdo->prepare($sql);
    $sth->bindParam('name', $name, PDO::PARAM_STR);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_ASSOC);

    //パスワード判定
    if (password_verify($password, $result['password'])) {
        $_SESSION['name'] = $result['name'];
        echo 'ログイン成功';
    } else {
        echo 'ユーザ名またはパスワードが間違っています';
    }

    //ログインの保持
    session_start();

    if (isset($_SESSION['name'])) {
        echo 'ようこそ！, ' . $_SESSION['name'] . 'さん';
    } else {
        echo 'ログインしてください';
    }

    //ログアウト機能
    session_start();

    if (isset($_POST['logout'])) {
        session_destroy();
        echo 'ログアウト成功';
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