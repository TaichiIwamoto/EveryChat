<?php
//データベース設定
$dsn = '後から追加';
$user = '後から追加';
$password = '後から追加';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo '接続失敗: ' . $e->getMessage();
}

//セッションの開始
session_start();

//新規作成
if (!empty($_POST)) {
    //不備確認
    if ($_POST['email'] === "") {
        $error['email'] = "blank";
    }
    if ($_POST['password'] === "") {
        $error['password'] = "blank";
    }
    
    //アドレスの重複確認
    if (!isset($error)) {
        $member = $db->prepare('SELECT COUNT(*) as cnt FROM users WHERE email=:email');
        $member->execute(array(
            $_POST['email']
        ));
        $record = $member->fetch();
        if ($record['cnt'] > 0) {
            $error['email'] = 'duplicate';
        }
    }
 
    //次へ進む
    if (!isset($error)) {
        $_SESSION['join'] = $_POST;   // フォームの内容をセッションで保存
        exit();
    }
}

//会員登録の手続き以外のアクセスをスキップ
if (!isset($_SESSION['join'])) {
    header('Location: entry.php');
    exit();
}
 
if (!empty($_POST['check'])) {
    // パスワードの暗号化
    $hash = password_hash($_SESSION['join']['password'], PASSWORD_BCRYPT);
 
    // 入力情報をデータベースに登録
    $statement = $db->prepare('INSERT INTO users SET name=:name, email=:email, password=:password');
    $statement->execute(array(
        $_SESSION['join']['name'],
        $_SESSION['join']['email'],
        $hash
    ));
 
    unset($_SESSION['join']);
    exit();
}

//フォームから受け取った値を変数に代入
$name = $_POST['name'];;
$password = $_POST['password'];;

//DBからユーザ情報を取得
$sql = 'SELECT * FROM users WHERE name = :name, email=:email, password=:password';
$sth = $dbh->prepare($sql);
$sth->bindValue(':name', $name);
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

if(isset($_SESSION['name'])) {
    echo 'ようこそ！, ' . $_SESSION['name'] . 'さん';
} else {
    echo 'ログインしてください';
}

//ログアウト機能
session_start();

if(isset($_POST['logout'])) {
    session_destroy();
    echo 'ログアウト成功';
}
?>