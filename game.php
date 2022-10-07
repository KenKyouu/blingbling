<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'game'; // 頁面名稱，可以自定義


if (empty($_SESSION['user'])) {
    header('Location: ./login.php');
    exit;
}

$user = $_SESSION['user']['id'];
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./styles/blinggame.css">

<body onload="init();" style="margin:0px;">
    <div id="app">
        <!-- <svg width="48" height="48" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.3636 9.09091H15.9091C16.2105 9.09091 16.4995 8.97118 16.7126 8.75807C16.9257 8.54496 17.0455 8.25593 17.0455 7.95454C17.0455 7.65316 16.9257 7.36412 16.7126 7.15101C16.4995 6.9379 16.2105 6.81818 15.9091 6.81818H13.6364V5.68182C13.6364 5.38043 13.5166 5.0914 13.3035 4.87829C13.0904 4.66518 12.8014 4.54545 12.5 4.54545C12.1986 4.54545 11.9096 4.66518 11.6965 4.87829C11.4834 5.0914 11.3636 5.38043 11.3636 5.68182V6.81818C10.4595 6.81818 9.59238 7.17735 8.95305 7.81668C8.31372 8.45601 7.95455 9.32312 7.95455 10.2273C7.95455 11.1314 8.31372 11.9985 8.95305 12.6379C9.59238 13.2772 10.4595 13.6364 11.3636 13.6364H13.6364C13.9377 13.6364 14.2268 13.7561 14.4399 13.9692C14.653 14.1823 14.7727 14.4713 14.7727 14.7727C14.7727 15.0741 14.653 15.3631 14.4399 15.5763C14.2268 15.7894 13.9377 15.9091 13.6364 15.9091H9.09091C8.78953 15.9091 8.50049 16.0288 8.28738 16.2419C8.07427 16.455 7.95455 16.7441 7.95455 17.0454C7.95455 17.3468 8.07427 17.6359 8.28738 17.849C8.50049 18.0621 8.78953 18.1818 9.09091 18.1818H11.3636V19.3182C11.3636 19.6196 11.4834 19.9086 11.6965 20.1217C11.9096 20.3348 12.1986 20.4545 12.5 20.4545C12.8014 20.4545 13.0904 20.3348 13.3035 20.1217C13.5166 19.9086 13.6364 19.6196 13.6364 19.3182V18.1818C14.5405 18.1818 15.4076 17.8226 16.047 17.1833C16.6863 16.544 17.0455 15.6769 17.0455 14.7727C17.0455 13.8686 16.6863 13.0015 16.047 12.3621C15.4076 11.7228 14.5405 11.3636 13.6364 11.3636H11.3636C11.0623 11.3636 10.7732 11.2439 10.5601 11.0308C10.347 10.8177 10.2273 10.5287 10.2273 10.2273C10.2273 9.92589 10.347 9.63685 10.5601 9.42374C10.7732 9.21063 11.0623 9.09091 11.3636 9.09091ZM12.5 0C10.0277 0 7.61099 0.733112 5.55538 2.10663C3.49976 3.48015 1.89761 5.43238 0.951511 7.71645C0.00541613 10.0005 -0.242126 12.5139 0.24019 14.9386C0.722505 17.3634 1.91301 19.5907 3.66117 21.3388C5.40933 23.087 7.63661 24.2775 10.0614 24.7598C12.4861 25.2421 14.9995 24.9946 17.2835 24.0485C19.5676 23.1024 21.5199 21.5002 22.8934 19.4446C24.2669 17.389 25 14.9723 25 12.5C25 9.18479 23.683 6.00537 21.3388 3.66116C18.9946 1.31696 15.8152 0 12.5 0ZM12.5 22.7273C10.4772 22.7273 8.4999 22.1274 6.81804 21.0037C5.13617 19.8799 3.82531 18.2826 3.05124 16.4138C2.27716 14.545 2.07463 12.4887 2.46925 10.5048C2.86387 8.52086 3.83792 6.69853 5.26823 5.26822C6.69854 3.83791 8.52086 2.86386 10.5048 2.46924C12.4887 2.07462 14.545 2.27715 16.4138 3.05123C18.2826 3.82531 19.8799 5.13616 21.0037 6.81803C22.1275 8.4999 22.7273 10.4772 22.7273 12.5C22.7273 15.2124 21.6498 17.8138 19.7318 19.7318C17.8138 21.6498 15.2124 22.7273 12.5 22.7273Z" fill="#2d827d" />
        </svg> -->
        <img class="coin" src="./images/game_coin.png" alt="">
        <div class="winNum">購物金x5</div>
        <a class="gamePlayBtn" href="">
            <img src="./images/play.png" alt="">
        </a>
        <div class="over">
            <div class="box">
                <img src="./images/elf_03.png" alt="">
                <p class="text">恭喜！獲得 $<span class="end_winNum">0</span> 購物金</p>
                <button class="okgo">
                    <p class="hd">Happy Birthday！</p>
                </button>
                <!-- <a class="resetPlay" href="">
                    <img src="./images/elf_03.png" alt="">
                </a> -->
            </div>
        </div>

        <div class="hpBar">
            <h2>
              <img src="./images/game_icon.svg" alt="">
            </h2>
            <div class="hpBox">
                <div class="hp"></div>
            </div>
        </div>

        <canvas id="canvas" width="1920" height="1000" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 1.00);">
        </canvas>


         <!-- <div id="animation_container" style="background-color:rgba(255, 255, 255, 1.00); width:1920px; height:900px">

            <div id="dom_overlay_container" style="pointer-events:none; overflow:hidden; width:1920px; height:1000px; position: absolute; left: 0px; top: 0px; display: block;">
            </div>
        </div>  -->
    </div>

    <?php include __DIR__ . '/parts/scripts.php'; ?>
    <script src="https://code.createjs.com/1.0.0/createjs.min.js"></script>
    <script src="./js/bling.js"></script>
    <script src="./js/bling_game.js"></script>
    <script src="./js/ndgmr.Collision.js"></script>
    <script>
        $('.okgo').click(function() {
            let score = $(".end_winNum").text();
            $.post(
                "game-api.php", {
                    score
                },
                function(data) {
                    score;
                    location.href = "member-myIntro.php"
                }
            )
        })
    </script>
    <?php include __DIR__ . '/parts/html-foot.php'; ?>