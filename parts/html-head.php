<?php
if (!isset($title)) {
    $title = 'BlingBling有禮';
} else {
    $title = $title . '｜BlingBling有禮';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="./styles/reset.css" />
    <link rel="stylesheet" href="./styles/all.css" />
    <link rel="stylesheet" href="./styles/product-list.css" />
    <script src="./node_modules/jquery/dist/jquery.js"></script>
</head>

<body>