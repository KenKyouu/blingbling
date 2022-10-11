<?php
require __DIR__ . '/parts/connect_db.php';

$user = $_SESSION['user']['id'];
$sid = intval($_GET['sid']);

$row = $pdo->query("DELETE FROM `member_favorite` WHERE `member_sid`=$user AND `product_sid`=$sid")->fetch();

header("location: member-myCollection.php");
