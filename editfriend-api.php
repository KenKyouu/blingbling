<?php
require __DIR__ . '/parts/connect_db.php';

$output = [
    'success' => false, // 是否新增成功
    'error' => '', // 錯誤訊息
    'code' => 0,
    'postData' => $_POST,
];

$user = $_SESSION['user']['id'];
$friend = intval($_POST['friendsid']);


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

if (empty($_POST['friendemail'])) {
    $email = NULL;
} else {
    $email = $_POST['friendemail'];
}

$sql = "UPDATE `member_friend` SET
    `name` = ?,
    `gender` = ?,
    `email` = ?,
    `birthday_mm` = ?,
    `birthday_dd` = ?
    WHERE `sid` = $friend ";
$stmt = $pdo->prepare($sql);

$stmt->execute([
    $_POST['friendname'],
    $_POST['friendgender'],
    $email,
    $_POST['friendmonth'],
    $_POST['friendday']
]);

// TODO: 抓friendtag的value


if (!empty($_POST['friendtag'])) {
    $pdo->query("DELETE FROM `friend_tag` WHERE `friend_sid` = $friend")->fetchAll();
    for ($i = 0; $i < count($_POST['friendtag']); $i++) {
        $tagsql = "INSERT INTO `friend_tag` (
            `friend_sid`,
            `tag_sid`
            ) VALUES (
                $friend,
                ?
            )";
        $stmttag = $pdo->prepare($tagsql);
        $stmttag->execute([
            intval($_POST['friendtag'][$i])
        ]);
    }
} else {
    for ($i = 0; $i < count($_POST['friendtag']); $i++) {
        $tagsql = "INSERT INTO `friend_tag` (
            `friend_sid`,
            `tag_sid`
            ) VALUES (
                $friend,
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
