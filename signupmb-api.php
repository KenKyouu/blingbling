<?php
require __DIR__ . '/parts/connect_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

// 先判斷name跟email欄位有沒有值

// if (empty($_POST['name']) or empty($_POST['email'])) {
//     $output['error'] = '欄位資料不完整';
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// }

// TODO: 欄位資料要驗證

// 如果時間的字串無法轉換成timestamp，表示格式錯誤，則設定為null
// if (strtotime($_POST['birthday']) === false) {
//     $birthday = null;
// } else {
//     $birthday = $_POST['birthday'];
// }

$sql = "INSERT INTO `member`(
    `email`,
    `password`,
    `birthday`,
    `register_date`
    ) VALUES (
        ?,
        ?,
        CONCAT(?,'-',?,'-',?),
        NOW()
)";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['signemailmb'],
    password_hash($_POST['signpasswordmb'], PASSWORD_DEFAULT),
    $_POST['signyearmb'],
    $_POST['signmonthmb'],
    $_POST['signdaymb']
]);

if ($stmt->rowCount()) {
    $output['success'] = true;
} else {
    $output['error'] = '資料沒有新增';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
