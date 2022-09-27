<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'kol'; // 頁面名稱，可以自定義
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./styles/kol.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>


<div class="kol-text-bg-section">
    <div class="bling-text-bg">
    </div>

    <div class="container">
        <div class="article-tag-wrap d-lg-none">
            <div class="row">
                <div id="mbNewsAll" class="col col-md-3">
                    <a class="kol-tag">
                        <h6>全部文章</h6>
                    </a>
                </div>

                <div id="mbNewsBeauty" class="col col-md-3">
                    <a class="kol-tag">
                        <h6>美妝保養</h6>
                    </a>
                </div>

                <div id="mbNewsFashion" class="col col-md-3">
                    <a class="kol-tag">
                        <h6>流行時尚</h6>
                    </a>
                </div>

                <div id="mbNewsMom" class="col col-md-3">
                    <a class="kol-tag">
                        <h6>母嬰幼兒</h6>
                    </a>
                </div>

                <div id="mbNewsHouse" class="col col-md-3">
                    <a class="kol-tag">
                        <h6>數位家電</h6>
                    </a>
                </div>

                <div id="mbNewsLiving" class="col col-md-3">
                    <a class="kol-tag">
                        <h6>居家生活</h6>
                    </a>
                </div>

                <div id="mbNewsPet" class="col col-md-3">
                    <a class="kol-tag">
                        <h6>毛寵物</h6>
                    </a>
                </div>

                <div id="mbNewsFestival" class="col col-md-3">
                    <a class="kol-tag">
                        <h6>節慶道具</h6>
                    </a>
                </div>

                <div id="mbNewsTicket" class="col d-sm-none d-md-none d-lg-none">
                    <a class="kol-tag">
                        <h6>票券</h6>
                    </a>
                </div>
            </div>

            <div class="row kol-title d-lg-none">
                <div class="col">
                    <h2>Bling Bling<br />News...</h2>
                </div>
            </div>
        </div>

        <div class="article-tag-wrap d-none d-md-none d-lg-block">
            <div class="article-pc-section">
                <div class="row">
                    <div id="pcNewsAll" class="col">
                        <a class="kol-tag">
                            <h6>全部文章</h6>
                        </a>
                    </div>
                    <div id="pcNewsBeauty" class="col">
                        <a class="kol-tag">
                            <h6>美妝保養</h6>
                        </a>
                    </div>
                    <div id="pcNewsFashion" class="col">
                        <a class="kol-tag">
                            <h6>流行時尚</h6>
                        </a>
                    </div>
                    <div id="pcNewsMom" class="col">
                        <a class="kol-tag">
                            <h6>母嬰幼兒</h6>
                        </a>
                    </div>
                    <div id="pcNewsHouse" class="col">
                        <a class="kol-tag">
                            <h6>數位家電</h6>
                        </a>
                    </div>
                    <div id="pcNewsLiving" class="col">
                        <a class="kol-tag">
                            <h6>居家生活</h6>
                        </a>
                    </div>
                    <div id="pcNewsPet" class="col">
                        <a class="kol-tag">
                            <h6>毛寵物</h6>
                        </a>
                    </div>
                    <div id="pcNewsFestival" class="col">
                        <a class="kol-tag">
                            <h6>節慶道具</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="defaultAllSection" class="defaultAllSection">
        <!-- 第一篇文章start -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="swiper-wrap d-flex">
                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>Charles & Keith－小資也能搭出高質感</h6>

                                        <p>小資女孩最愛的新加坡品牌Charles &
                                            Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                                    </div>


                                    <div class="row article-page">
                                        <div class="col">
                                            <ul>
                                                <li class="active"></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>

                                        <div id="arrowLeftBtn" class="col arrow-left d-flex align-items-start pb-2">
                                            <div class="w-100">
                                                <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #000;
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="_圖層_1-2">
                                                        <path class="cls-1" d="M30.21,5.46H.21" />
                                                        <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                        <div id="arrowRightBtn" class="col arrow-right d-flex align-items-start">
                                            <div class="w-100">
                                                <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #000;
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="_圖層_1-2">
                                                        <path class="cls-1" d="M30.21,5.46H.21" />
                                                        <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-02.jpg" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>Charles & Keith－小資也能搭出高質感</h6>

                                        <p>小資女孩最愛的新加坡品牌Charles &
                                            Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                                    </div>

                                    <div class="row article-page">
                                        <div class="col">
                                            <ul>
                                                <li></li>
                                                <li class="active"></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>

                                        <div id="arrowLeftBtn" class="col arrow-left d-flex align-items-start pb-2">
                                            <div class="w-100">
                                                <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #000;
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="_圖層_1-2">
                                                        <path class="cls-1" d="M30.21,5.46H.21" />
                                                        <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                        <div id="arrowRightBtn" class="col arrow-right d-flex align-items-start">
                                            <div class="w-100">
                                                <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #000;
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="_圖層_1-2">
                                                        <path class="cls-1" d="M30.21,5.46H.21" />
                                                        <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-03.jpg" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>Charles & Keith－小資也能搭出高質感</h6>

                                        <p>小資女孩最愛的新加坡品牌Charles &
                                            Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                                    </div>

                                    <div class="row article-page">
                                        <div class="col">
                                            <ul>
                                                <li></li>
                                                <li></li>
                                                <li class="active"></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>

                                        <div id="arrowLeftBtn" class="col arrow-left d-flex align-items-start pb-2">
                                            <div class="w-100">
                                                <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #000;
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="_圖層_1-2">
                                                        <path class="cls-1" d="M30.21,5.46H.21" />
                                                        <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                        <div id="arrowRightBtn" class="col arrow-right d-flex align-items-start">
                                            <div class="w-100">
                                                <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #000;
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="_圖層_1-2">
                                                        <path class="cls-1" d="M30.21,5.46H.21" />
                                                        <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-04.jpg" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>Charles & Keith－小資也能搭出高質感</h6>

                                        <p>小資女孩最愛的新加坡品牌Charles &
                                            Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                                    </div>

                                    <div class="row article-page">
                                        <div class="col">
                                            <ul>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li class="active"></li>
                                                <li></li>
                                            </ul>
                                        </div>

                                        <div id="arrowLeftBtn" class="col arrow-left d-flex align-items-start pb-2">
                                            <div class="w-100">
                                                <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #000;
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="_圖層_1-2">
                                                        <path class="cls-1" d="M30.21,5.46H.21" />
                                                        <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                        <div id="arrowRightBtn" class="col arrow-right d-flex align-items-start">
                                            <div class="w-100">
                                                <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #000;
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="_圖層_1-2">
                                                        <path class="cls-1" d="M30.21,5.46H.21" />
                                                        <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-05.jpg" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>Charles & Keith－小資也能搭出高質感</h6>

                                        <p>小資女孩最愛的新加坡品牌Charles &
                                            Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                                    </div>

                                    <div class="row article-page">
                                        <div class="col">
                                            <ul>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li class="active"></li>
                                            </ul>
                                        </div>

                                        <div id="arrowLeftBtn" class="col arrow-left d-flex align-items-start pb-2">
                                            <div class="w-100">
                                                <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #000;
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="_圖層_1-2">
                                                        <path class="cls-1" d="M30.21,5.46H.21" />
                                                        <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                        <div id="arrowRightBtn" class="col arrow-right d-flex align-items-start">
                                            <div class="w-100">
                                                <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                                    <defs>
                                                        <style>
                                                            .cls-1 {
                                                                fill: #000;
                                                                stroke: #000;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <g id="_圖層_1-2">
                                                        <path class="cls-1" d="M30.21,5.46H.21" />
                                                        <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- 第二篇文章start -->
    <!-- <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <button class="cta-text">BUY NOW</button>
                        <div class="img-wrap">
                            <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                        </div>

                        <div class="article-content-wrap">
                            <div class="sub-content">
                                <h6>Charles & Keith－小資也能搭出高質感</h6>

                                <p>小資女孩最愛的新加坡品牌Charles &
                                    Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                            </div>

                            <div class="row article-page">
                                <div class="col">
                                    <ul>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                                <div class="col arrow-left d-flex align-items-start pb-2">
                                    <div class="w-100">
                                        <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #000;
                                                        stroke: #000;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_圖層_1-2">
                                                <path class="cls-1" d="M30.21,5.46H.21" />
                                                <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                                <div class="col arrow-right d-flex align-items-start">
                                    <div class="w-100">
                                        <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #000;
                                                        stroke: #000;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_圖層_1-2">
                                                <path class="cls-1" d="M30.21,5.46H.21" />
                                                <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <!-- 第三篇文章start -->
    <!-- <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <button class="cta-text">BUY NOW</button>
                        <div class="img-wrap">
                            <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                        </div>

                        <div class="article-content-wrap">
                            <div class="sub-content">
                                <h6>Charles & Keith－小資也能搭出高質感</h6>

                                <p>小資女孩最愛的新加坡品牌Charles &
                                    Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                            </div>

                            <div class="row article-page">
                                <div class="col">
                                    <ul>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                                <div class="col arrow-left d-flex align-items-start pb-2">
                                    <div class="w-100">
                                        <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #000;
                                                        stroke: #000;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_圖層_1-2">
                                                <path class="cls-1" d="M30.21,5.46H.21" />
                                                <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                                <div class="col arrow-right d-flex align-items-start">
                                    <div class="w-100">
                                        <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #000;
                                                        stroke: #000;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_圖層_1-2">
                                                <path class="cls-1" d="M30.21,5.46H.21" />
                                                <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <!-- 第四篇文章start -->
    <!-- <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <button class="cta-text">BUY NOW</button>
                        <div class="img-wrap">
                            <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                        </div>

                        <div class="article-content-wrap">
                            <div class="sub-content">
                                <h6>Charles & Keith－小資也能搭出高質感</h6>

                                <p>小資女孩最愛的新加坡品牌Charles &
                                    Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                            </div>

                            <div class="row article-page">
                                <div class="col">
                                    <ul>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                                <div class="col arrow-left d-flex align-items-start pb-2">
                                    <div class="w-100">
                                        <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #000;
                                                        stroke: #000;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_圖層_1-2">
                                                <path class="cls-1" d="M30.21,5.46H.21" />
                                                <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                                <div class="col arrow-right d-flex align-items-start">
                                    <div class="w-100">
                                        <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #000;
                                                        stroke: #000;
                                                    }
                                                </style>
                                            </defs>
                                            <g id="_圖層_1-2">
                                                <path class="cls-1" d="M30.21,5.46H.21" />
                                                <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
