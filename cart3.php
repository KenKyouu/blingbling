<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'cart3'; // 頁面名稱，可以自定義

$user = $_SESSION['user']['id'];
$member = $pdo->query("SELECT * FROM member WHERE sid=$user")->fetchAll();
$orders = $pdo->query("SELECT * FROM `orders` WHERE `member_sid`= $user order by `sid` DESC LIMIT 1")->fetchAll();

$order_details = $pdo->query("SELECT o.`sid`, od.price,od.quantity,od.product_sid, p.name FROM orders o JOIN order_details od ON o.sid = od.orders_sid JOIN product p ON p.sid = od.product_sid WHERE o.`member_sid`= $user and o.`sid` = (SELECT `sid` FROM `orders` WHERE `member_sid`= $user order by `sid` DESC LIMIT 1);")->fetchAll();

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./styles/cart3.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>

<div class="s-total-list-wrap">
    <div class="container">

        <div class="j-progress-bar">
            <div class="j-step-up">
                <div class="j-step">
                    <div class="j-svg-wrap">
                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.2114 0.213808L7.94052 9.48013C7.6553 9.76521 7.19535 9.76521 6.91013 9.48013L2.78859 5.36063C2.50337 5.07555 2.04343 5.07555 1.75821 5.36063L0.213914 6.90415C-0.0713047 7.18922 -0.0713047 7.64895 0.213914 7.93402L6.91013 14.6269C7.19535 14.912 7.6553 14.912 7.94052 14.6269L10.0013 12.5672L19.7861 2.78722C20.0713 2.50214 20.0713 2.04242 19.7861 1.75734L18.2418 0.213808C17.9566 -0.0712695 17.4941 -0.0712695 17.2114 0.213808Z" fill="black" />
                        </svg>
                    </div>
                </div>
                <div class="j-line"></div>
                <div class="j-step">
                    <div class="j-svg-wrap">
                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.2114 0.213808L7.94052 9.48013C7.6553 9.76521 7.19535 9.76521 6.91013 9.48013L2.78859 5.36063C2.50337 5.07555 2.04343 5.07555 1.75821 5.36063L0.213914 6.90415C-0.0713047 7.18922 -0.0713047 7.64895 0.213914 7.93402L6.91013 14.6269C7.19535 14.912 7.6553 14.912 7.94052 14.6269L10.0013 12.5672L19.7861 2.78722C20.0713 2.50214 20.0713 2.04242 19.7861 1.75734L18.2418 0.213808C17.9566 -0.0712695 17.4941 -0.0712695 17.2114 0.213808Z" fill="black" />
                        </svg>
                    </div>
                </div>
                <div class="j-line"></div>
                <div class="j-step3-num">
                    <div class="j-num3">3</div>
                </div>
            </div>
            <div class="j-step-down">
                <div class="j-step-text">
                    <p>購買明細</p>
                </div>
                <div class="j-step-text">
                    <p>填寫資料</p>
                </div>
                <div class=" j-step3-text">
                    <p>訂購完成</p>
                </div>
            </div>
        </div>

        <div class="j-list">
            <div class="j-list-bar">
                <div class="j-list-wrap">
                    <img class="w-100" src="./images/cart2-list-bar.png" alt="">
                </div>
                <div class="j-list-title">
                    <h5>訂購清單</h5>
                    <div class="j-list-icon">
                        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.103 11.4978L19.5574 2.66869C19.6976 2.52368 19.809 2.35115 19.8849 2.16106C19.9609 1.97097 20 1.76708 20 1.56115C20 1.35522 19.9609 1.15133 19.8849 0.961244C19.809 0.771154 19.6976 0.598626 19.5574 0.453612C19.277 0.163076 18.8978 0 18.5024 0C18.1071 0 17.7279 0.163076 17.4475 0.453612L9.96573 8.17519L2.55877 0.453612C2.27841 0.163076 1.89915 0 1.50384 0C1.10852 0 0.729267 0.163076 0.448906 0.453612C0.307518 0.598083 0.195036 0.770368 0.117979 0.960483C0.0409222 1.1506 0.000822067 1.35476 0 1.56115C0.000822067 1.76754 0.0409222 1.97171 0.117979 2.16182C0.195036 2.35194 0.307518 2.52422 0.448906 2.66869L8.90332 11.4978C9.04344 11.6562 9.21351 11.7825 9.40279 11.8689C9.59208 11.9554 9.79649 12 10.0031 12C10.2098 12 10.4142 11.9554 10.6035 11.8689C10.7928 11.7825 10.9628 11.6562 11.103 11.4978Z" fill="white" />
                        </svg>
                        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.89704 0.502188L0.44262 9.33131C0.302369 9.47632 0.191049 9.64885 0.115081 9.83894C0.0391125 10.029 0 10.2329 0 10.4388C0 10.6448 0.0391125 10.8487 0.115081 11.0388C0.191049 11.2288 0.302369 11.4014 0.44262 11.5464C0.722981 11.8369 1.10224 12 1.49755 12C1.89287 12 2.27212 11.8369 2.55248 11.5464L10.0343 3.82481L17.4412 11.5464C17.7216 11.8369 18.1008 12 18.4962 12C18.8915 12 19.2707 11.8369 19.5511 11.5464C19.6925 11.4019 19.805 11.2296 19.882 11.0395C19.9591 10.8494 19.9992 10.6452 20 10.4388C19.9992 10.2325 19.9591 10.0283 19.882 9.83818C19.805 9.64806 19.6925 9.47578 19.5511 9.33131L11.0967 0.502188C10.9566 0.343848 10.7865 0.217482 10.5972 0.131051C10.4079 0.0446205 10.2035 -9.53674e-07 9.99686 -9.53674e-07C9.79021 -9.53674e-07 9.5858 0.0446205 9.39651 0.131051C9.20722 0.217482 9.03716 0.343848 8.89704 0.502188Z" fill="white" />
                        </svg>

                    </div>
                </div>

            </div>

            <div class="j-list-info">
                <div class="j-list-title col-12 px-4">
                    <div class="col-md-6 px-0 j-product">商品名稱</div>
                    <div class="col-md-2 px-0">單價</div>
                    <div class="col-md-2 px-0">數量</div>
                    <div class="col-md-2 px-0">小計</div>
                </div>
                <?php foreach ($order_details as $k => $v) : ?>
                    <div class="j-list-item">
                        <div class="j-list-img">
                            <img src="images/products/<?= $v['product_sid'] ?>_1.png" alt="<?= $v['name'] ?>">
                        </div>
                        <div class="j-list-sub">
                            <p><?= $v['name'] ?></p>
                            <div class="j-list-num">
                                <div class="j-money-single  px-0 col-md-4" data-val="<?= $v['price'] ?>"></div>
                                <div class="j-amount col-6 px-0 col-md-4" data-val="<?= $v['quantity'] ?>"></div>
                                <div class="j-money col-6 px-0 col-md-4" data-val="<?= $v['price'] * $v['quantity'] ?>"></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="s-list-info">
            <div class="row no-gutters d-block d-md-none">
                <div class="col col-12 title-text-col d-flex">
                    <h2>訂單摘要</h2>
                </div>
            </div>
        </div>

        <div class="total-row-wrap d-block d-md-none">
            <div class="row total-row no-gutters">
                <div class="col total-col">
                    <h3>商品小計</h3>
                </div>

                <div class="col price-col">
                    <h3 class="j-product-price"></h3>
                </div>

            </div>

            <div class="row total-row no-gutters">
                <div class="col total-col">
                    <h3>包裝小計</h3>
                </div>
                <div class="col price-col">
                    <h3 class="j-package" data-val="<?= $orders[0]['package'] ?>"></h3>
                </div>
            </div>

            <div class="row total-row no-gutters">
                <div class="col total-col">
                    <h3>運費小計</h3>
                </div>
                <div class="col price-col">
                    <h3 class="j-freightfee" data-val="<?= $orders[0]['freight'] ?>"></h3>
                </div>
            </div>

            <div class="row total-row no-gutters">
                <div class="col total-col">
                    <h3>購物金折抵</h3>
                </div>
                <div class="col price-col">
                    <h3>
                        <span>-</span>
                        <span class="j-giftvoucher" data-val="<?= $orders[0]['gift_voucher_use'] ?>"></span>
                    </h3>
                </div>
            </div>

            <div class="row total-row no-gutters">
                <div class="col total-col">
                    <h3>優惠券折抵</h3>
                </div>
                <div class="col price-col">
                    <h3>
                        <span>-</span>
                        <span class="j-coupon" data-val="<?= $orders[0]['coupon_use'] ?>"></span>
                    </h3>
                </div>
            </div>



            <div class="row total-row pt-3 no-gutters">
                <div class="col-12 total-col-boder">
                    <div>
                    </div>
                </div>
            </div>

            <div class="row total-row pb-3 no-gutters">
                <div class="col total-col">
                    <h3>訂單總計</h3>
                </div>
                <div class="col price-col">
                    <h3 class="finaltotal" data-val="<?= $orders[0]['amount'] ?>"></h3>
                </div>
            </div>
        </div>

        <div class="j-summary-list">
            <div class="j-bling-img">
                <img class="w-100" src="./images/cart3-fixed.png" alt="">
            </div>
            <div class="j-summary-title">
                訂單摘要
            </div>
            <div class="j-summary-info">
                <div class="j-summary-items">
                    <div class="j-summary-item">
                        <div class="col-6 px-0 j-summary-subtitle">
                            <span>商品小計</span>
                        </div>
                        <div class="col-6 px-0 j-summary-price">
                            <span class="j-pl j-product-price"></span>
                        </div>
                    </div>
                    <div class="j-summary-item">
                        <div class="col-6 px-0 j-summary-subtitle">
                            <span>包裝小計</span>
                        </div>
                        <div class="col-6 px-0 j-summary-price">
                            <span class="j-pl j-package" data-val="<?= $orders[0]['package'] ?>"></span>
                        </div>
                    </div>
                    <div class="j-summary-item">
                        <div class="col-6 px-0 j-summary-subtitle">
                            <span>運費小計</span>
                        </div>
                        <div class="col-6 px-0 j-summary-price">
                            <span class="j-pl j-freightfee" data-val="<?= $orders[0]['freight'] ?>"></span>
                        </div>
                    </div>
                    <div class="j-summary-item">
                        <div class="col-6 px-0 j-summary-subtitle">
                            <span>購物金折抵</span>
                        </div>
                        <div class="col-6 px-0 j-summary-price">
                            <span>-</span>
                            <span class="pl-1 j-giftvoucher" data-val="<?= $orders[0]['gift_voucher_use'] ?>"></span>
                        </div>
                    </div>
                    <div class="j-summary-item">
                        <div class="col-6 px-0 j-summary-subtitle">
                            <span>優惠劵折抵</span>
                        </div>
                        <div class="col-6 px-0 j-summary-price">
                            <span>-</span>
                            <span class="pl-1 j-coupon" data-val="<?= $orders[0]['coupon_use'] ?>"></span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="j-total-kv">
                <div class="col-6 px-0 j-total-subtitle">
                    <span>金額總計</span>
                </div>
                <div class="col-6 px-0 j-total-price">
                    <span class="j-pl finaltotal"></span>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- <div class="s-payment-info-wrap">
    <div class="container">

        <div class="row no-gutters">
            <div class="col">
                <h2>繳費資訊</h2>
            </div>
        </div>

        <div class="payment-wrap">
            <div class="row no-gutters">
                <div class="col info-col">
                    <h3>銀行代碼</h3>
                </div>

                <div class="col account-col">
                    <h3>812</h3>
                </div>
                <div class="col info-col">
                    <h3></h3>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col info-col">
                    <h3>轉帳帳號</h3>
                </div>

                <div class="col account-col">
                    <h3>9736010728</h3>
                </div>

                <div class="col account-col pb-3">
                    <button class="d-none d-sm-block">複製帳號</button>
                </div>

            </div>

            <div class="row pt-2 pb-3 no-gutters d-block d-sm-none">
                <div class="col">
                    <button>複製帳號</button>
                </div>
            </div>
        </div>

        <div class="payment-deadline-wrap">
            <div class="row no-gutters">
                <div class="col info-col">
                    <h3>繳款金額</h3>
                </div>

                <div class="col account-col">
                    <h3>NT$ 29,935</h3>
                </div>
                <div class="col"></div>
            </div>

            <div class="row no-gutters">
                <div class="col info-col">
                    <h3>繳款期限</h3>
                </div>

                <div class="col account-col">
                    <h3>2022-10-18 23:59</h3>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </div>
