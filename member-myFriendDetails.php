<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱，可以自定義

if (empty($_SESSION['user'])) {
    header('Location: ./login.php');
    exit;
}

$user = $_SESSION['user']['id'];
$member = $pdo->query("SELECT * FROM member WHERE sid=$user")->fetchAll();
$sid = intval($_GET['sid']);
$sql = "SELECT *  FROM member_friend WHERE sid=$sid";
$r = $pdo->query($sql)->fetch();
$memberfriend = $pdo->query("SELECT * FROM member_friend WHERE member_sid=$user ORDER BY `birthday_mm`, `birthday_dd`")->fetchAll();
$friendsid = substr($_SERVER['QUERY_STRING'], 4);
$friend = intval($friendsid);
$friendiswho = $pdo->query("SELECT * FROM member_friend WHERE `sid` = $friend")->fetchAll();
$friendemail = strval($friendiswho[0]['email']);
$friendismember = $pdo->query("SELECT * FROM member WHERE email= '$friendemail' ")->fetchAll();
$tags = $pdo->query("SELECT * FROM tag WHERE 1 ")->fetchAll();
$friendtags = $pdo->query("SELECT * FROM friend_tag WHERE `friend_sid`= $friend ")->fetchAll();


if (!empty($friendismember)) {
    $friendmembersid = $friendismember[0]['sid'];
    $friendfavorite = $pdo->query("SELECT * FROM member_favorite WHERE `member_sid`= $friendmembersid ORDER BY `product_sid`")->fetchAll();
};
// if (empty($r)) {
//     header('Location: member_myFriend.php');
//     exit;
// }
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./styles/member-all.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="wrap">
    <div class="containerr">
        <div class="main">
            <div class="row">
                <div class="col">

                    <!------------ green border ------------>

                    <div class="left col-lg-3 col-xl-3">
                        <div class="myName">
                            <div class="photo">
                                <div class="photoborder">
                                    <div class="myphoto">
                                        <img src="./images/elf_logo.png" alt="" class="photo">
                                    </div>
                                </div>
                                <div class="photoedit">
                                    <svg width="8" height="8" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.3139 10.2864L14.7085 2.68474L17.1825 0.212005C17.4653 -0.0706682 17.9213 -0.0706682 18.2042 0.212005L24.7878 6.79241C25.0706 7.07509 25.0706 7.53093 24.7878 7.8136L22.3139 10.2864Z" fill="#ffffff" />
                                        <path d="M21.1211 11.4791L13.4751 3.83691L2.32505 14.9815L9.971 22.6236L21.1211 11.4791Z" fill="#ffffff" />
                                        <path d="M4.9528 19.9966L8.77459 23.8165L4.34386 24.4226L0.580677 24.937C0.244359 24.9829 -0.0410016 24.6976 0.00485987 24.3615L0.519529 20.6002L1.12592 16.1716L4.9528 19.9966Z" fill="#ffffff" />
                                    </svg>
                                </div>
                            </div>
                            <h5><?= $member[0]['name'] ?></h5>
                            <a href="#" class="coin">
                                <svg width="20" height="20" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.3636 9.09091H15.9091C16.2105 9.09091 16.4995 8.97118 16.7126 8.75807C16.9257 8.54496 17.0455 8.25593 17.0455 7.95454C17.0455 7.65316 16.9257 7.36412 16.7126 7.15101C16.4995 6.9379 16.2105 6.81818 15.9091 6.81818H13.6364V5.68182C13.6364 5.38043 13.5166 5.0914 13.3035 4.87829C13.0904 4.66518 12.8014 4.54545 12.5 4.54545C12.1986 4.54545 11.9096 4.66518 11.6965 4.87829C11.4834 5.0914 11.3636 5.38043 11.3636 5.68182V6.81818C10.4595 6.81818 9.59238 7.17735 8.95305 7.81668C8.31372 8.45601 7.95455 9.32312 7.95455 10.2273C7.95455 11.1314 8.31372 11.9985 8.95305 12.6379C9.59238 13.2772 10.4595 13.6364 11.3636 13.6364H13.6364C13.9377 13.6364 14.2268 13.7561 14.4399 13.9692C14.653 14.1823 14.7727 14.4713 14.7727 14.7727C14.7727 15.0741 14.653 15.3631 14.4399 15.5763C14.2268 15.7894 13.9377 15.9091 13.6364 15.9091H9.09091C8.78953 15.9091 8.50049 16.0288 8.28738 16.2419C8.07427 16.455 7.95455 16.7441 7.95455 17.0454C7.95455 17.3468 8.07427 17.6359 8.28738 17.849C8.50049 18.0621 8.78953 18.1818 9.09091 18.1818H11.3636V19.3182C11.3636 19.6196 11.4834 19.9086 11.6965 20.1217C11.9096 20.3348 12.1986 20.4545 12.5 20.4545C12.8014 20.4545 13.0904 20.3348 13.3035 20.1217C13.5166 19.9086 13.6364 19.6196 13.6364 19.3182V18.1818C14.5405 18.1818 15.4076 17.8226 16.047 17.1833C16.6863 16.544 17.0455 15.6769 17.0455 14.7727C17.0455 13.8686 16.6863 13.0015 16.047 12.3621C15.4076 11.7228 14.5405 11.3636 13.6364 11.3636H11.3636C11.0623 11.3636 10.7732 11.2439 10.5601 11.0308C10.347 10.8177 10.2273 10.5287 10.2273 10.2273C10.2273 9.92589 10.347 9.63685 10.5601 9.42374C10.7732 9.21063 11.0623 9.09091 11.3636 9.09091ZM12.5 0C10.0277 0 7.61099 0.733112 5.55538 2.10663C3.49976 3.48015 1.89761 5.43238 0.951511 7.71645C0.00541613 10.0005 -0.242126 12.5139 0.24019 14.9386C0.722505 17.3634 1.91301 19.5907 3.66117 21.3388C5.40933 23.087 7.63661 24.2775 10.0614 24.7598C12.4861 25.2421 14.9995 24.9946 17.2835 24.0485C19.5676 23.1024 21.5199 21.5002 22.8934 19.4446C24.2669 17.389 25 14.9723 25 12.5C25 9.18479 23.683 6.00537 21.3388 3.66116C18.9946 1.31696 15.8152 0 12.5 0ZM12.5 22.7273C10.4772 22.7273 8.4999 22.1274 6.81804 21.0037C5.13617 19.8799 3.82531 18.2826 3.05124 16.4138C2.27716 14.545 2.07463 12.4887 2.46925 10.5048C2.86387 8.52086 3.83792 6.69853 5.26823 5.26822C6.69854 3.83791 8.52086 2.86386 10.5048 2.46924C12.4887 2.07462 14.545 2.27715 16.4138 3.05123C18.2826 3.82531 19.8799 5.13616 21.0037 6.81803C22.1275 8.4999 22.7273 10.4772 22.7273 12.5C22.7273 15.2124 21.6498 17.8138 19.7318 19.7318C17.8138 21.6498 15.2124 22.7273 12.5 22.7273Z" fill="#ffcd51" />
                                </svg>
                                <?= $member[0]['gift_voucher'] ?>
                            </a>
                        </div>

                        <div class="memberbutton">
                            <ul class="memberbutton">
                                <li class="btn col-4 col-md-2 col-lg-12"><a href="./member-myIntro.php" id="btn1">
                                        <div class="btnsvg">
                                            <svg width="14" height="14" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12.4721 12.5341C15.935 12.5341 18.7422 9.72825 18.7422 6.26705C18.7422 2.80585 15.935 0 12.4721 0C9.00915 0 6.2019 2.80585 6.2019 6.26705C6.2019 9.72825 9.00915 12.5341 12.4721 12.5341Z" fill="#4C4948" />
                                                <path d="M24.9416 25.0001C24.9416 18.1164 19.3591 12.5342 12.4695 12.5342C5.57993 12.5342 0 18.1164 0 25.0001H24.9416Z" fill="#4C4948" />
                                            </svg>
                                        </div>
                                        <div class="btnP">
                                            個人資訊
                                        </div>
                                    </a></li>
                                <li class="btn col-4 col-md-2 col-lg-12"><a href="./member-myCollection.php" id="btn2">
                                        <div class="btnsvg">
                                            <svg width="13" height="13" viewBox="0 0 25 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M24.9345 5.0309C24.3121 2.1774 21.8199 0.0437136 18.8338 0.0437136C15.3815 0.0437136 12.5844 2.89721 12.5844 6.4191C12.5844 2.87407 9.76716 0 6.29221 0C2.82734 0 0.0201593 2.85608 0 6.38568C0 6.39596 0 6.40882 0 6.4191C0 7.16975 0.128515 7.88955 0.360347 8.56051C2.14696 14.4063 10.0872 21.0799 12.0578 22.6686C12.3173 22.8769 12.6827 22.8794 12.9422 22.6712C14.8045 21.1725 22.024 15.1081 24.3045 9.50654C24.743 8.4294 25 7.3677 25 6.35998C25 5.90753 24.9773 5.46535 24.9345 5.0309Z" fill="#4C4948" />
                                            </svg>
                                        </div>
                                        <div class="btnP">
                                            我的收藏
                                        </div>
                                    </a></li>
                                <li class="btn col-4 col-md-2 col-lg-12"><a href="./member_order.php" id="btn3">

                                        <div class="btnsvg">
                                            <svg width="15" height="13" viewBox="0 0 26 23" fill="none" class="ordersvg" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.88232 15.6203H20.3076V5.69214H1.72564C1.2217 5.69214 0.871237 6.1319 1.04519 6.54611L4.88232 15.6203Z" fill="#4C4948" stroke="#4C4948" stroke-miterlimit="10" />
                                                <path d="M25.4566 0.546045L25.4564 0.545871L25.454 0.543485C25.454 0.543467 25.454 0.543448 25.454 0.543429C25.396 0.485505 25.3006 0.485524 25.2426 0.543485L19.9379 5.84555L20.1516 6.05907L25.4566 0.756655C25.5145 0.698812 25.5145 0.603888 25.4566 0.546045Z" fill="#4C4948" stroke="#4C4948" />
                                                <path d="M18.0269 20.701C18.0269 21.2252 18.4521 21.6507 18.9773 21.6507C19.5025 21.6507 19.9277 21.2252 19.9277 20.701C19.9277 20.1767 19.5024 19.7512 18.9773 19.7512C18.4522 19.7512 18.0269 20.1767 18.0269 20.701Z" fill="#4C4948" stroke="#4C4948" />
                                                <path d="M5.38233 20.701C5.38233 21.2252 5.80761 21.6507 6.33276 21.6507C6.85792 21.6507 7.2832 21.2252 7.2832 20.701C7.2832 20.1767 6.8579 19.7512 6.33276 19.7512C5.80762 19.7512 5.38233 20.1767 5.38233 20.701Z" fill="#4C4948" stroke="#4C4948" />
                                                <path d="M5.51918 17.9509H19.7908C19.8666 17.9509 19.9277 17.8895 19.9277 17.8143V17.8117C19.9277 17.7365 19.8666 17.675 19.7908 17.675H5.51918C5.44338 17.675 5.38221 17.7365 5.38221 17.8117V17.8143C5.38221 17.8907 5.44207 17.9509 5.51918 17.9509Z" fill="#4C4948" stroke="#4C4948" />
                                            </svg>
                                        </div>
                                        <div class="btnP">
                                            訂單管理
                                        </div>
                                    </a></li>
                                <li class="btn col-4 col-md-2 col-lg-12"><a href="./member-myFriend.php" id="btn4">
                                        <div class="btnsvg">
                                            <svg width="15" height="10.5" viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M13.5 18.5372C8.00652 18.5372 3.27343 14.4605 1.494 12.7078C1.17588 12.395 1 11.9762 1 11.529C1 11.0818 1.17588 10.663 1.494 10.3502C3.27343 8.59747 8.00652 4.52075 13.5 4.52075C18.9961 4.52075 23.7266 8.59747 25.506 10.3502C25.8241 10.663 26 11.0818 26 11.529C26 11.9762 25.8241 12.395 25.506 12.7078C23.7266 14.4605 18.9935 18.5372 13.5 18.5372ZM13.5 4.90852C8.14877 4.90852 3.51138 8.90768 1.76557 10.6268C1.52245 10.8672 1.38796 11.1878 1.38796 11.529C1.38796 11.8702 1.52245 12.1908 1.76557 12.4312C3.51138 14.1503 8.14877 18.1494 13.5 18.1494C18.8512 18.1494 23.4886 14.1503 25.2344 12.4312C25.4776 12.1908 25.612 11.8702 25.612 11.529C25.612 11.1878 25.4776 10.8672 25.2344 10.6268C23.4886 8.90768 18.8512 4.90852 13.5 4.90852Z" fill="#4C4948" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M24.8831 12.0754C24.0271 12.9183 22.4636 14.3182 20.464 15.505C18.4612 16.6938 16.0535 17.6494 13.5 17.6494C10.9465 17.6494 8.53878 16.6938 6.53596 15.505C4.5363 14.3181 2.97275 12.9181 2.11677 12.0753C1.96829 11.9283 1.88796 11.7357 1.88796 11.529C1.88796 11.3223 1.96829 11.1297 2.11677 10.9827C2.97275 10.1398 4.5363 8.73984 6.53596 7.55295C8.53878 6.36419 10.9465 5.40852 13.5 5.40852C16.0535 5.40852 18.4612 6.36419 20.464 7.55295C22.4636 8.73978 24.0271 10.1397 24.8831 10.9825C25.0317 11.1296 25.112 11.3222 25.112 11.529C25.112 11.7357 25.0317 11.9284 24.8831 12.0754ZM5.84959 6.3479C7.98602 5.08357 10.6318 4.02075 13.5 4.02075C16.3695 4.02075 19.0153 5.08355 21.1514 6.34792C23.29 7.61372 24.9496 9.10034 25.8566 9.99365C26.2702 10.4004 26.5 10.9476 26.5 11.529C26.5 12.1104 26.2702 12.6576 25.8566 13.0643C24.9495 13.9577 23.2893 15.4443 21.1504 16.7101C19.014 17.9744 16.3682 19.0372 13.5 19.0372C10.6318 19.0372 7.98602 17.9744 5.84959 16.7101C3.71047 15.4441 2.05009 13.9573 1.14313 13.064C0.729663 12.6573 0.5 12.1102 0.5 11.529C0.5 10.9478 0.729663 10.4007 1.14313 9.99396M5.84959 6.3479C3.71059 7.61375 2.05028 9.10045 1.14329 9.9938L5.84959 6.3479Z" fill="#4C4948" />
                                                <path d="M13.5001 18.3435C17.2654 18.3435 20.3178 15.2927 20.3178 11.5292C20.3178 7.76573 17.2654 4.71484 13.5001 4.71484C9.73477 4.71484 6.68237 7.76573 6.68237 11.5292C6.68237 15.2927 9.73477 18.3435 13.5001 18.3435Z" fill="#4C4948" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5001 5.21484C10.0107 5.21484 7.18237 8.04211 7.18237 11.5292C7.18237 15.0163 10.0107 17.8435 13.5001 17.8435C16.9895 17.8435 19.8178 15.0163 19.8178 11.5292C19.8178 8.04211 16.9895 5.21484 13.5001 5.21484ZM6.18237 11.5292C6.18237 7.48936 9.45886 4.21484 13.5001 4.21484C17.5413 4.21484 20.8178 7.48936 20.8178 11.5292C20.8178 15.569 17.5413 18.8435 13.5001 18.8435C9.45886 18.8435 6.18237 15.569 6.18237 11.5292Z" fill="#4C4948" />
                                                <path d="M13.6939 1H13.3059V4.7148H13.6939V1Z" fill="#4C4948" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12.8059 0.5H14.1939V5.2148H12.8059V0.5Z" fill="#4C4948" />
                                                <path d="M8.80521 1.66793L8.46924 1.86182L10.3276 5.07883L10.6635 4.88495L8.80521 1.66793Z" fill="#4C4948" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.78613 1.67871L8.98821 0.985013L11.3467 5.06792L10.1446 5.76162L7.78613 1.67871Z" fill="#4C4948" />
                                                <path d="M18.1961 1.67239L16.3374 4.8894L16.6734 5.08333L18.5321 1.86631L18.1961 1.67239Z" fill="#4C4948" />
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M15.6543 5.07251L18.0133 0.989601L19.2154 1.68344L16.8564 5.76635L15.6543 5.07251Z" fill="#4C4948" />
                                            </svg>
                                        </div>
                                        <div class="btnP">
                                            關注好友
                                        </div>
                                    </a></li>
                                <li class="btn col-4 col-md-2 col-lg-12"><a href="./member-myCoupon.php" id="btn5">
                                        <div class="btnsvg">
                                            <svg width="20" height="17.5" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.866025 9.5C0.387766 9.77612 0.223877 10.3878 0.5 10.866L2 13.4641C2.95652 12.9119 4.1798 13.2396 4.73205 14.1962C5.2843 15.1527 4.95652 16.376 4 16.9282L5.5 19.5263C5.77612 20.0045 6.38777 20.1684 6.86603 19.8923L22.4545 10.8923C22.9327 10.6162 23.0966 10.0045 22.8205 9.52628L21.3205 6.9282C20.364 7.48045 19.1407 7.15267 18.5885 6.19615C18.0362 5.23963 18.364 4.01635 19.3205 3.4641L17.8205 0.866025C17.5444 0.387766 16.9327 0.223877 16.4545 0.5L0.866025 9.5ZM13.4904 3.36603L12.6244 3.86603L14.6244 7.33013L15.4904 6.83013L13.4904 3.36603ZM15.6244 9.06218L16.4904 8.56218L18.4904 12.0263L17.6244 12.5263L15.6244 9.06218ZM4.37715 11.5814L4.57645 11.9266C4.71622 12.1687 4.89857 12.3603 5.12349 12.5014C5.34842 12.6426 5.60087 12.714 5.88082 12.7157C6.16377 12.7158 6.46065 12.626 6.77147 12.4466C7.07931 12.2689 7.30246 12.0583 7.44092 11.815C7.57938 11.5717 7.64225 11.3182 7.62952 11.0546C7.61978 10.7892 7.54502 10.5355 7.40525 10.2934L7.20596 9.94824C7.06274 9.70018 6.87866 9.50559 6.65373 9.36448C6.43179 9.22164 6.17935 9.15021 5.89641 9.15018C5.61645 9.14843 5.31957 9.23815 5.00575 9.41933C4.70091 9.59533 4.47925 9.805 4.34079 10.0483C4.20233 10.2916 4.13797 10.546 4.14771 10.8113C4.15745 11.0767 4.23393 11.3334 4.37715 11.5814ZM5.43271 11.4323L5.23341 11.0871C5.16957 10.9765 5.13033 10.8637 5.11569 10.7486C5.10231 10.6288 5.12108 10.5163 5.17197 10.4112C5.22115 10.3032 5.30551 10.2146 5.42506 10.1456C5.55357 10.0714 5.67543 10.0409 5.79064 10.0541C5.9071 10.0625 6.01237 10.1034 6.10644 10.1766C6.20178 10.2451 6.28137 10.3346 6.34521 10.4452L6.54451 10.7904C6.6049 10.895 6.64328 11.0063 6.65964 11.1244C6.67428 11.2395 6.65851 11.3502 6.61232 11.4566C6.56441 11.5599 6.4762 11.6487 6.34769 11.7229C6.22515 11.7937 6.10415 11.8257 5.9847 11.8189C5.8665 11.8075 5.75974 11.7675 5.66441 11.699C5.57034 11.6258 5.49311 11.5369 5.43271 11.4323ZM11.4534 12.3915L11.6527 12.7366C11.7942 12.9817 11.9774 13.1748 12.2024 13.3159C12.4303 13.4553 12.6857 13.525 12.9686 13.525C13.2516 13.5251 13.5485 13.4354 13.8593 13.2559C14.1671 13.0782 14.3903 12.8676 14.5287 12.6243C14.6672 12.381 14.7301 12.1275 14.7173 11.8639C14.7076 11.5985 14.632 11.3433 14.4905 11.0983L14.2912 10.7531C14.1497 10.508 13.9665 10.3149 13.7416 10.1738C13.5166 10.0327 13.2642 9.96124 12.9842 9.95949C12.7043 9.95774 12.4089 10.0466 12.0981 10.2261C11.7902 10.4038 11.5656 10.6152 11.4241 10.8602C11.2857 11.1035 11.2198 11.3587 11.2266 11.6258C11.2363 11.8912 11.3119 12.1464 11.4534 12.3915ZM12.5135 12.2397L12.3142 11.8945C12.252 11.7869 12.2152 11.6747 12.2035 11.5579C12.1901 11.4381 12.2074 11.3265 12.2553 11.2231C12.3045 11.1151 12.3918 11.0248 12.5174 10.9523C12.6429 10.8798 12.7633 10.8502 12.8785 10.8634C12.9949 10.8718 13.1017 10.9118 13.1987 10.9833C13.2941 11.0518 13.3728 11.1398 13.4349 11.2474L13.6342 11.5926C13.6963 11.7002 13.7386 11.8113 13.7609 11.9259C13.7862 12.0388 13.775 12.147 13.727 12.2503C13.6791 12.3537 13.5835 12.4468 13.44 12.5296C13.3264 12.5952 13.2099 12.6246 13.0905 12.6179C12.974 12.6094 12.8642 12.5712 12.7612 12.5031C12.6582 12.4351 12.5756 12.3473 12.5135 12.2397ZM9.72657 14.8649L9.96855 7.92288L9.14939 7.9535L8.90741 14.8955L9.72657 14.8649Z" fill="#4C4948" />
                                            </svg>
                                        </div>
                                        <div class="btnP">
                                            優惠券
                                        </div>
                                    </a></li>
                                <li class="btn col-4 col-md-2 col-lg-12"><a href="./member-myNotice.php" id="btn6">
                                        <div class="btnsvg">
                                            <svg width="13" height="17" viewBox="0 0 20 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5343 10.434V13.9637L18.9979 20.9875C19.1631 21.4551 18.8148 21.9455 18.319 21.9455H12.5757C12.5757 23.6328 11.2079 25 9.51971 25C7.83154 25 6.46372 23.6328 6.46372 21.9455H0.720383C0.22461 21.9455 -0.123701 21.4551 0.041556 20.9875L2.51025 13.9637V10.434C2.51699 7.2305 4.67462 4.5327 7.61588 3.70372V1.90394C7.61588 0.852424 8.4683 0 9.51982 0C9.52032 0 9.52083 1.95699e-07 9.52133 5.87027e-07C9.52164 1.95715e-07 9.52194 0 9.52225 0C9.52363 0 9.52501 3.97422e-06 9.52639 1.19119e-05C10.5749 0.00355513 11.4238 0.854616 11.4238 1.90394V3.70147C14.3691 4.52732 16.5275 7.22849 16.5343 10.434Z" fill="#4C4948" />
                                            </svg>
                                        </div>
                                        <div class="btnP">
                                            通知
                                        </div>
                                    </a></li>
                            </ul>
                        </div>
                    </div>

                    <!------------ white border ------------>

                    <div class="whiteBg col-lg-9 col-xl-9">
                        <div class="backToList">
                            <a href="./member-myFriend.php" class="btl">
                                <svg width="6" height="10" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.502188 11.103L9.33131 19.5574C9.47632 19.6976 9.64885 19.809 9.83894 19.8849C10.029 19.9609 10.2329 20 10.4388 20C10.6448 20 10.8487 19.9609 11.0388 19.8849C11.2288 19.809 11.4014 19.6976 11.5464 19.5574C11.8369 19.277 12 18.8978 12 18.5024C12 18.1071 11.8369 17.7279 11.5464 17.4475L3.82481 9.96573L11.5464 2.55877C11.8369 2.27841 12 1.89915 12 1.50384C12 1.10852 11.8369 0.729267 11.5464 0.448906C11.4019 0.307518 11.2296 0.195036 11.0395 0.117979C10.8494 0.0409222 10.6452 0.000822067 10.4388 0C10.2325 0.000822067 10.0283 0.0409222 9.83818 0.117979C9.64806 0.195036 9.47578 0.307518 9.33131 0.448906L0.502188 8.90332C0.343848 9.04344 0.217482 9.21351 0.131051 9.40279C0.0446205 9.59208 -9.53674e-07 9.79649 -9.53674e-07 10.0031C-9.53674e-07 10.2098 0.0446205 10.4142 0.131051 10.6035C0.217482 10.7928 0.343848 10.9628 0.502188 11.103Z" fill="#2d827d" />
                                </svg>
                                <p>返回好友列表</p>
                            </a>
                        </div>
                        <div class="friendDetailsTop">
                            <div class="friendDetails">
                                <div class="friendName">
                                    <div class="fn">
                                        <p><?= $r['name'] ?></p>
                                    </div>
                                    <div class="friendEditIcon">
                                        <button class="editIcon">
                                            <svg width="10" height="10" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.3139 10.2864L14.7085 2.68474L17.1825 0.212005C17.4653 -0.0706682 17.9213 -0.0706682 18.2042 0.212005L24.7878 6.79241C25.0706 7.07509 25.0706 7.53093 24.7878 7.8136L22.3139 10.2864Z" fill="#4C4948" />
                                                <path d="M21.1211 11.4791L13.4751 3.83691L2.32505 14.9815L9.971 22.6236L21.1211 11.4791Z" fill="#4C4948" />
                                                <path d="M4.9528 19.9966L8.77459 23.8165L4.34386 24.4226L0.580677 24.937C0.244359 24.9829 -0.0410016 24.6976 0.00485987 24.3615L0.519529 20.6002L1.12592 16.1716L4.9528 19.9966Z" fill="#4C4948" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="friendGenderBirth">
                                    <div class="friendGender">
                                        <p><?= $r['gender'] ?></p>
                                    </div>
                                    <div class="friendBirth">
                                        <p><?= $r['birthday_mm'] ?>月<?= $r['birthday_dd'] ?>日</p>
                                    </div>
                                </div>
                                <div class="friendEmail">
                                    <p><?= $r['email'] ?></p>
                                </div>
                            </div>
                            <div class="friendtags">
                                <div class="tagsName">
                                    <p>
                                        好友印象標籤
                                    </p>
                                </div>
                                <div class="tags">
                                    <?php foreach ($friendtags as $ft) : ?>
                                        <div class="tag">
                                            <p><?php
                                                $ftsid = $ft['tag_sid'];
                                                $ftshow = $pdo->query("SELECT * FROM tag WHERE `sid`= $ftsid ")->fetchAll();
                                                echo $ftshow[0]['name']; ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="friendWishList">
                            <div class="f-wishes">
                                <div class="f-title">
                                    <p>好友心願</p>
                                </div>
                                <?php if (!empty($friendfavorite)) : ?>
                                    <?php foreach ($friendfavorite as $ff) : ?>
                                        <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                            <a href="./product_details.php?sid=<?= $ff['product_sid'] ?>">
                                                <img class="wish" src="./images/products/<?= $ff['product_sid'] ?>_1.png" alt="">
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/72-2.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/71-4.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/72-2.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/72-2.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/71-4.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/72-2.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/71-4.jpeg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="f-recommend">
                                <?php if (!empty($friendtags)) : ?>
                                    <div class="f-title">
                                        <p>禮物推薦</p>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty($friendtags)) {
                                    $recommendArr = [];
                                    for ($n = 0; $n < count($friendtags); $n++) {
                                        // echo $friendtags[$n]['tag_sid'];
                                        array_push($recommendArr, $friendtags[$n]['tag_sid']);
                                    }
                                    $recommendwhere = " WHERE 1 AND (`tag_sid` =" . implode(" OR `tag_sid`=", $recommendArr) . ") ";
                                    $recommendsql = "SELECT DISTINCT `product_sid` FROM `tag_rel` $recommendwhere ORDER BY RAND() LIMIT 8";
                                    $recommend = $pdo->query($recommendsql)->fetchAll();
                                    // echo json_encode($recommendsql);
                                    // exit;
                                } ?>
                                <?php if (!empty($friendtags)) : ?>
                                    <?php foreach ($recommend as $rc) : ?>
                                        <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                            <a href="./product_details.php?sid=<?= $rc['product_sid'] ?>">
                                                <img class="wish" src="./images/products/<?= $rc['product_sid'] ?>_1.png" alt="">
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <!-- <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/72-2.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/71-4.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/72-2.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/72-2.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/71-4.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/72-2.jpeg" alt="">
                                    </a>
                                </div>
                                <div class="wishList col-6 col-sm-4 col-md-3 col-lg-3 col-xl-3">
                                    <a href="#">
                                        <img class="wish" src="./images/products/71-4.jpeg" alt="">
                                    </a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ------------lightbox-friendDetails------------ -->

