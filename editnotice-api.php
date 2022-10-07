<?php
require __DIR__ . '/parts/connect_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

$user = $_SESSION['user']['id'];

$sql = "UPDATE `member_notice` SET
    `readed` = 2
    WHERE `sid` = ? ";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['thisnotice']
]);

if ($stmt->rowCount()) {
    $output['success'] = true;
} else {
    $output['error'] = '資料沒有修改';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
