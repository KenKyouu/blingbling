<?php
require __DIR__ . '/parts/connect_db.php';


$output = [
    'success' => true, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

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
$od_sql = "INSERT INTO `orders`(
    `member_sid`, `amount`, 
    `ordererName`,
    `ordererMobile`, 
    `recipientName`, 
    `recipientMobile`, 
    `delivery`,
    `address`,
    `pay`,
    `order_date`
) VALUES (
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    ?,
    CONCAT(?,?,?,?),
    ?,
    NOW()
)";



$stmt = $pdo->prepare($od_sql);
$stmt->execute([
    $_SESSION['user']['id'],
    $total,
    $_POST['ordererName'],
    $_POST['ordererMobile'],
    $_POST['recipientName'],
    $_POST['recipientMobile'],
    $_POST['delivery'],
    $_POST['zipcode'],
    $_POST['city'],
    $_POST['town'],
    $_POST['address'],
    $_POST['pay']
    
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
$od_sql =  "INSERT INTO `order_details`(`order_sid`, `product_sid`, `price`, `quantity`) VALUES (?, ?, ?, ?)";
$stmt =$pdo->prepare($od_sql);

foreach($_SESSION['cart'] as $k=>$v){
    $stmt->execute([
        $order_sid,
        $v['sid'],
        $v['price'],
        $v['qty'],
    ]);
}

unset($_SESSION['cart']); // 清除購物車內容
