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

                        <a href="./product-list.php">
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>

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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/festival-07.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-007.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-015.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-023.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-031.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-039.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-047.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-042.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/festival-07.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-007.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-015.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-019.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-031.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-038.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
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
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>
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
                                    <h3 class="info-title pt-3">創意小物館 夜光月球遙控小夜燈創物館夜光月球遙控小夜燈創意小物館夜光月球遙控小夜燈創意小
                                    </h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 296</p>
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
                                    <h3 class="info-title pt-3">怦然心動 永生花造型床頭小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,480</p>
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
                                    <h3 class="info-title pt-3">太空人磁懸浮藍芽音箱 坐姿款 - 銀色</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,052</p>
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
                                    <h3 class="info-title pt-3">Light光印樣 月亮與小兔 中秋造型小夜燈</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 864</p>
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
                                    <h3 class="info-title pt-3">La Millou 豆豆安撫兔禮盒組</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 1,998</p>
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
                                    <h3 class="info-title pt-3">mamaway 無袖傘狀背心+寬褲孕哺兩件式套裝 綠S</h3>
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
                                        <img src="./images/products/tag-item-042.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">Lassig 時尚完美大開口後背媽媽包 粉-L<h3>
                                            <div class="info-price-btn">
                                                <p class="pt-2">NT$ 2,129</p>
                                            </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-4 col-lg-3 product-col">
                            <div class="poduct-card">
                                <div class="img-wrap">
                                    <div class="img-bg">
                                        <img src="./images/products/tag-item-041.jpg" alt="">
                                    </div>
                                </div>
                                <div class="info-wrap">
                                    <h3 class="info-title pt-3">小王子聯名 閃耀星空8結彌月提盒</h3>
                                    <div class="info-price-btn">
                                        <p class="pt-2">NT$ 300</p>

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