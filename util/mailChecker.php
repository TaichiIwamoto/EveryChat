<?php
function mailChecker($mailAddress)
{
    include_once(__DIR__ . "/../connectDB.php");
    $pdo = Connect();
    $sql = "SELECT mail FROM user_table";
    $stmt = $pdo->query($sql);
    $result = $stmt->fetchAll();
    foreach ($result as $row) {
        if ($mailAddress == $row['mail']) {
            return -1;
        }
    }
    return 1;

}
?>