<?php
require __DIR__ . '/parts/connect_db.php';
header('Content-Type: application/json');


$output = [
    'success' => false,
    'error' => '',
];

if(empty($_SESSION['user']) or empty($_POST['data'])){
    $output['error'] = 'no data';
    echo json_encode($output);
    exit;
}

$sql = " UPDATE `member` SET `avatar`=? WHERE `sid`=? ";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['data'],
    $_SESSION['user']['id']
]);

$output['success'] = boolval($stmt->rowCount());

echo json_encode($output);
