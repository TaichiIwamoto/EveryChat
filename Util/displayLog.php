<?php
require_once("connectDB.php");
$pdo = connect();
echo "hello";

$sql = "CREATE TABLE IF NOT EXISTS user_table"
    . "("
    . "id INT AUTO_INCREMENT PRIMARY KEY,"
    . "name char(32),"
    . "mail TEXT,"
    . "userpass TEXT"
    . ");";
$stmt = $pdo->query($sql);


echo "TABLE一覧<br>";
$sql = "SHOW TABLES";
$stmt = $pdo->query($sql);
$result = $stmt->fetchAll();
// var_dump($result);
foreach ($result as $line) {
    echo $line[0] . "<br>";
    $sql = "SELECT * FROM " . $line[0];
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll();
    $count = 0;
    echo "<table border=1>";
    foreach ($result as $row) {
        echo "<tr>";
        foreach ($row as $key => $value) {
            if (!is_int($key) && $count != 1) {
                echo "<th>{$key} </th>";
            }
        }
        $count += 1;

        echo "</tr>";
        echo "<tr>";
        foreach ($row as $key => $value) {
            if (!is_int($key)) {
                echo "<td>{$value} </td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

?>