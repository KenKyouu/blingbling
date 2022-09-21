<?php
require __DIR__ . '/parts/connect_db.php';

$sql = "INSERT INTO `member`(
    `email`,
    `password`,
    `birthday`,
    `register_date`,
    ) VALUES (
        'aaa@aaa.com',
        '12345',
        '1992-08-13',
        NOW()
)";
$stmt = $pdo->query($sql);
echo $stmt->rowCount(); // 影響的資料筆數
// https://www.php.net/manual/en/pdostatement.rowcount