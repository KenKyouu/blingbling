<?php
require __DIR__ . '/parts/connect_db.php';


if(! isset($_SESSION['history'])){
    $_SESSION['history']=[];
}

$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
//紀錄哪個產品就好



// if(! empty($sid)){

    // if(! empty($_SESSION['history'][$sid])){

        // } else {
        //     // 新增
        //     //檢查資料表是不是有這個商品
            $list = $pdo->query("SELECT * FROM product WHERE sid=$sid")->fetch();
            if(! empty($list)){

                // $_SESSION['history'][$sid] = $list;
                array_unshift($_SESSION['history'], $list ) ;
            }
        // }
// }

// array_unshift($list);
$row= $_SESSION['history'];
if(count($row) > 5){
    array_pop($row);

    $_SESSION['history'] = $row;
}


echo json_encode($_SESSION['history'], JSON_UNESCAPED_UNICODE);
