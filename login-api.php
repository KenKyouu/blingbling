<?php

require __DIR__ . '/parts/connect_db.php';

$output = [
    'success' => false,
    'error' => '',
    'code' => 0,
];

// 1. 先欄位資料是否足夠
if (empty($_POST['loginemail']) or empty($_POST['loginpassword'])) {
    $output['error'] = '參數不足';
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

$sql = "SELECT * FROM member WHERE email=?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST['loginemail']]);
$row = $stmt->fetch();
$password = $_POST['loginpassword'];
$password_hash = password_hash($password, PASSWORD_DEFAULT);


// 2. 以 email 去查詢資料
if (empty($row)) {
    $output['error'] = '帳號或密碼錯誤';
    $output['code'] = 400;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}


// 3. 驗證密碼
if (password_verify($password, $row['password'])) {
    // 密碼是正確的
    $output['success'] = true;
    $_SESSION['user'] = [
        'id' => $row['sid'],
        'email' => $row['email']
        // 'name' => $row['name'],
    ];
} else {
    // 密碼是錯誤的
    $output['error'] = '帳號或密碼錯誤';
    $output['code'] = 420;
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