</div> -->

<!-- 手機版訂單資訊 -->
<div class="s-order-info-list-wrap d-block d-lg-none">
    <div class="container">
        <div class="order-list-section no-gutters">

            <div class="row">
                <div class="col col-6">
                    <h3>訂單資訊</h3>
                </div>
            </div>

            <div class="row">
                <div class="col col-6">
                    <h6>訂購日期</h6>
                </div>
                <div class="col col-6">
                    <h6><?= $orders[0]['order_date'] ?></h6>
                </div>
            </div>

            <div class="row">
                <div class="col col-6">
                    <h6>訂單編號</h6>
                </div>
                <div class="col col-6">
                    <h6>
                        <span>#</span>
                        <span><?= $orders[0]['order_number'] ?></span>
                    </h6>
                </div>
            </div>

            <div class="row pb-2">
                <div class="col col-6">
                    <h6>訂單狀態</h6>
                </div>
                <div class="col col-6">
                    <h6>處理中</h6>
                </div>
            </div>

            <div class="row order-boder">
                <div class="col col-6">
                    <h3>配送資訊</h3>
                </div>
            </div>

            <div class="row">
                <div class="col col-6">
                    <h6>禮物配送方式</h6>
                </div>
                <div class="col col-6">
                    <h6><?= $orders[0]['delivery'] ?></h6>
                </div>
            </div>

            <div class="row">
                <div class="col col-6">
                    <h6>卡片寄送方式</h6>
                </div>
                <div class="col col-6">
                    <h6>實體配送</h6>
                </div>
            </div>

            <div class="row pb-2">
                <div class="col col-6">
                    <h6>配送狀態</h6>
                </div>
                <div class="col col-6">
                    <h6>待出貨</h6>
                </div>
            </div>

            <div class="row order-boder">
                <div class="col col-6">
                    <h3>顧客資訊</h3>
                </div>
            </div>

            <div class="row">
                <div class="col col-6">
                    <h6>訂購人姓名</h6>
                </div>
                <div class="col col-6">
                    <h6><?= $orders[0]['orderer_name'] ?></h6>
                </div>
            </div>

            <div class="row">
                <div class="col col-6">
                    <h6>收件人姓名</h6>
                </div>
                <div class="col col-6">
                    <h6><?= $orders[0]['recipient_name'] ?></h6>
                </div>
            </div>

            <div class="row pb-2">
                <div class="col col-6">
                    <h6>收件人手機</h6>
                </div>
                <div class="col col-6">
                    <h6><?= $orders[0]['recipient_mobile'] ?></h6>
                </div>
            </div>

            <div class="row order-boder">
                <div class="col col-6">
                    <h3>付款資訊</h3>
                </div>
            </div>

            <div class="row">
                <div class="col col-6">
                    <h6>付款方式</h6>
                </div>
                <div class="col col-6">
                    <h6><?= $orders[0]['pay'] ?></h6>
                </div>
            </div>

            <div class="row">
                <div class="col col-6">
                    <h6>付款狀態</h6>
                </div>
                <div class="col col-6">
                    <h6>未付款</h6>
                </div>
            </div>

            <div class="row pb-2">
                <div class="col col-6">
                    <h6>載具類型</h6>
                </div>
                <div class="col col-6">
                    <h6>會員載具</h6>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 電腦版訂單資訊 -->
