<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'cart1-none'; // 頁面名稱，可以自定義
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./styles/cart1-no-product.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>


<div class="cart1-no-product-wrap">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="img-wrap w-100 h-100">
                    <img class="w-100 pt-3" src="./images/loading.png" alt="">
                </div>
            </div>

            <div class="col">
                <div class="cta-info-wrap">
                    <div class="top-title pt-3">
                        <h3>Oops！</h3>
                    </div>
                    <div class="middle-sub-title pt-4 pb-4">
                        <h5>您的購物車是空的。</h5>
                    </div>
                    <div class="cta-btn">

                        <a href="./product-list2.php">
                            <button>帶我去挑禮物！Bling</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cart1-no-product-tag-wrap d-md-none">
    <div class="container">
        <div class="row">
            <div class="col">
                <button id="itemsMbTag0" class="hashtag-btn">＃Halloween</button>
                <button id="itemsMbTag1" class="hashtag-btn">＃節慶布置</button>
                <button id="itemsMbTag2" class="hashtag-btn">＃沙發馬鈴薯</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button id="itemsMbTag3" class="hashtag-btn">＃療癒小物</button>
                <button id="itemsMbTag4" class="hashtag-btn">＃儀式感</button>
                <button id="itemsMbTag5" class="hashtag-btn">＃3C宅</button>
            </div>
        </div>
    </div>
</div>

<div class="cart1-no-product-tag-wrap d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col">
                <button id="itemsPcTag0" class="hashtag-btn">＃Halloween</button>
                <button id="itemsPcTag1" class="hashtag-btn">＃節慶布置</button>
                <button id="itemsPcTag2" class="hashtag-btn">＃沙發馬鈴薯</button>
                <button id="itemsPcTag3" class="hashtag-btn">＃療癒小物</button>
                <button id="itemsPcTag4" class="hashtag-btn">＃儀式感</button>
                <button id="itemsPcTag5" class="hashtag-btn">＃3C宅</button>
            </div>
        </div>
    </div>
</div>

