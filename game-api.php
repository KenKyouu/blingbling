<?php
require __DIR__ . '/parts/connect_db.php';


$user = $_SESSION['user']['id'];
$score = intval($_POST['score']);
$usermember = $pdo->query("SELECT * FROM `member` WHERE `sid` = $user ")->fetchAll();
$myVoucher = $usermember[0]['gift_voucher'];
$finalVoucher = $score + $myVoucher;

// $output = [
//     'success' => false, // 是否新增成功
//     'error' => '', // 錯誤訊息
//     'code' => 0,
//     'postData' => $_POST,
//     'myV' => $myVoucher,
//     'fV' => $finalVoucher,
// ];


$sql = "UPDATE `member` SET
    `gift_voucher` = ?
    WHERE `sid` = ? ";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    $finalVoucher,
    $user
]);

// if ($stmt->rowCount()) {
//     $output['success'] = true;
// } else {
//     $output['error'] = '資料沒有修改';
// }

echo json_encode($output, JSON_UNESCAPED_UNICODE);
