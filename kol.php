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

    <!------------------------ 全部文章 start ------------------------------>
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
                                        <h6>小資女必收！時尚界KOL的愛包TOP5</h6>

                                        <p>小資女同盟再上線！隨著換季的同時，也是時候該來點新的了吧！今天B編就要來推薦幾個質感不輸精品的小資女包款，除了基本的必備條件「平價」外，質感也是水準以上，讓女孩們用最優惠的價格帶走高CP的包款，每一款都超生火，小心被燒的體無完膚～</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-02.png" alt="">
                                    <button class="ctaBtn"><span>CHECK NOW</span></button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦1：Ella指定愛用款 #ROBINMAY雙層斜背包</h6>

                                        <p>RM質感五金LOGO搭配壓扣封口設計，金屬鍊條讓包包質感大大提升，長夾也能放得下！再仔細看包包的車線，妳會發現他們家包包質感真的很好，車線也都很細緻，五金的配色也超美的。真心覺得ROBINMAY的包裝真的越來越精緻，如果有想送禮的朋友還可以寫張小卡片，收到的朋友一定會超級喜歡。</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-03.png" alt="">
                                    <button class="ctaBtn">CHECK NOW</button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦2：#ROBINMAY 鉑斯皇冠斜背包</h6>

                                        <p>Ella推薦再一咖！馬卡龍繽紛色系搭配多種背法，讓包款一上架就大受歡迎，率性俐落的粗鍊條設計深受個性女孩的喜愛，同時有著精品高質感的品質和親民的價格，可斜背、手提、肩背，怎麼背都超好搭配的！超推薦給預算有限又想嘗試有質感的包款的輕熟小資女入手噢！</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-04.png" alt="">
                                    <button class="ctaBtn">CHECK NOW</button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦3：歐美時尚圈人手一咖 #Rebecca Minkoff</h6>

                                        <p>2005年在紐約創立的時尚小眾品牌Rebecca Minkoff，品牌包括各種時裝單品，手提包、皮件、鞋類、珠寶以及配飾等等，其中最經典的包款之一就是「Morning After Bag」（MAB），一度風靡時尚圈，名人都搶著背！率性俐落的鉚釘、鍊條設計深受個性女孩的喜愛，價格也非常甜！</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-05.png" alt="">
                                    <button class="ctaBtn">CHECK NOW</button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦4：#Charles&Keith Gabine真皮馬鞍包</h6>

                                        <p>由人氣韓星Krystal代言的小ck火紅程度不輸精品名牌包，這款真皮馬鞍包延續D字釦的優雅特質搭配金釦，各種場合都能輕裝上陣。包款設計俐落簡約，品牌走高級質感的精緻風格，但價格卻是精品名牌的砍半再砍半！小CK在包包品牌界的超高CP值眾所皆知，可以說是為小資女最喜愛的平價品牌之一。</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="arrowLeft" class="col d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="arrowRight" class="col d-flex align-items-start pb-2">
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

        <!-- 第二篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">情侶生日禮物送什麼？送禮攻略大指南！</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-36.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>遊戲機、模型公仔、皮件，5大送禮攻略必讀！</h6>

                                        <p>男/女朋友又要生日了！送禮難題即將到來，這次小編要用曖昧期、熱戀期等各種不同「五階段」的情侶歷程來為大家整理最詳細的送禮攻略，讓你可以用彼此的相處狀態判斷，什麼樣的禮物才是最合適的。還在煩惱的你，快接下去閱讀！</p>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-02.jpg" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>Charles & Keith－小資也能搭出高質感</h6>

                                        <p>小資女孩最愛的新加坡品牌Charles &
                                            Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
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
                                </div>
                            </div> -->
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

        <!-- 第三篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">WFH提升效率超有感！15款居家辦公必備小物推薦</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-33.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>擊退懶散，打造專心舒適的辦公生活</h6>

                                        <p>本土疫情仍未退燒，大多數公司彈性採取居家辦公，讓員工在家可以安心上班，頭三四天還感覺在家工作好幸福，可隨著時間一長就會發現，在家工作可能沒有想像中方便，要什麼沒什麼好崩潰？
                                            B編們精挑細選了5款高質感又好用的居家辦公小物，陪伴你度過一整天待在電腦前的煩悶 !</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

        <!-- 第四篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">2022熱門「孕媽咪送禮推薦」TOP5！</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-26.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>最實用孕媽咪送禮攻略，送到媽咪心坎裡</h6>

                                        <p>誰說送禮只能送給寶寶，孕媽咪也想收到禮物呀～媽咪在懷孕期間其實有很多要面對的改變，不單單只是身體上的變化，心裡更要承擔不同的壓力，如果可以為他們送上一份禮物，必定會讓媽咪又驚又喜！

                                            但禮物要怎麼準備才能照顧到媽咪的心又能兼具送禮的驚喜感呢？別擔心～孕媽咪送禮攻略一次教給你！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

        <!-- 第五篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">5款最時尚又實用的送禮家電推薦清單！</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-30.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>家電美學正夯！時尚×實用才是首選</h6>

                                        <p>送禮要送的好除了禮物實用，時尚美型的外表，也能讓收到禮物的人開心又驚喜，不論是對新人的新婚賀禮、或是新居落成的祝福心意，B以預算NT$5000元以內精心挑選出5款時尚又實用的生活家電，時尚美型的外表讓使用的人心情瞬間也會變好，不用時擺在家裡當裝飾品也能美美的！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

        <!-- 第六篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">Bling Bling｜嚴選超推薦5款創意小夜燈</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-34.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>最暖心的陪伴，照亮每個溫暖的夜晚</h6>

                                        <p>很多人喜歡睡前滑手機、閱讀一下書來培養睡意，或者半夜容易起床上廁所，都是需要足夠的光線來活動但亮度又不能強，而現在夜燈的款式及功能性越來越多樣化，如何在眾多商品中選擇一個適合自己的呢?此篇嚴選5款小夜燈，不只是亮，更是提升臥室質感的必備居家小物噢！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

    <!------------------------ 美妝保養 start ------------------------------>
    <div id="beautySection" class="beautySection">
        <!-- 第一篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">Blig Bling 推薦｜油保養選購攻略</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-16.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>乾癢脫妝萬用救星－美容油</h6>

                                        <p>正確有效的保濕不能只靠補水，給予肌膚足夠「油」份也很關鍵，尤其是在秋冬季節，肌膚粗糙乾癢、保養品吸收不佳、妝都上不去、感覺乳液/乳霜的滋潤度已經不夠力時，就可以加入「美容油」來升級潤澤力！B編們特別集結了臉部&身體熱門話題「美容油」實測評比推薦，快挑一瓶最適合你的美容油，新的一年就用「油保養」幫美肌開光！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

        <!-- 第二篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">跟著Bling Bling買｜夏天粉底液5款推薦</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-17.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>控油、持妝、高遮瑕，流汗也不怕底妝土石流</h6>

                                        <p>炎炎夏日最容易爆汗又爆油，強調「持久型」的底妝成為彩妝控夏日必備。遮瑕力、保濕效果均優的粉底液能打造自然光澤的無瑕妝感，有的商品更結合多種保養精華，讓粉底也能成為滋養肌膚的幫手。這次就為大家整理出經典款持妝粉底，加強控油、抗汗、耐磨擦，尤其適合油肌與混合肌！</p>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-02.jpg" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>Charles & Keith－小資也能搭出高質感</h6>

                                        <p>小資女孩最愛的新加坡品牌Charles &
                                            Keith包包來啦～小CK的包包不但具備高流行度、品質好、做工優異，價格還很親民，B編嚴選8款百搭包包，挑選流行時尚、好搭、實用的美包，輕鬆做出零失誤好感穿搭</p>
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
                                </div>
                            </div> -->
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

        <!-- 第三篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">美妝部落客推薦5款愛用腮紅</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-18.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>天然蘋果光的好氣色，推薦給你可愛技巧的獨家畫法！

                                        </h6>

                                        <p>打腮紅除了讓人覺得可愛之外，其實也是讓整體有氣色的一種方法，還能修容跟增加透明感，不限於年紀或是印象，但要如何化才不會化成猴子屁股？此篇除了介紹人氣腮紅排行榜之外，還介紹知名化妝老師「絕對不會失敗的腮紅畫法」。</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

    <!------------------------ 流行時尚 start ------------------------------>
    <div id="fashionSection" class="fashionSection">
        <!-- 第一篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">七夕禮物推薦｜情人節對錶首選</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-27.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>#希奧朵拉THEODORA’S Mercury太陽能對錶</h6>

                                        <p>如果說戒指有定終生的意涵，那對錶就是一段感情中，中程計畫的送禮首選。它不僅在意義上不會讓對方覺得壓力山大，也同時展現送禮人的質感。如果你常常不小心登上網友最雷情人節禮物排行，情侶對錶絕對是讓你今年七夕脫胎換骨的送禮首選！</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row article-page swiper-train-btn">
                                <div class="col">
                                    <ul>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                                <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                    <div class="w-100">
                                        <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #c2c2c2;
                                                        stroke: #c2c2c2;
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

                                <div id="" class="col arrow-right d-flex align-items-start">
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
        <!-- 第二篇文章startt(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">請Tag男友！女孩最想要的香水禮物清單</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-29.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>嚴選必送－Jo Malone、La Belle Mèche、YSL限定禮盒太美！</h6>

                                        <p>大家最愛的香氛特輯又來囉～ 這次要跟大家分享買給女友絕不會出錯的香水禮物清單，想討另一半的歡心，請一定要將下來的香水們筆記下來，不論是生日還是週年禮物，甚至是為了接下來的聖誕節作準備都很合適。如果是跟我B編們一樣就是愛收藏香氛的女孩，更不能錯過這篇的分享噢！</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row article-page swiper-train-btn">
                                <div class="col">
                                    <ul>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                                <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                    <div class="w-100">
                                        <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #c2c2c2;
                                                        stroke: #c2c2c2;
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

                                <div id="" class="col arrow-right d-flex align-items-start">
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

        <!-- 第三篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">2022男香推薦！適合男生的香水不是只有木質調！</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-28.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>一噴秒變女生無法抗拒的行走荷爾蒙</h6>

                                        <p>香水是提升男性氣質魅力的一大利器，本篇文章編輯將推薦今年最受歡迎的男性香水，包括木質調、海洋調、柑橘調這些公認男生最常使用的香調，更會有以渣男、暖男為主題的特色男士香水。看完不用再煩惱男生香水要去哪裡買、如何挑選，只需要擔心噴上香水後令人難以招架的魅力。</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

    <!------------------------ 母嬰幼兒 start ------------------------------>
    <div id="momSection" class="momSection">
        <!-- 第一篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">Blig Bling 推薦｜彌月禮物TOP5排行榜</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-24.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>彌月禮物的選購要點一次搞懂！</h6>

                                        <p>新生兒的誕生總是令人喜悅，為了慶祝這美好的事，在寶寶滿月時送上「彌月禮物」以表達心意，不過，該如何挑選能夠送到心坎裡的禮物，卻讓不少初次接觸的新手們傷透腦筋。作為一份充滿祝福的彌月禮物，如果能讓寶寶開心、媽媽也滿意的話是再好不過了，以下就來看看挑選彌月禮物時有哪些小要領吧！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

        <!-- 第二篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">新生兒彌月彌月禮盒推薦，用小預算送進媽媽心坎裡 !</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-25.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>最受爸媽喜愛的彌月禮物排行榜TOP5</h6>

                                        <p>寶寶彌月禮不是只有尿布跟衣服的選項，育兒用品五花八門多達上千種，有些每年推陳出新，有新經典款歷久彌新，到底怎麼樣才能送對東西 ?!就讓Bling Bling集結多年挑品經驗，加上門市最熱門銷售品項，將包裝體面、質感好又實用的育兒好物推薦給你們 !</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

        <!-- 第三篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">2022熱門「孕媽咪送禮推薦」TOP5！</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-26.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>最實用孕媽咪送禮攻略，送到媽咪心坎裡</h6>

                                        <p>誰說送禮只能送給寶寶，孕媽咪也想收到禮物呀～媽咪在懷孕期間其實有很多要面對的改變，不單單只是身體上的變化，心裡更要承擔不同的壓力，如果可以為他們送上一份禮物，必定會讓媽咪又驚又喜！
                                            但禮物要怎麼準備才能照顧到媽咪的心又能兼具送禮的驚喜感呢？別擔心～孕媽咪送禮攻略一次教給你！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

    <!------------------------ 數位家電 start ------------------------------>
    <div id="houseSection" class="houseSection">
        <!-- 第一篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">科技男友的禮物就這樣送！</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-11.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>獻給3C、科技感十足的時尚男友</h6>

                                        <p>「怎麼辦！男友生日快到了要送什麼好？」、「下個月是交往一週年紀念日，禮物有推薦的嗎？」、「情人節禮物送這個，會不會太貴？男友會喜歡嗎？」煩惱禮物送什麼這件事，大概會讓眾多妞兒掉光一半的頭髮吧！這一次B編依據兩人交往的時間，幫大家搜集整理歸納並盤點出5個最棒的男生情人節禮物，提供大家一些送禮的靈感！</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row article-page swiper-train-btn">
                                <div class="col">
                                    <ul>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                                <div id="" class="col d-flex align-items-start pb-2">
                                    <div class="w-100">
                                        <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #c2c2c2;
                                                        stroke: #c2c2c2;
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

                                <div id="" class="col d-flex align-items-start">
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

        <!-- 第二篇文章start -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">復古藍芽音響特輯！造型×可愛度×質感爆棚</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="swiper-wrap d-flex">
                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-06.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>簡約、復古、獨特 一次擁有</h6>

                                        <p>最近藍牙音響吹起了一股復古風，每一款的復古設計都別出心裁！在本篇復古藍牙音響特輯中，小編將會為你推薦 8 款不同造型的復古藍牙音響，從可愛的煤油燈造型，到質感爆棚的收音機造型通通有，就是要讓你感受一下復古藍牙音響的魅力，看完就直接入手一款自己喜歡的藍牙音響吧！</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-07.png" alt="">
                                    <button class="ctaBtn"><a href="http://localhost/blingbling/product_details.php?sid=97">CHECK NOW</a></button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦1：#Divoom Ditoo 像素復古藍牙音響</h6>

                                        <p>咦～這不是復古電腦嗎？其實它是一款造型像復古電腦的藍牙音響！這款復古藍牙音響可以透過手機 App 來做到很多事情，包括播放音樂、設定鬧鐘、輸入語音備忘錄等，甚至還能玩復古的小遊戲哦！</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-08.png" alt="">
                                    <button class="ctaBtn">CHECK NOW</button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦2：#LIFE WEAR HOUSE 機器人藍芽音響</h6>
                                        <p>迷你可愛的機器人，出遠門必備的藍芽音響，輕巧好攜帶出門，讓旅遊的路途上有音樂的陪伴，加倍享受旅途的美好!</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-09.png" alt="">
                                    <button class="ctaBtn">CHECK NOW</button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦3：#Marley Get Together 2 Mini 藍牙音響</h6>

                                        <p>這款 Marley 藍牙音響不只擁有 20W 超大功率的音量功能，還有 IP67 等級防水防塵設計。在戶外露營想聽音樂時，只要有了這款 Marley 藍牙音響就能盡情享受自己喜歡的音樂。</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-10.png" alt="">
                                    <button class="ctaBtn">CHECK NOW</button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦4：#MUZEN OTR Metal 經典復刻藍牙音響</h6>

                                        <p>接下來這款藍牙音響的造型也很復古，以 1960 年代崇尚自由的嬉皮文化為主題，雖然外表是復古的收音機造型，卻能夠透過藍牙來連接手機播放音樂，可以說是復古與科技的結合！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="houseArrowLeft" class="col d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="houseArrowRight" class="col d-flex align-items-start">
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

        <!-- 第三篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">4款人氣家用咖啡機推薦</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-32.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>意式、美式選購要點大集合</h6>

                                        <p>咖啡機是一種沖煮咖啡機具的總稱。喝咖啡已經成為了很多人的一個生活習慣，如果在家自己製作咖啡更是方便又實用，那麼家用咖啡機該怎麼選擇？全自動咖啡機和半自動咖啡機又有什麼區別呢？在這裡B編幫大家彙整出4款平價家用咖啡機推薦品牌，並將半自動/全自動咖啡機差別、選購要點該怎麼選？就看這一篇！</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row article-page swiper-train-btn">
                                <div class="col">
                                    <ul>
                                        <li class="active"></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                                <div id="" class="col d-flex align-items-start pb-2">
                                    <div class="w-100">
                                        <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: #c2c2c2;
                                                        stroke: #c2c2c2;
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

                                <div id="" class="col d-flex align-items-start">
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
    <!------------------------ 居家生活 start ------------------------------>
    <div id="livingSection" class="livingSection">
        <!-- 第一篇文章start -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">Bling Bling 嚴選｜高質感居家擴香推薦</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="swiper-wrap d-flex">
                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-19.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>營造儀式感，挑選屬於自己的味道</h6>

                                        <p>你的家是什麼味道呢？是帶有沉穩基調的木質香？還是清新的雪松香混著薄荷香？或是舒緩助眠的薰衣草香、優雅細緻的白茶香、活潑愉悅的葡萄柚果香、放鬆的柑橘味呢？不管是營造居家品味、送禮，它都是你個人的品味象徵。到底該怎麼挑選呢？與我們一起踏入香氛的世界一探究竟吧！</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-20.png" alt="">
                                    <button class="ctaBtn">CHECK NOW</button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦1：#JO MALONE LONDON 英國梨與小蒼蘭</h6>

                                        <p>最經典的香味之一，彷彿集結秋天的氣息。 猶如新鮮採摘的清新梨子香氣，搭配白色小蒼蘭所綻放的花香，佐以琥珀、廣藿香與木質香調的柔和芳香。 擁有奢華的金色光澤，以及低調時尚的包裝設計感。</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-21.png" alt="">
                                    <button class="ctaBtn">CHECK NOW</button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦2：#RLa Belle Mèche 玫瑰廣藿香</h6>

                                        <p>來自法國文化之都里昂的La Belle Mèche，商品全程於法國製造，室內擴香系列共有8款香氣，其中的玫瑰廣藿香是台灣銷售第一名的人氣香氣，揉合甜美花香與神秘的木質大地香氣，很推薦可以擺放在臥室空間。內附10根天然藤枝，可以依照個人喜好調整擴香強度，每瓶約可使用3個月。</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-22.png" alt="">
                                    <button class="ctaBtn">CHECK NOW</button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦3：#bamford 餘暉香氛室內擴香</h6>

                                        <p>源自英國的天然有機生活風格品牌bamford，以療癒香氣聞名，這款餘暉香氛室內擴香結合甜橙、香根草與羅勒的清新，加上濃郁的雪松、廣藿香與膠冷杉。瓶身的設計是採用傳統工藝製成手作口吹玻璃瓶，搭配仿真實樹枝彎曲的擴香竹，完美詮釋低調奢華品味。</p>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-23.png" alt="">
                                    <button class="ctaBtn">CHECK NOW</button>
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>推薦4：#L’OCCITANE 和諧擴香</h6>

                                        <p>源自南法普羅旺斯的L’OCCITANE，居家香氛系列是許多鐵粉會一直回購。和諧擴香蘊含絲柏、百里香、尤加利與依蘭依蘭精華油的森林木質調，想像自己漫步森林，帶來一種寧靜感。瓶身以100%回收PET塑膠製作。</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="livingArrowLeft" class="col d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="livingArrowRight" class="col d-flex align-items-start">
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

        <!-- 第二篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">WFH提升效率超有感！15款居家辦公必備小物推薦</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-33.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>擊退懶散，打造專心舒適的辦公生活</h6>

                                        <p>本土疫情仍未退燒，大多數公司彈性採取居家辦公，讓員工在家可以安心上班，頭三四天還感覺在家工作好幸福，可隨著時間一長就會發現，在家工作可能沒有想像中方便，要什麼沒什麼好崩潰？
                                            B編們精挑細選了5款高質感又好用的居家辦公小物，陪伴你度過一整天待在電腦前的煩悶 !</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

        <!-- 第三篇文章start(無輪播) -->
        <div class="container article-container">
            <div class="article">
                <div class="article-wrap">
                    <h5 class="article-title">Bling Bling｜嚴選超推薦5款創意小夜燈</h5>
                    <div class="row article-ribbon">
                        <div class="col w-100">
                            <img class="" src="./images/line_style01.svg" alt="">
                        </div>
                    </div>

                    <div class="kol-wrap">
                        <div class="none-swiper-wrap w-100 d-flex">
                            <div class="none-swiper-train">
                                <div class="img-wrap d-flex">
                                    <img class="kol-img w-100" src="./images/kol_images/kol-image-34.png" alt="">
                                </div>

                                <div class="article-content-wrap">
                                    <div class="sub-content">
                                        <h6>最暖心的陪伴，照亮每個溫暖的夜晚</h6>

                                        <p>很多人喜歡睡前滑手機、閱讀一下書來培養睡意，或者半夜容易起床上廁所，都是需要足夠的光線來活動但亮度又不能強，而現在夜燈的款式及功能性越來越多樣化，如何在眾多商品中選擇一個適合自己的呢?此篇嚴選5款小夜燈，不只是亮，更是提升臥室質感的必備居家小物噢！</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row article-page swiper-train-btn">
                            <div class="col">
                                <ul>
                                    <li class="active"></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>

                            <div id="" class="col arrow-left d-flex align-items-start pb-2">
                                <div class="w-100">
                                    <svg class="arrow-active" id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30.21 5.96">
                                        <defs>
                                            <style>
                                                .cls-1 {
                                                    fill: #c2c2c2;
                                                    stroke: #c2c2c2;
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

                            <div id="" class="col arrow-right d-flex align-items-start">
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

<?php include __DIR__ . '/parts/footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./js/kol.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>