<div class="cart1-no-poduct-list-wrap mt-3">
    <div class="container">
        <!--------------min-width 375px-------------- -->
        <div class="product-grey-bg-wrap d-block d-md-none">
            <div class="row product-row no-gutters">

                <div id="itemsMbDefault" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-01.jpeg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">愛不囉嗦 月來月平安星空祈願絢麗雙層禮盒(限定版)
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 796</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-02.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">茗月共賞 中秋星級聯名月餅禮盒-萃釅×TASTE</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,680</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-03.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">天心生醫 滿月兔兔 KF94醫用口罩 10入/包</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 199</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-04.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">月亮慶典 可麗露絲巾禮盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 900</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-05.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">月下邱比特 愛麗絲夢遊仙境特別版 雙層餅乾月餅禮盒限定組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,590</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-06.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">久久津乳酪 包餡金仿木紋紙禮盒 6入</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 950</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-07.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">醉茶－玉雪白茶套裝<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 1,599</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-08.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">BRUNO 多功能電烤盤</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 4,580</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsMbShow0" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-001.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">HAPPY HALLOWEEN字母掛旗 主題派對必備 10入/組
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 900</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-002.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">烏克麗麗 ukelele 夾式耳環－吉他款</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 490</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-003.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">布萊克金black king 蝙蝠耳環</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,280</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-004.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">炫彩蝙蝠 s925純銀耳針造型耳環</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 960</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-005.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Harry Pottery 藥水瓶燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,580</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-006.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">萬聖節交換禮物 南瓜造型療癒床頭燈 夜燈 3D小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,280</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-007.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Halloween 跳跳公仔玩具組<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 599</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-008.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">萬聖節限定 手作惡魔南瓜盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 400</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsMbShow1" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-011.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">派對布置 卡通蠟燭蛋糕造型氣球裝飾道具
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 230</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-010.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">聖誕配對 雪花燈串燈飾布置</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 990</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-014.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">女孩夢幻生日派對 馬卡龍氣球 混色10入組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 250</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-012.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">節慶布置 生日派對金屬氣球套裝36入組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 190</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-013.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">蒂芬妮派對 生日快樂套派對氣球套裝組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 495</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-009.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">聖誕佈置唯美LED星星燈具組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 309</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-015.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">星星造型 北歐香薰造型香氛蠟燭<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 799</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-016.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">粉嫩公主 馬卡龍色系造型氣球組 生日、情人節必備</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 999</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsMbShow2" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-017.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">小清新 北歐小雛菊毛毯抱枕組 沙發馬鈴薯必備
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,380</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-021.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">正版授權 蠟筆小新聯名款 可愛拼貼乳牛毛毯</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 590</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-019.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">刺蝟寶寶抱枕2入組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 990</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-020.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">藍色海洋小鯨魚抱枕+冷氣毯套組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,080</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-018.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">北歐幾何抱枕 4入/組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 999</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-022.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">棉花田 可愛造型護腰靠枕 小棕熊</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 499</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-023.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">U型可愛卡通抱枕 靠枕 護頸枕<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 299</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-024.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">多功能保暖披肩毯 保暖毛毯 80*135CM 經典綠格紋</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 699</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsMbShow3" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-025.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">小人退散 辦公室必備 喜怒哀樂眾生相橡膠人頭 4入/組
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 799</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-026.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">KAKAO FRIENDS 造型公仔卡通護手腕枕</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 599</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-027.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">正版授權 蠟筆小新聯名款 賴床小新USB隨身碟 32G</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 690</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-030.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">療癒公仔 瑜珈動物系列扭蛋套組 10入</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 599</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-029.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">日本空運限定款 NTT公用電話扭蛋扭蛋6件組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,109</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-028.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">減壓玩具 捏爆上司！紓壓洩憤光頭人臉球 橡膠人頭 5入/組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 399</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-031.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">厭世上班族 耍自閉小角落充電線 紫色自閉款<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 319</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-032.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">眼神死厭世動物抱枕 大嘴鳥+狐狸2入組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 750</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsMbShow4" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-033.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Sevin London 丁香花、烏木與佛⼿柑 ⼤理⽯黑香氛蠟燭
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 2,340</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-034.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">居家生活美學 金邊大理石多功能置物盤</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 2,980</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-035.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">儀式感首選必備 聖誕裝飾樹</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 799</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-040.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">北歐風 萊奧納多單吊燈 3色/組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,980</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-037.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">法式鄉村風 復古花瓣餐盤3件組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 2,180</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-038.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">黑色大理石系列 金屬質感陶瓷餐盤5件組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 3,980</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-039.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">LAUNDRY 精油擴香蠟燭套裝組<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,790</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-036.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">交換禮物首選 手工琉璃聖誕擴香禮盒組 2022限定款</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,299</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsMbShow5" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-041.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">迷你隨身機器人造型無線藍牙喇叭 10小時超長續航 免提通話藍牙音箱 附掛繩
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 880</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <a href="http://localhost/blingbling/product_details.php?sid=141">
                                            <img src="./images/products/tag-item-049.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">LOMO INSTANT AUTOMAT SUNDAE KIDS 拍立得</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 6,980</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-043.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">造物主義 宅家必備便攜式磁感應木質小音響 手機藍芽喇叭</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 799</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-044.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">復古迷你FC街機遊戲機 3吋螢幕 內置360遊戲</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 899</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-045.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Apple Watch 不鏽剛錶帶 鑽石手鍊帶 44 42mm 38 40mm</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 329</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-046.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">正版授權 蠟筆小新聯名款 復古造型無線鍵盤+滑鼠護腕4件組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 2,290</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-047.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">日本空運限定組 超少限量！「日清杯麵」超狂跨界聯名電競耳機<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 6,990</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-048.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">LOFREE 小黃鴨薯片造型無線藍芽滑鼠 黃色款</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 999</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!--------------min-width 768px-------------- -->
        <div class="pc-product-grey-bg-wrap d-none d-md-block">
            <div class="row product-row no-gutters">

                <div id="itemsPcDefault" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-01.jpeg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">愛不囉嗦 月來月平安星空祈願絢麗雙層禮盒(限定版)
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 796</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-02.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">茗月共賞 中秋星級聯名月餅禮盒-萃釅×TASTE</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,680</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-03.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">天心生醫 滿月兔兔 KF94醫用口罩 10入/包</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 199</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-04.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">月亮慶典 可麗露絲巾禮盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 900</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-05.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">月下邱比特 愛麗絲夢遊仙境特別版 雙層餅乾月餅禮盒限定組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,590</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-06.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">久久津乳酪 包餡金仿木紋紙禮盒 6入</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 950</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-07.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">醉茶－玉雪白茶套裝<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 1,599</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/festival-08.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">BRUNO 多功能電烤盤</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 4,580</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsPcShow0" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-001.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">HAPPY HALLOWEEN字母掛旗 主題派對必備 10入/組
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 900</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-002.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">烏克麗麗 ukelele 夾式耳環－吉他款</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 490</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-003.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">布萊克金black king 蝙蝠耳環</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,280</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-004.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">炫彩蝙蝠 s925純銀耳針造型耳環</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 960</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-005.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Harry Pottery 藥水瓶燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,280</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-006.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">萬聖節交換禮物 南瓜造型療癒床頭燈 夜燈 3D小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,280</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-007.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Halloween 跳跳公仔玩具組<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 599</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-008.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">萬聖節限定 手作惡魔南瓜盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 400</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsPcShow1" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-009.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">派對布置 卡通蠟燭蛋糕造型氣球裝飾道具
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 230</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-011.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">聖誕配對 雪花燈串燈飾布置</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 990</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-014.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">女孩夢幻生日派對 馬卡龍氣球 混色10入組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 250</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-010.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">節慶布置 生日派對金屬氣球套裝36入組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 190</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-013.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">蒂芬妮派對 生日快樂套派對氣球套裝組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 495</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-012.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">聖誕佈置唯美LED星星燈具組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 309</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-015.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">星星造型 北歐香薰造型香氛蠟燭<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 799</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-016.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">粉嫩公主 馬卡龍色系造型氣球組 生日、情人節必備</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 999</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsPcShow2" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-017.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">小清新 北歐小雛菊毛毯抱枕組 沙發馬鈴薯必備
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,380</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-021.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">正版授權 蠟筆小新聯名款 可愛拼貼乳牛毛毯</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 590</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-023.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">U型可愛卡通抱枕 靠枕 護頸枕</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 299</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-020.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">藍色海洋小鯨魚抱枕+冷氣毯套組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,080</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-018.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">北歐幾何抱枕 4入/組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 999</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-022.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">棉花田 可愛造型護腰靠枕 小棕熊</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 499</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-019.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">刺蝟寶寶抱枕2入組<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 990</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-024.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">多功能保暖披肩毯 保暖毛毯 80*135CM 經典綠格紋</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 699</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsPcShow3" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-025.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">小人退散 辦公室必備 喜怒哀樂眾生相橡膠人頭 4入/組
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 799</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-026.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">KAKAO FRIENDS 造型公仔卡通護手腕枕</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 599</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-027.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">正版授權 蠟筆小新聯名款 賴床小新USB隨身碟 32G</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 690</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-030.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">療癒公仔 瑜珈動物系列扭蛋套組 10入</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 590</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-029.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">日本空運限定款 NTT公用電話扭蛋扭蛋6件組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,109</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-028.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">減壓玩具 捏爆上司！紓壓洩憤光頭人臉球 橡膠人頭 5入/組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 399</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-031.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">厭世上班族 耍自閉小角落充電線 紫色自閉款<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 319</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-032.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">眼神死厭世動物抱枕 大嘴鳥+狐狸2入組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 750</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsPcShow4" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-033.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Sevin London 丁香花、烏木與佛⼿柑 ⼤理⽯黑香氛蠟燭
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 2,340</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-040.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">北歐風 萊奧納多單吊燈 3色/組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,980</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-034.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">居家生活美學 金邊大理石多功能置物盤</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 2,980</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-035.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">儀式感首選必備 聖誕裝飾樹</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 799</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-036.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">交換禮物首選 手工琉璃聖誕擴香禮盒組 2022限定款</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,299</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-037.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">法式鄉村風 復古花瓣餐盤3件組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 2,180</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-038.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">黑色大理石系列 金屬質感陶瓷餐盤5件組<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,790</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-039.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">LAUNDRY 精油擴香蠟燭套裝組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 2,790</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="itemsPcShow5" class="col-12">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-041.jpg" alt="">
                                    </div>
                                </div>

                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">迷你隨身機器人造型無線藍牙喇叭 10小時超長續航 免提通話藍牙音箱 附掛繩
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 880</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <a href="http://localhost/blingbling/product_details.php?sid=141">
                                            <img src="./images/products/tag-item-049.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">LOMO INSTANT AUTOMAT SUNDAE KIDS 拍立得</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 6,980</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-046.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">正版授權 蠟筆小新聯名款 復古造型無線鍵盤+滑鼠護腕4件組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 2,290</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-044.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">復古迷你FC街機遊戲機 3吋螢幕 內置360遊戲</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 899</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-045.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Apple Watch 不鏽剛錶帶 鑽石手鍊帶 44 42mm 38 40mm</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 329</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-043.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">造物主義 宅家必備便攜式磁感應木質小音響 手機藍芽喇叭</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 799</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-048.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">LOFREE 小黃鴨薯片造型無線藍芽滑鼠 黃色款<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 999</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-047.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">日本空運限定組 超少限量！「日清杯麵」超狂跨界聯名電競耳機</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 6,990</p>

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
<script src="./js/cart1-none.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>