<div class="s-pcorder-info-list-section d-none d-lg-block">
    <div class="container">
        <div class="pcorder-list-wrap d-flex">

            <div class="pcorder-list-box">

                <div class="list-info">
                    <div class="row">
                        <div class="col">
                            <h3>訂單資訊</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>訂購日期</p>
                        </div>
                        <div class="col">
                            <p><?= $orders[0]['order_date'] ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p>訂單編號</p>
                        </div>
                        <div class="col">
                            <p>
                                <span>#</span>
                                <span><?= $orders[0]['order_number'] ?></span>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p>訂單狀態</p>
                        </div>
                        <div class="col">
                            <p>處理中</p>
                        </div>
                    </div>

                </div>

                <div class="list-info">
                    <div class="row">
                        <div class="col">
                            <h3>顧客資訊</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>訂購人姓名</p>
                        </div>
                        <div class="col">
                            <p><?= $orders[0]['orderer_name'] ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p>收件人姓名</p>
                        </div>
                        <div class="col">
                            <p><?= $orders[0]['recipient_name'] ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p>收件人手機</p>
                        </div>
                        <div class="col">
                            <p><?= $orders[0]['recipient_mobile'] ?></p>
                        </div>
                    </div>

                </div>

                <div class="list-info list-line">
                    <div class="row">
                        <div class="col">
                            <h3>配送資訊</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>禮物配送方式</p>
                        </div>
                        <div class="col">
                            <p><?= $orders[0]['delivery'] ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p>卡片寄送方式</p>
                        </div>
                        <div class="col">
                            <p>實體配送</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p>配送狀態</p>
                        </div>
                        <div class="col">
                            <p>待出貨</p>
                        </div>
                    </div>

                </div>

                <div class="list-info list-line">
                    <div class="row">
                        <div class="col">
                            <h3>付款資訊</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>付款方式</p>
                        </div>
                        <div class="col">
                            <p><?= $orders[0]['pay'] ?></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p>付款狀態</p>
                        </div>
                        <div class="col">
                            <p>未付款</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p>載具類型</p>
                        </div>
                        <div class="col">
                            <p>會員手機載具</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>


<!------------------------------ 訂單留言備註 --------------------------------->
<div class="s-order-remark-section">
    <div class="container">
        <div class="s-order-remark-wrap">
            <div class="row">
                <div class="col text-col">
                    <h2>訂單留言備註</h2>
                </div>
            </div>

            <div class="s-remark-wrap">
                <label for="remark"></label>
                <textarea name="remark" id="remark" class="s-input" placeholder="有什麼想要跟我們說的嗎？" maxlength="100"></textarea>
            </div>

            <div class="row btn-row pt-3">
                <div class="col col-2"></div>
                <div class="col col-2"></div>
                <div class="col col-2"></div>
                <div class="col col-3 pt-3">
                    <span class="s-order-text">0/100</span>
                </div>
                <div class="col col-3">
                    <button>送出</button>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="s-order-cta-section">
    <div class="container">
        <div class="s-order-cta">
            <div class="row">
                <div class="col">
                    <a href="./product-list.php">
                        <button>繼續挑選禮物</button>
                    </a>
                </div>

                <div class="col">
                    <a href="./member_order.php">
                        <button class="cart1-check">查看我的訂單</button>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>




<?php include __DIR__ . '/parts/footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./js/cart3.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>