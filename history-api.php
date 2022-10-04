<?php
require __DIR__ . '/parts/connect_db.php';


if(! isset($_SESSION['history'])){
    $_SESSION['history']=[];
}


$_SESSION['history']=[

]


echo json_encode($_SESSION['history'], JSON_UNESCAPED_UNICODE);