<div class="lightbox-friendDetails-bg">
    <form method="POST" name="editFriend" onsubmit="checkFriend(); return false;" class="lightbox-friendDetails" novalidate>
        <p class="editTitle">編輯好友資訊</p>
        <div class="friend-details">
            <div class="detail">
                <div class="detail-text">
                    <p><span>*</span> 好友姓名</p>
                </div>
                <div class="detail-input">
                    <input type="text" name="friendname" placeholder="好友的姓名或暱稱" required>
                </div>
            </div>
            <div class="detail">
                <div class="detail-text">
                    <p><span>*</span> 好友性別</p>
                </div>
                <div class="detail-input">
                    <select name="friendgender" placeholder="請選擇" required>
                        <option value="male">男</option>
                        <option value="female">女</option>
                        <!-- <option value="others">不顯示</option> -->
                    </select>
                </div>
            </div>
            <div class="detail">
                <div class="detail-text">
                    <p>好友Email</p>
                </div>
                <div class="detail-input">
                    <input type="email" name="friendemail" placeholder="好友的電子郵件地址">
                </div>
            </div>
            <div class="detail">
                <div class="detail-text">
                    <p><span>*</span> 好友生日</p>
                </div>
                <div class="detail-input">
                    <input type="text" name="friendmonth" placeholder="MM" class="birthmd" \d{1}\d{1} required>
                    <input type="text" name="friendday" placeholder="DD" class="birthmd" required>
                </div>
            </div>
            <div class="detail">
                <div class="detail-text">
                    <p>好友印象標籤</p>
                </div>
                <div class="detail-input">
                    <div class="appendtag">
                        <?php if (!empty($friendtags)) : ?>
                            <?php foreach ($friendtags as $ft) : ?>
                                <input type='text' name='friendtag[]' value='<?= $ft['tag_sid'] ?>' hidden></input>
                                <div class="tag" data-val="<?= $ft['tag_sid'] ?>">
                                    <span class="kenken" data-val="<?= $ft['tag_sid'] ?>"><?php
                                                                                            $ftsid = $ft['tag_sid'];
                                                                                            $ftshow = $pdo->query("SELECT * FROM tag WHERE `sid`= $ftsid ")->fetchAll();
                                                                                            echo $ftshow[0]['name']; ?></span>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="detail">
                <div class="detail-text"></div>
                <div class="detail-input">
                    <div class="tagsselect">
                        <div class="tags">
                            <?php foreach ($tags as $t) : ?>
                                <span class="tagbyken <?= $t['sid'] ?>" data-val="<?= $t['sid'] ?>" style="<?php
                                                                                                            if (!empty($friendtags)) {
                                                                                                                foreach ($friendtags as $ft) {
                                                                                                                    echo $ft['tag_sid'] == $t['sid'] ? 'background-color: #000000; color: #ffffff' : '';
                                                                                                                };
                                                                                                            };
                                                                                                            ?>"><?= $t['name'] ?></span>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detailsbtn">
            <input type="text" name="friendsid" value="<?= $friend ?>" hidden>
            <button class="f-store" type="submit" name="btn">儲存</button>
            <button class="f-clean" type="reset" name="btn">取消</button>
        </div>
    </form>
