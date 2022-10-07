<?php
require __DIR__ . '/parts/connect_db.php';

// $output = [
//     'success' => true, // 是否新增成功
//     'error' => '', // 錯誤訊息
//     'code' => 0,
//     'postData' => $_GET,
// ];

$sid =  intval($_GET['sid']);
$user = $_SESSION['user']['id'];

$favor = $pdo->query("SELECT * FROM member_favorite WHERE `member_sid`=$user and `product_sid`=$sid")->fetchAll();

if(empty($favor)){
    $sql = "INSERT INTO `member_favorite`(
        `member_sid`,
        `product_sid`
        ) VALUES (
            ?,
            ?
        )";
    
    $stmt = $pdo->prepare($sql);
    

        $stmt->execute([
            $_SESSION['user']['id'],
            $sid
        ]);
}

        // echo json_encode($row, JSON_UNESCAPED_UNICODE);    




