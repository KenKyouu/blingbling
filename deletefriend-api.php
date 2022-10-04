<?php
require __DIR__ . '/parts/connect_db.php';

$sid = intval($_GET['sid']);

$row = $pdo->query("DELETE FROM `member_friend` WHERE sid=$sid")->fetch();

header("location: member-myFriend.php");