</div>

<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./js/member.js"></script>
<script>
    let url = window.location.search;

    function checkFriend() {
        // TODO: 欄位檢查
        //   if (!$("#login-email").val()) {
        //     alert("請填寫帳號");
        //     return;
        //   }
        //   if (!$("#login-password").val()) {
        //     alert("請填寫密碼");
        //     return;
        //   }
        $.post(
            "editfriend-api.php",
            $(document.editFriend).serialize(),
            function(data) {
                if (data.success) {
                    location.href = "member-myFriendDetails.php" + url;
                } else {
                    alert(data.error);
                }
            },
            "json"
        );
    }

    // TODO: friendtag的value

    let tagnameArr = [];
    let tagvalueArr = [];
    <?php foreach ($friendtags as $ft) : ?>
        tagvalueArr.push(<?= $ft['tag_sid']; ?>);
    <?php endforeach; ?>
    console.log(tagvalueArr)
    let inputname = 1;
    $('.tagbyken').click(function() {
        if (tagvalueArr.length < 5) {
            let tagname = $(this).text();
            let tagvalue = $(this).attr('data-val');
            tagnameArr.push(tagname);
            tagvalueArr.push(tagvalue);
            console.log(tagvalueArr)
            $('.appendtag').append(
                "<input type='text' name='friendtag[]' value='" +
                tagvalue +
                "' hidden></input>"
            )
            $('.appendtag').append(
                "<div class='tag' data-val='" + tagvalue + "'><span class='kenken' data-val='" + tagvalue + "'>" + tagname + "</span></div>"
            )
        }
    })
    $('button.clean').click(function() {
        $('.appendtag').empty();
        tagvalueArr.length = 0;
        $('.tagbyken').css({
            'background-color': '#ffffff',
            'color': '#000000'
        })
    })
    $('.appendtag').on("click", 'span.kenken', function() {
        const thisval = $(this).attr('data-val');
        console.log("1." + thisval);

        for (let j = 0; j < tagvalueArr.length; j++) {
            if (tagvalueArr[j] === thisval) {
                tagvalueArr.splice(j, 1);
            }
        }
        // console.log($(this).parent());
        // console.log($(this).parent().prev('input'));
        ($(this).parent().parent().parent().parent().next().find(`span.${thisval}`)).css({
            'background-color': '#ffffff',
            'color': '#000000'
        });
        ($(this).parent().prev('input')).remove();
        ($(this).parent()).remove();
        $(this).remove();
        console.log(tagvalueArr);
    })
    $('.tagbyken, span.kenken').click(function() {
        $(this).css({
            'background-color': '#000000',
            'color': '#ffffff'
        })
    })
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>