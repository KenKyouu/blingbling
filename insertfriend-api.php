<?php
require __DIR__ . '/parts/connect_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

$user = $_SESSION['user']['id'];

$lastfriend = $pdo->query("SELECT * FROM member_friend WHERE 1 ORDER BY `sid` DESC LIMIT 1")->fetchAll();
$lastfriendsid = $lastfriend[0]['sid'];
$insertfriendsid = $lastfriendsid + 1;

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


// if (empty($_POST['friendemail'])) {
//     $email = NULL;
// } else {
//     $email = $_POST['friendemail'];
// }

$pdo->query("DELETE FROM `friend_tag` WHERE `friend_sid` = $insertfriendsid")->fetchAll();

$sql = "INSERT INTO `member_friend` (
    `sid`,
    `member_sid`,
    `name`,
    `gender`,
    `email`,
    `birthday_mm`,
    `birthday_dd`
    ) VALUES (
        $insertfriendsid,
        $user,
        ?,
        ?,
        ?,
        ?,
        ?
    )";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['friendname'],
    $_POST['friendgender'],
    $_POST['friendemail'],
    $_POST['friendmonth'],
    $_POST['friendday']
]);

if (!empty($_POST['friendtag'])) {
    for ($i = 0; $i < count($_POST['friendtag']); $i++) {
        $tagsql = "INSERT INTO `friend_tag` (
            `friend_sid`,
            `tag_sid`
            ) VALUES (
                $insertfriendsid,
                ?
            )";
        $stmttag = $pdo->prepare($tagsql);
        $stmttag->execute([
            intval($_POST['friendtag'][$i])
        ]);
    }
}


if ($stmt->rowCount()) {
    $output['success'] = true;
} else {
    $output['error'] = '資料沒有修改';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);
