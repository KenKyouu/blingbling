<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'cart2'; // 頁面名稱，可以自定義
?>

<?php
$user = $_SESSION['user']['id'];
$member = $pdo->query("SELECT * FROM member WHERE sid=$user")->fetchAll();
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./styles/cart2.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="j-cart2-wrap">
        <div class="j-cart2-bg">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="j-back">
                            <a href="./cart1.php">
                                <div class="j-back-wrap">
                                    <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.502188 11.103L9.33131 19.5574C9.47632 19.6976 9.64885 19.809 9.83894 19.8849C10.029 19.9609 10.2329 20 10.4388 20C10.6448 20 10.8487 19.9609 11.0388 19.8849C11.2288 19.809 11.4014 19.6976 11.5464 19.5574C11.8369 19.277 12 18.8978 12 18.5024C12 18.1071 11.8369 17.7279 11.5464 17.4475L3.82481 9.96573L11.5464 2.55877C11.8369 2.27841 12 1.89915 12 1.50384C12 1.10852 11.8369 0.729267 11.5464 0.448906C11.4019 0.307518 11.2296 0.195036 11.0395 0.117979C10.8494 0.0409222 10.6452 0.000822067 10.4388 0C10.2325 0.000822067 10.0283 0.0409222 9.83818 0.117979C9.64806 0.195036 9.47578 0.307518 9.33131 0.448906L0.502188 8.90332C0.343848 9.04344 0.217482 9.21351 0.131051 9.40279C0.0446205 9.59208 -9.53674e-07 9.79649 -9.53674e-07 10.0031C-9.53674e-07 10.2098 0.0446205 10.4142 0.131051 10.6035C0.217482 10.7928 0.343848 10.9628 0.502188 11.103Z" fill="black"/>
                                    </svg>
                                </div>
                                <div class="j-back-text">
                                    回購買明細
                                </div>
                            </a>
                        </div>
                        <div class="j-progress-bar">
                            <div class="j-step-up">
                                <div class="j-step">
                                    <div class="j-svg-wrap">
                                        <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M17.2114 0.213808L7.94052 9.48013C7.6553 9.76521 7.19535 9.76521 6.91013 9.48013L2.78859 5.36063C2.50337 5.07555 2.04343 5.07555 1.75821 5.36063L0.213914 6.90415C-0.0713047 7.18922 -0.0713047 7.64895 0.213914 7.93402L6.91013 14.6269C7.19535 14.912 7.6553 14.912 7.94052 14.6269L10.0013 12.5672L19.7861 2.78722C20.0713 2.50214 20.0713 2.04242 19.7861 1.75734L18.2418 0.213808C17.9566 -0.0712695 17.4941 -0.0712695 17.2114 0.213808Z" fill="black"/>
                                            </svg>
                                    </div>
                                </div>
                                <div class="j-line"></div>
                                <div class="j-step2-num">
                                    <div class="j-num2">2</div>
                                </div>
                                <div class="j-dash">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
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
                                    <h5 >訂購清單</h5>
                                    <div class="j-list-icon">
                                        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.103 11.4978L19.5574 2.66869C19.6976 2.52368 19.809 2.35115 19.8849 2.16106C19.9609 1.97097 20 1.76708 20 1.56115C20 1.35522 19.9609 1.15133 19.8849 0.961244C19.809 0.771154 19.6976 0.598626 19.5574 0.453612C19.277 0.163076 18.8978 0 18.5024 0C18.1071 0 17.7279 0.163076 17.4475 0.453612L9.96573 8.17519L2.55877 0.453612C2.27841 0.163076 1.89915 0 1.50384 0C1.10852 0 0.729267 0.163076 0.448906 0.453612C0.307518 0.598083 0.195036 0.770368 0.117979 0.960483C0.0409222 1.1506 0.000822067 1.35476 0 1.56115C0.000822067 1.76754 0.0409222 1.97171 0.117979 2.16182C0.195036 2.35194 0.307518 2.52422 0.448906 2.66869L8.90332 11.4978C9.04344 11.6562 9.21351 11.7825 9.40279 11.8689C9.59208 11.9554 9.79649 12 10.0031 12C10.2098 12 10.4142 11.9554 10.6035 11.8689C10.7928 11.7825 10.9628 11.6562 11.103 11.4978Z" fill="white"/>
                                        </svg>
                                        <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.89704 0.502188L0.44262 9.33131C0.302369 9.47632 0.191049 9.64885 0.115081 9.83894C0.0391125 10.029 0 10.2329 0 10.4388C0 10.6448 0.0391125 10.8487 0.115081 11.0388C0.191049 11.2288 0.302369 11.4014 0.44262 11.5464C0.722981 11.8369 1.10224 12 1.49755 12C1.89287 12 2.27212 11.8369 2.55248 11.5464L10.0343 3.82481L17.4412 11.5464C17.7216 11.8369 18.1008 12 18.4962 12C18.8915 12 19.2707 11.8369 19.5511 11.5464C19.6925 11.4019 19.805 11.2296 19.882 11.0395C19.9591 10.8494 19.9992 10.6452 20 10.4388C19.9992 10.2325 19.9591 10.0283 19.882 9.83818C19.805 9.64806 19.6925 9.47578 19.5511 9.33131L11.0967 0.502188C10.9566 0.343848 10.7865 0.217482 10.5972 0.131051C10.4079 0.0446205 10.2035 -9.53674e-07 9.99686 -9.53674e-07C9.79021 -9.53674e-07 9.5858 0.0446205 9.39651 0.131051C9.20722 0.217482 9.03716 0.343848 8.89704 0.502188Z" fill="white"/>
                                        </svg>
                                        
                                    </div>
                                </div>
                                
                            </div>
                            <div class="j-list-info">
                                <div class="j-list-title col-12 px-0">
                                    <div class="col-md-6 px-0 j-product">商品名稱</div>
                                    <div class="col-md-2 px-0">單價</div>
                                    <div class="col-md-2 px-0">數量</div>
                                    <div class="col-md-2 px-0">小計</div>
                                </div>
                                <?php foreach($_SESSION['cart'] as $k=>$v): ?>
                                <div class="j-list-item">
                                    <div class="j-list-img">
                                    <img src="images/products/<?= $v['sid'] ?>_1.png" alt="<?= $v['name'] ?>">
                                    </div>
                                    <div class="j-list-sub">
                                        <p><?= $v['name'] ?></p>
                                        <div class="j-list-num">
                                            <div class="j-money-single  px-0 col-md-4" data-val="<?= $v['price'] ?>"></div>
                                            <div class="j-amount qty col-6 px-0 col-md-4"><?= $v['qty'] ?></div>
                                            <div class="j-money col-6 px-0 col-md-4"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <form id="cart2form" name="cart2form" method="post" action="" onsubmit="return false;" novalidate>
                            <section class="j-people-wrap">
                                <div class="j-people">
                                    <div class="j-orderer-bg">
                                        <div class="j-orderer">
                                            <h5 class="">訂購人資料</h5>
                                            <div class="j-people-info">
                                                
                                                <div class="j-check j-form-group">
                                                    <label class="j-point">同會員資料
                                                        <input type="checkbox"
                                                        id="cbSameMember"
                                                        onclick="sameMember()" />
                                                        <span class="j-checkmark"></span>
                                                    </label>
                                                    <div class="j-messages"></div>
                                                </div>
                                                <div class="j-space1 j-form-group">
                                                <label for="ordererName" class="j-label j-label-required"
                                                    >訂購人姓名(本名)</label
                                                >
                                                <input
                                                    type="text"
                                                    name="ordererName"
                                                    id="ordererName"
                                                    class="j-input"
                                                    placeholder="訂購人姓名(本名)"
                                                    oninput="cop()"
                                                    data-val="<?= $member[0]['name'] ?>"
                                                />
                                                <div class="j-messages"></div>
                                                </div>
                                                <div class="j-space j-form-group">
                                                <label
                                                    for="ordererMobile"
                                                    class="j-label j-label-required"
                                                    >訂購人手機</label
                                                >
                                                <input
                                                    type="text"
                                                    name="ordererMobile"
                                                    id="ordererMobile"
                                                    class="j-input"
                                                    placeholder="訂購人手機"
                                                    oninput="cop()"
                                                    data-val="<?= $member[0]['mobile'] ?>"
                                                />
                                                <div class="j-messages"></div>
                                                </div>
                                                <div class="j-space">
                                                <label for="ordererTel" class="j-label">訂購人市話</label>
                                                <div class="d-flex justify-content-between">
                                                    <div class="j-tel-1 j-form-group">
                                                    <input
                                                        type="text"
                                                        name="ordererTel1"
                                                        id="ordererTel1"
                                                        class="j-input"
                                                        placeholder="02"
                                                        oninput="cop()"
                                                    />
                                                    <div class="j-messages"></div>
                                                    </div>
                                                    <div class="j-tel-2 j-form-group">
                                                    <input
                                                        type="text"
                                                        name="ordererTel2"
                                                        id="ordererTel2"
                                                        class="j-input"
                                                        placeholder="12345678"
                                                        oninput="cop()"
                                                    />
                                                    <div class="j-messages"></div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="j-recipient-bg">
                                        <div class="j-recipient">
                                            <h5 class="">收件人資料</h5>
                                            <div class="j-people-info">
                                                <div class="j-check j-form-group">
                                                    <label class="j-point">同訂購人資料
                                                        <input
                                                        type="checkbox"
                                                        id="cbSameOrderer"
                                                        onchange="copyData()"
                                                        />
                                                        <span class="j-checkmark"></span>
                                                    </label>
                                                    <div class="j-messages"></div>
                                                </div>
                                                <div class="j-space1 j-form-group">
                                                <label
                                                    for="recipientName"
                                                    class="j-label j-label-required"
                                                    >收件人姓名(本名)</label
                                                >
                                                <input
                                                    type="text"
                                                    name="recipientName"
                                                    id="recipientName"
                                                    value=""
                                                    class="j-input"
                                                    placeholder="收件人姓名(本名)"
                                                    oninput="cop2()"
                                                />
                                                <div class="j-messages"></div>
                                                </div>
                                                <div class="j-space j-form-group">
                                                <label
                                                    for="recipientMobile"
                                                    class="j-label j-label-required"
                                                    >收件人手機</label
                                                >
                                                <input
                                                    type="text"
                                                    name="recipientMobile"
                                                    id="recipientMobile"
                                                    class="j-input"
                                                    placeholder="收件人手機"
                                                    oninput="cop2()"
                                                />
                                                <div class="j-messages"></div>
                                                </div>
                                                <div class="j-space ">
                                                <label for="recipientTel" class="j-label"
                                                    >收件人市話</label
                                                >
                                                <div class="d-flex justify-content-between">
                                                    <div class="j-tel-1 j-form-group">
                                                    <input
                                                        type="text"
                                                        name="recipientTel1"
                                                        id="recipientTel1"
                                                        class="j-input"
                                                        placeholder="02"
                                                    />
                                                    <div class="j-messages"></div>
                                                    </div>
                                                    <div class="j-tel-2 j-form-group">
                                                    <input
                                                        type="text"
                                                        name="recipientTel2"
                                                        id="recipientTel2"
                                                        class="j-input"
                                                        placeholder="12345678"
                                                    />
                                                    <div class="j-messages"></div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="j-logistics-wrap">
                                <div class="j-logistics">
                                    <h5 class="">配送方式</h5>
                                    <div>
                                        <div class="j-home-delivery">
                                            <div class="j-d-title j-form-group">

                                                <label class="j-point">宅配
                                                    <input type="radio" name="delivery" value="宅配" class="j-home"   data-val="100" checked>
                                                    <span class="j-checkmark-r"></span> 
                                                </label>
                                                <div class="j-messages"></div>
                                            </div>
                                            <ul class="j-home-info">
                                                <li >
                                                    <label for="address" class="j-label-required">收件地址</label>
                                                    <div class="j-select j-form-group" id="zipcode2" data-display="static" data-reference="parent">
                                                    </div>
                                                    <div class="j-form-group">
                                                        <textarea name="address" id="address" cols="20" rows="2" class="j-input" placeholder="收件地址"></textarea>
                                                        <div class="j-messages"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label for="time" class="j-label-required">建議配送時段</label>
                                                    <div class="j-timebox">

                                                        <div class="col-6 px-0 j-form-group">
                                                            <label class="j-point ">上午
                                                                <input type="radio" name="time" value="morning" checked>
                                                                <span class="j-checkmark-r"></span> 
                                                            </label>
                                                            <div class="j-messages"></div>
                                                        </div>

                                                        <div class="col-6 px-0 j-form-group">
                                                            <label class="j-point ">下午
                                                                <input type="radio" name="time" value="afternoon">
                                                                <span class="j-checkmark-r"></span> 
                                                            </label>
                                                            <div class="j-messages"></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="j-form-group">
                                                    <label for="remark">備註</label>
                                                    <textarea name="remark" id="remark" cols="20" rows="3" class="j-input" placeholder="管理室代收/ 電話聯絡時間 ..."></textarea>
                                                    <div class="j-messages"></div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="j-convenience-store">
                                            <div class="j-d-title j-form-group">

                                                <label class="j-point">超商取貨
                                                    <input type="radio" name="delivery" value="超商取貨" class="j-convenience" id="j-convenience" onchange="copyData2()"   data-val="60">
                                                    <span class="j-checkmark-r"></span> 
                                                </label>
                                                <div class="j-messages"></div>
                                            </div>
                                            <ul class="j-store-info">
                                                <li class="j-space1 j-form-group">
                                                    <label for="storeRecipientName"  class="j-label j-label-required">收件人姓名(本名)</label>
                                                    <input type="text"  id="storeRecipientName" value="" class="j-input" placeholder="收件人姓名(本名)">
                                                    <div class="j-messages"></div>
                                                </li>
                                                <li class="j-space j-form-group">
                                                    <label for="storeRecipientMobile"  class="j-label j-label-required">收件人手機</label>
                                                    <input type="text"  id="storeRecipientMobile" class="j-input" placeholder="收件人手機">
                                                    <div class="j-messages"></div>
                                                </li>
                                                <li class="j-store-btn">
                                                    <a href="#">
                                                        <button type="button" class="j-store">門市選擇</button>
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </section>
                
                            <section class="j-pay-wrap">
                                <div class="j-pay"></div>
                                <h5 >支付方式</h5>
                                <div>
                                    <div class="j-credit-pay">
                                        <div class="j-credit-title j-form-group">
                                            <label class="j-point">信用卡
                                                <input type="radio" name="pay" value="信用卡" class="j-credit" checked>
                                                <span class="j-checkmark-r"></span> 
                                            </label>
                                            <div class="j-messages"></div>
                                        </div>
                                        <div class="j-credit-bg">

                                            <div class="j-card-pers preload">
                                                <div class="creditcard">
                                                    <div class="j-credit-front">
                                                        <div class="j-card-wrap">
                                                        <div class="j-font-text">
                                                            <div class="j-card-icons">
                                                                <div class="j-card-icon-wrap">
                                                                    <img class="w-100" src="./images/cart2-card-icon.png" alt="" />
                                                                </div>
                                                                <div id="j-ccsingle"></div>
                                                            </div>
                                                            <div class="j-card-number">
                                                                <p class="j-str1 " id="j-cardnumber">**** **** **** ****</p>
                                                            </div>
                                                            <div class="j-card-line3">
                                                            <div class="j-cardholder">
                                                                <p>Card  Holder</p>
                                                                <p id="j-cardname" class="j-cardt">BlingBling</p>
                                                            </div>
                                            
                                                            <div class="j-expiration">
                                                                <p>Expiration</p>
                                                                <p id="j-cardexpire" class="j-cardt">MM/YY</p>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    <div class="j-credit-back">
                                                        <div class="j-card-wrap">
                                                        <div class="j-back-text">
                                                            <div class="j-card-black"></div>
                                                            <div class="j-ccv-subtitle">
                                                            <p>Security Code</p>
                                                            </div>
                                                            <div class="j-card-sign">
                                                            <div class="j-sign">
                                                                <p id="j-cardnameback">BlingBling</p>
                                                            </div>
                                                            <div class="j-cvv">
                                                                <p id="j-cardcvv">***</p>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <ul class="j-credit-info ">
                                            
                                                <li class="j-form-group">
                                                    <label for="cardHolder"  class="j-label j-label-required j-holder">持卡人姓名</label>
                                                    <input type="text" maxlength="15" name="cardHolder" id="cardHolder" value="" class="j-input" placeholder="持卡人姓名">
                                                    <div class="j-messages"></div>
                                                </li>
                                                <li class="j-space j-form-group">
                                                    <label for="cardNumber"  class="j-label j-label-required">卡號</label>
                                                    <input type="text" pattern="[0-9]*" name="cardNumber" id="cardNumber" class="j-input" placeholder="**** **** **** ****">
                                                    <div class="j-messages"></div>
                                                </li>
                                                <li class="j-space j-form-group">
                                                    <label for="expires"  class="j-label j-label-required">到期日</label>
                                                    <input type="text" pattern="[0-9]*" name="expires" id="expires" class="j-input" placeholder="MM/YY">
                                                    <div class="j-messages"></div>
                                                </li>
                                                <li class="j-space j-form-group">
                                                    <label for="cvv"  class="j-label j-label-required">安全碼</label>
                                                    <input type="text" pattern="[0-9]*" name="cvv" id="cvv" class="j-input j-cvv" placeholder="***">
                                                    <div class="j-messages"></div>
                                                </li>
                                            
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="j-bank-pay">
                                        <div class="j-bank-title j-form-group">
                                            
                                            <label class="j-point">銀行轉帳
                                                <input type="radio" name="pay" value="銀行轉帳" class="j-bank" > <span class="j-checkmark-r"></span> 
                                            </label>
                                            <div class="j-messages"></div>
                                        </div>
                                    </div>
                                    <div class="j-line-pay">
                                        <div class="j-line-title j-form-group">
                                            
                                            <label class="j-point">Line Pay
                                                <input type="radio" name="pay" value="Line Pay" class="j-line" > 
                                                <span class="j-checkmark-r"></span> 
                                            </label>
                                            <div class="j-messages"></div>
                                        </div>
                                    </div>
                                    <div class="j-apple-pay">
                                        <div class="j-apple-title j-form-group">
                                            
                                            <label class="j-point">Apple Pay
                                                <input type="radio" name="pay" value="Apple Pay" class="j-apple" > 
                                                <span class="j-checkmark-r"></span> 
                                            </label>
                                            <div class="j-messages"></div>
                                        </div>
                                    </div>
                                    <div class="j-money-pay">
                                        <div class="j-money-title j-form-group">
                                            
                                            <label class="j-point">貨到付款
                                                <input type="radio" name="pay" value="貨到付款" class="j-money"/> 
                                                <span class="j-checkmark-r"></span> 
                                            </label>
                                            <div class="j-messages"></div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <ul class="j-cart2-btn">
                                <li class="col-md-6 px-0">
                                    <a href="./cart1.php">
                                        <button type="button">回購買明細</button>
                                    </a>
                                </li>
                                <li class="col-md-6 px-0">
                                    <!-- <a href="#"> -->
                                        <button type="submit">確認結帳 <span class="finaltotal"></span></button>
                                    <!-- </a> -->
                                </li>
                            </ul>

                            <div class="j-subtotal">
                                <div class="j-subtotal-f">
                                    <div class="j-sum-item">
                                        <div class="j-upicon">
                                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8.89704 0.502188L0.44262 9.33131C0.302369 9.47632 0.191049 9.64885 0.115081 9.83894C0.0391125 10.029 0 10.2329 0 10.4388C0 10.6448 0.0391125 10.8487 0.115081 11.0388C0.191049 11.2288 0.302369 11.4014 0.44262 11.5464C0.722981 11.8369 1.10224 12 1.49755 12C1.89287 12 2.27212 11.8369 2.55248 11.5464L10.0343 3.82481L17.4412 11.5464C17.7216 11.8369 18.1008 12 18.4962 12C18.8915 12 19.2707 11.8369 19.5511 11.5464C19.6925 11.4019 19.805 11.2296 19.882 11.0395C19.9591 10.8494 19.9992 10.6452 20 10.4388C19.9992 10.2325 19.9591 10.0283 19.882 9.83818C19.805 9.64806 19.6925 9.47578 19.5511 9.33131L11.0967 0.502188C10.9566 0.343848 10.7865 0.217482 10.5972 0.131051C10.4079 0.0446205 10.2035 -9.53674e-07 9.99686 -9.53674e-07C9.79021 -9.53674e-07 9.5858 0.0446205 9.39651 0.131051C9.20722 0.217482 9.03716 0.343848 8.89704 0.502188Z" fill="#d4cfc6"/>
                                            </svg>
                                            <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M11.103 11.4978L19.5574 2.66869C19.6976 2.52368 19.809 2.35115 19.8849 2.16106C19.9609 1.97097 20 1.76708 20 1.56115C20 1.35522 19.9609 1.15133 19.8849 0.961244C19.809 0.771154 19.6976 0.598626 19.5574 0.453612C19.277 0.163076 18.8978 0 18.5024 0C18.1071 0 17.7279 0.163076 17.4475 0.453612L9.96573 8.17519L2.55877 0.453612C2.27841 0.163076 1.89915 0 1.50384 0C1.10852 0 0.729267 0.163076 0.448906 0.453612C0.307518 0.598083 0.195036 0.770368 0.117979 0.960483C0.0409222 1.1506 0.000822067 1.35476 0 1.56115C0.000822067 1.76754 0.0409222 1.97171 0.117979 2.16182C0.195036 2.35194 0.307518 2.52422 0.448906 2.66869L8.90332 11.4978C9.04344 11.6562 9.21351 11.7825 9.40279 11.8689C9.59208 11.9554 9.79649 12 10.0031 12C10.2098 12 10.4142 11.9554 10.6035 11.8689C10.7928 11.7825 10.9628 11.6562 11.103 11.4978Z" fill="#d4cfc6"/>
                                                </svg>
                                        </div>
                                        <div class="j-amount-detail">
                                            <div class="j-detail">
                                                <div class="col-6 px-0 mr-4 j-detail-subtitle"><span>商品小計</span></div>
                                                <div class="col-6 px-0 j-detail-money"><span class="j-pl j-product-price" ></span></div>
                                            </div>
                                            <div class="j-detail">
                                                <div class="col-6 px-0 mr-4 j-detail-subtitle">
                                                    <span>包裝小計</span>
                                                </div>
                                                <div class="col-6 px-0 j-detail-money">
                                                    <span class="j-pl j-package" data-val="<?= $_SESSION['order']['orderpackage'] ?>" ></span>
                                                </div>
                                            </div>
                                            <div class="j-detail">
                                                <div class="col-6 px-0 mr-4 j-detail-subtitle">
                                                    <span>購物金折抵</span>
                                                </div>
                                                <div class="col-6 px-0 d-flex j-detail-money">
                                                    <span>-</span>
                                                    <span class="pl-1 j-giftvoucher"  data-val="<?= $_SESSION['order']['ordergiftvoucher'] ?>"></span>
                                                </div>
                                            </div>
                                            <div class="j-detail">
                                                <div class="col-6 px-0 mr-4 j-detail-subtitle">
                                                    <span>優惠劵折抵</span>
                                                </div>
                                                <div class="col-6 px-0 d-flex j-detail-money">
                                                    <span>-</span>
                                                    <span class="pl-1 j-coupon" data-val="<?= $_SESSION['order']['ordercoupon'] ?>"></span>
                                                </div>
                                            </div>
                                            <div class="j-detail">
                                                <div class="col-6 px-0 mr-4 j-detail-subtitle">
                                                    <span>運費小計</span>
                                                </div>
                                                <div class="col-6 px-0 j-detail-money">
                                                    <span class="j-pl j-freightfee" data-val="<?= $_SESSION['order']['orderfreight'] ?>"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="j-total">
                                            <!-- <a href="#"> -->
                                                <button >確認結帳
                                                    <span class="finaltotal"></span>
                                                </button>
                                            <!-- </a> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="j-fixed-bg"></div>
                            </div>


                            <div class="j-summary-list">
                                <div class="j-bling-img">
                                    <img class="w-100" src="./images/cart2-fixed.png" alt="">
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
                                                <span >包裝小計</span>
                                            </div>
                                            <div class="col-6 px-0 j-summary-price">
                                                <span class="j-pl j-package" data-val="<?= $_SESSION['order']['orderpackage'] ?>"></span>
                                            </div>
                                        </div>
                                        <div class="j-summary-item">
                                            <div class="col-6 px-0 j-summary-subtitle">
                                                <span>購物金折抵</span>
                                            </div>
                                            <div class="col-6 px-0 j-summary-price">
                                                <span>-</span>
                                                <span class="pl-1 j-giftvoucher" data-val="<?= $_SESSION['order']['ordergiftvoucher'] ?>"></span>
                                            </div>
                                        </div>
                                        <div class="j-summary-item">
                                            <div class="col-6 px-0 j-summary-subtitle">
                                                <span>優惠劵折抵</span>
                                            </div>
                                            <div class="col-6 px-0 j-summary-price">
                                                <span>-</span>
                                                <span class="pl-1 j-coupon" data-val="<?= $_SESSION['order']['ordercoupon'] ?>"></span>
                                            </div>
                                        </div>
                                        <div class="j-summary-item">
                                            <div class="col-6 px-0 j-summary-subtitle">
                                                <span>運費小計</span>
                                            </div>
                                            <div class="col-6 px-0 j-summary-price">
                                                <span class="j-pl j-freightfee" data-val="<?= $_SESSION['order']['orderfreight'] ?>"></span>
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

                            
                        </form>


                    </div>
                </div>
            </div>
        </div>
