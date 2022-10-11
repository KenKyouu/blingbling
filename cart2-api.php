<?php
require __DIR__ . '/parts/connect_db.php';


$output = [
    'success' => true, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
];
$user = $_SESSION['user']['id'];
// if(empty($_POST['name']) or empty($_POST['email'])){
//     $output['error']= '欄位資料不足';
//     echo json_encode($output, JSON_UNESCAPED_UNICODE);
//     exit;
// }
// TODO: 欄位資料要驗證

// 如果時間的字串無法轉換成 timestamp, 表示格式錯誤
// if(strtotime($_POST['birthday'])===false){
//     $birthday = null;
// }else{
//     $birthday = date('Y-m-d', strtotime($_POST['birthday']));
// }
// 由資料表的資料計算總價
$total = 0; 
foreach($_SESSION['cart'] as $k=>$v){
    $total += $v['price']*$v['qty'];
}
$ordertotal =0;
    $ordertotal = $total + $_SESSION['order']['orderpackage'] - $_SESSION['order']['ordergiftvoucher'] - $_SESSION['order']['ordercoupon'] + $_SESSION['order']['orderfreight'];


$yCode = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
shuffle($yCode);
$orderSn = $yCode[0].(date('Y') - 2000) . strtoupper(dechex(date('m'))) . date('d') . sprintf('%02d', rand(0, 99));
    


$od_sql = "INSERT INTO `orders`(
    `order_number`,
    `member_sid`,
    `amount`, 
    `orderer_name`,
    `orderer_mobile`,
    `orderer_tel`,
    `recipient_name`, 
    `recipient_mobile`, 
    `recipient_tel`,
    `delivery`,
    `address`,
    `pay`,
    `order_date`,
    `package`,
    `coupon_sid`,
    `gift_voucher_use`,
    `coupon_use`,
    `freight`
) VALUES (
    ?,
    ?,
    ?,
    ?,
    ?,
    CONCAT(?,'-',?),
    ?,
    ?,
    CONCAT(?,'-',?),
    ?,
    CONCAT(?,?,?,?),
    ?,
    NOW(),
    ?,
    ?,
    ?,
    ?,
    ?
)";



$stmt = $pdo->prepare($od_sql);
$stmt->execute([
    $orderSn,
    $_SESSION['user']['id'],
    $ordertotal,
    $_POST['ordererName'],
    $_POST['ordererMobile'],
    $_POST['ordererTel1'],
    $_POST['ordererTel2'],
    $_POST['recipientName'],
    $_POST['recipientMobile'],
    $_POST['recipientTel1'],
    $_POST['recipientTel2'],
    $_POST['delivery'],
    $_POST['zipcode'],
    $_POST['city'],
    $_POST['town'],
    $_POST['address'],
    $_POST['pay'],
    $_SESSION['order']['orderpackage'],
    $_SESSION['order']['ordercouponsid'],
    $_SESSION['order']['ordergiftvoucher'],
    $_SESSION['order']['ordercoupon'],
    $_SESSION['order']['orderfreight'],
]);

// if($stmt->rowCount()){
//     $output['success'] = true;

// } else {
//     $output['error'] = '資料沒有新增';
// }



echo json_encode($output);


/*
echo json_encode([
    'rowCount'=>$stmt->rowCount(),
    'lastInsertId'=>$pdo->lastInsertId(),
]);
exit;
*/
$order_sid = $pdo->lastInsertId();  // 訂單編號

 // 訂單明細
$od_sql =  "INSERT INTO `order_details`(`orders_sid`, `product_sid`, `price`, `quantity`) VALUES (?, ?, ?, ?)";
$stmt =$pdo->prepare($od_sql);

foreach($_SESSION['cart'] as $k=>$v){
    $stmt->execute([
        $order_sid,
        $v['sid'],
        $v['price'],
        $v['qty'],
    ]);
}

$n_sql = "INSERT INTO `member_notice`(
    `member_sid`,
    `notice_sid`,
    `notice_date`
) VALUES (
    ?,
    ?,
    NOW()
)";
$stmt = $pdo->prepare($n_sql);
$stmt->execute([
    $_SESSION['user']['id'],
    5
]);

// $gift = "SELECT `gift_voucher` FROM `member` WHERE `sid`=$user";
// $gift_v = intval($gift) - $_SESSION['order']['ordergiftvoucher'];
$sql = "UPDATE `member` SET 
    `gift_voucher` = `gift_voucher` - ?
    WHERE `sid`= $user ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        $_SESSION['order']['ordergiftvoucher'],
    ]);

$c_sql = "DELETE FROM `member_coupon`
WHERE `member_sid` = $user and `sid` = ? ";
$stmt = $pdo->prepare($c_sql);
$stmt->execute([
    $_SESSION['order']['ordercouponsid'],
]);
    

unset($_SESSION['cart']); // 清除購物車內容
unset($_SESSION['order']);

