<?php
require __DIR__ . '/parts/connect_db.php';



if (!isset($_SESSION['order'])) {

    $_SESSION['order'] = [];
}

$total = isset($_GET['producttotal']) ? intval($_GET['producttotal']) : 0;
$package = isset($_GET['orderpackage']) ? intval($_GET['orderpackage']) : 0;
$giftvoucher = isset($_GET['ordergiftvoucher']) ? intval($_GET['ordergiftvoucher']) : 0;
$coupon = isset($_GET['ordercoupon']) ? intval($_GET['ordercoupon']) : 0;
$freight = isset($_GET['orderfreight']) ? intval($_GET['orderfreight']) : 0;

$_SESSION['order'] = [
    'producttotal' => $total,
    'orderpackage' => $package,
    'ordergiftvoucher' => $giftvoucher,
    'ordercoupon' => $coupon,
    'orderfreight' => $freight
];