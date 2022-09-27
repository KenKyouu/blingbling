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
                        <a href="./product-list.php"><button>帶我去挑禮物！Bling</button></a>
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
                <button class="hashtag-btn">＃Halloween</button>
                <button class="hashtag-btn">＃節慶布置</button>
                <button class="hashtag-btn">＃沙發馬鈴薯</button>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button class="hashtag-btn">＃療癒小物</button>
                <button class="hashtag-btn">＃儀式感</button>
                <button class="hashtag-btn">＃3C宅</button>
            </div>
        </div>
    </div>
</div>

<div class="cart1-no-product-tag-wrap d-none d-md-block">
    <div class="container">
        <div class="row">
            <div class="col">
                <button class="hashtag-btn">＃Halloween</button>
                <button class="hashtag-btn">＃節慶布置</button>
                <button class="hashtag-btn">＃沙發馬鈴薯</button>
                <button class="hashtag-btn">＃療癒小物</button>
                <button class="hashtag-btn">＃儀式感</button>
                <button class="hashtag-btn">＃3C宅</button>
            </div>
        </div>
    </div>
</div>

<div class="cart1-no-poduct-list-wrap mt-3">
    <div class="container">
        <!--------------min-width 375px-------------- -->
        <div class="product-grey-bg-wrap d-block d-md-none">
            <div class="row product-row no-gutters">
                <div class="col-12">
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                                <button>
                                                    <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                        <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                        <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                        <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                        <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                                    </svg>

                                                </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                <div class="col-12">
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
                                        <button class="d-flex">
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>
                                        </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
                                                <button>
                                                    <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                        <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                        <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                        <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                        <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                                    </svg>

                                                </button>
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
                                        <button>
                                            <svg width="30" height="20" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#fff" stroke="#fff" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#fff" stroke="#fff" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#fff" stroke="#fff" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#fff" stroke="#fff" />
                                            </svg>

                                        </button>
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
<?php include __DIR__ . '/parts/html-foot.php'; ?>