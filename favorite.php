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

                $row = $pdo->query("SELECT * FROM product WHERE sid=$sid")->fetch();
                // $_SESSION['cart'][$sid] = $row;

                
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
                        $row['sid']
                    ]);

                echo json_encode($row, JSON_UNESCAPED_UNICODE);    