</div>

<!------------------------ 全部文章 end ------------------------------>
<div id="beautySection" class="beautySection">
    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">CHECK NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-04.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-04.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-04.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-04.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="fashionSection" class="fashionSection">
    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">CHECK NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-05.jpg" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-05.jpg" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-05.jpg" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-05.jpg" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="momSection" class="momSection">
    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">CHECK NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="houseSection" class="houseSection">
    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">CHECK NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="livingSection" class="livingSection">
    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">CHECK NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="petSection" class="petSection">
    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">CHECK NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container article-container">
        <div class="article">
            <div class="article-wrap">
                <h5 class="article-title">Bling Bling 嚴選｜百搭包包推薦</h5>
                <div class="row article-ribbon">
                    <div class="col w-100">
                        <img class="" src="./images/line_style01.svg" alt="">
                    </div>
                </div>

                <div class="kol-wrap">
                    <button class="cta-text">BUY NOW</button>
                    <div class="img-wrap">
                        <img class="kol-img w-100" src="./images/kol_images/kol-image-01.png" alt="">
                    </div>

                    <div class="article-content-wrap">
                        <div class="sub-content">
                            <h6>Charles & Keith－小資也能搭出高質感</h6>

                            <p>小資女孩最愛的新加坡品牌Charles &
                                Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
                        </div>

                        <div class="row article-page">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>

                            <div class="col arrow-right d-flex align-items-start">
                                <div class="w-100">
                                    <svg class="arrow-svg" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #000;
                                                    stroke: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="_圖層_1-2">
                                            <path class="cls-1" d="M30.21,5.46H.21" />
                                            <path class="cls-1" d="M.21,5.46L11.21,.46" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?php include __DIR__ . '/parts/footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./js/kol.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>