</div>
<div class="footer-pc">
    <div class="footer-pc-up">
        <div class="footer-nav">
            <ul>
                <li><a href="#">聯絡我們</a></li>
                <li><a href="#">幫助中心</a></li>
                <li><a href="#">會員中心</a></li>
            </ul>
        </div>
        <div class="footer-c">
            <p>&copy;&nbsp;bling&nbsp;bling&nbsp;gift,&nbsp;Inc.</p>
        </div>
        <div class="footer-social">
            <a href="#">
                <div class="send">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.1764 0C5.00142 0 0 5.00142 0 11.1764C0 17.3514 5.00142 22.3528 11.1764 22.3528C17.3514 22.3528 22.3528 17.3514 22.3528 11.1764C22.3528 5.00142 17.3514 0 11.1764 0ZM16.5033 7.26605C16.4712 7.71989 16.2145 9.30146 15.9532 11.0114C15.5635 13.4319 15.1464 16.0816 15.1464 16.0816C15.1464 16.0816 15.0822 16.8242 14.5321 16.9526C13.982 17.0809 13.0789 16.4987 12.9184 16.3704C12.7901 16.2741 10.4979 14.8209 9.65444 14.1103C9.42981 13.9178 9.16851 13.5281 9.68653 13.0789C10.8509 12.0153 12.24 10.6905 13.0789 9.84698C13.4685 9.45732 13.8536 8.55422 12.24 9.65444C9.94783 11.236 7.6878 12.7213 7.6878 12.7213C7.6878 12.7213 7.16978 13.0422 6.2025 12.7534C5.23522 12.4646 4.10291 12.0749 4.10291 12.0749C4.10291 12.0749 3.32817 11.589 4.65302 11.0756C4.65302 11.0756 10.2412 8.78343 12.1804 7.9766C12.923 7.6557 15.4444 6.61967 15.4444 6.61967C15.4444 6.61967 16.6088 6.16583 16.5079 7.26605H16.5033Z" fill="white" />
                    </svg>
                </div>
            </a>
            <a href="#">
                <div class="facebook">
                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.8236 0C5.64864 0 0.647217 5.00142 0.647217 11.1764C0.647217 17.3514 5.64864 22.3528 11.8236 22.3528C17.9986 22.3528 23 17.3514 23 11.1764C23 5.00142 17.994 0 11.8236 0ZM16.2199 5.64322H14.9088C13.6207 5.64322 13.2172 6.44546 13.2172 7.26605V9.21435H16.0962L15.6377 12.217H13.2172V19.4693H9.97159V12.217H7.33565V9.21435H9.97159V6.92681C9.97159 4.32754 11.5211 2.88808 13.8911 2.88808C15.028 2.88808 16.2153 3.08979 16.2153 3.08979V5.64322H16.2199Z" fill="white" />
                    </svg>
                </div>
            </a>
        </div>
    </div>
    <div class="footer-logo">
        <img src="./images/logo-footer.svg" alt="" />
    </div>
</div>


<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./js/jquery.twzipcode.min.js"></script>
<script src="./js/validate.min.js"></script>
<script src="./js/underscore-umd-min.js"></script>
<script src="./js/imask.js"></script>
<script src="./js/cart2.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>