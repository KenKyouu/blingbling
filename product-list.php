<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = 'product_list'; // 頁面名稱，可以自定義

$perPage = 20; // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate = isset($_GET['cate']) ? intval($_GET['cate']) : 0;
$lowp = isset($_GET['lowp']) ? intval($_GET['lowp']) : 0; // 篩選的最低價格
$highp = isset($_GET['highp']) ? intval($_GET['highp']) : 0; // 篩選的最高價格
$colors = [];
if (!empty($_GET['color'])) {
    $colors = $_GET['color'];
}

$qsp = []; // query string parameters
$where = ' WHERE 1 ';
// if ($cate) {
//     $where .= " AND class_sid=$cate ";
//     $qsp['cate'] = $cate;
// }
if ($cate > 0 and $cate < 9) {
    $where .= " AND parent=$cate ";
    $qsp['cate'] = $cate;
} else if ($cate > 8) {
    $where .= " AND class_sid=$cate ";
    $qsp['cate'] = $cate;
}
// echo $where;
// exit;
$products = [];
$cates = $pdo->query("SELECT * FROM class WHERE parent=$cate")->fetchAll();

$join = $pdo->query("SELECT * FROM `class` INNER JOIN `product` ON product.class_sid=class.sid")->fetchAll();
// echo json_encode($join);
// exit;

$catename = $pdo->query("SELECT * FROM class WHERE `sid`=$cate")->fetchAll();
if ($cate == 0) {
    $products = $pdo->query("SELECT * FROM product")->fetchAll();
} else {
    $products = $pdo->query("SELECT * FROM product WHERE `class_sid`= $cate")->fetchAll();
};
// $products = $pdo->query("SELECT * FROM product)->fetchAll();
// $t_sql = "SELECT COUNT(1) FROM product $where";
$t_sql = "SELECT COUNT(1) FROM `class` INNER JOIN `product` ON product.class_sid=class.sid $where";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totalPages = ceil($totalRows / $perPage);
$rows = [];
if ($totalRows > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    //$sql = sprintf("SELECT * FROM `product` %s ORDER BY `sid` DESC LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);
    $sql = sprintf("SELECT * FROM `class` INNER JOIN `product` ON product.class_sid=class.sid %s ORDER BY product.sid DESC LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}
?>

<?php include __DIR__ . '/parts/html-head.php'; ?>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<div class="content">
    <div class="banner">
        <div class="class">
            <h3><?php
                if ($catename == []) {
                    echo "全部";
                } else {
                    echo $catename[0]['name'];
                }
                ?></h3>
        </div>
    </div>
    <div class="slider">
        <div class="slider-bar">
            <ul>
                <?php foreach ($cates as $c) : ?>
                    <li><a href="?<?php $tmp['cate'] = $c['sid'];
                                    echo http_build_query($tmp); ?>">
                            <?= $c['name'] ?>
                        </a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <div class="filter-button-mobile">
        <button class="filter">
            <svg width="18" height="18" viewBox="0 0 25 18" fill="#4c4948" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.3751 2.80309H0.624875C0.279682 2.80309 0 2.52355 0 2.17852C0 1.8335 0.279682 1.55396 0.624875 1.55396H24.3751C24.7203 1.55396 25 1.8335 25 2.17852C25 2.52355 24.7203 2.80309 24.3751 2.80309Z" fill="#4C4948" />
                <path d="M24.3751 9.24498H0.624875C0.279682 9.24498 0 8.96544 0 8.62041C0 8.27539 0.279682 7.99585 0.624875 7.99585H24.3751C24.7203 7.99585 25 8.27539 25 8.62041C25 8.96544 24.7203 9.24498 24.3751 9.24498Z" fill="#4C4948" />
                <path d="M24.3751 15.473H0.624875C0.279682 15.473 0 15.1935 0 14.8484C0 14.5034 0.279682 14.2239 0.624875 14.2239H24.3751C24.7203 14.2239 25 14.5034 25 14.8484C25 15.196 24.7203 15.473 24.3751 15.473Z" fill="#4C4948" />
                <path d="M4.71173 4.35685C5.91543 4.35685 6.89123 3.38154 6.89123 2.17843C6.89123 0.975316 5.91543 0 4.71173 0C3.50802 0 2.53223 0.975316 2.53223 2.17843C2.53223 3.38154 3.50802 4.35685 4.71173 4.35685Z" fill="#4C4948" />
                <path d="M20.3008 10.7987C21.5045 10.7987 22.4803 9.82343 22.4803 8.62032C22.4803 7.41721 21.5045 6.44189 20.3008 6.44189C19.0971 6.44189 18.1213 7.41721 18.1213 8.62032C18.1213 9.82343 19.0971 10.7987 20.3008 10.7987Z" fill="#4C4948" />
                <path d="M12.5076 17.0522C13.7113 17.0522 14.6871 16.0768 14.6871 14.8737C14.6871 13.6706 13.7113 12.6953 12.5076 12.6953C11.3039 12.6953 10.3281 13.6706 10.3281 14.8737C10.3281 16.0768 11.3039 17.0522 12.5076 17.0522Z" fill="#4C4948" />
            </svg>
            篩選商品
        </button>
    </div>
    <div class="filter-button-pc">
        <button class="filter-pc">
            <svg width="30" height="30" viewBox="0 0 25 18" fill="#4c4948" xmlns="http://www.w3.org/2000/svg">
                <path d="M24.3751 2.80309H0.624875C0.279682 2.80309 0 2.52355 0 2.17852C0 1.8335 0.279682 1.55396 0.624875 1.55396H24.3751C24.7203 1.55396 25 1.8335 25 2.17852C25 2.52355 24.7203 2.80309 24.3751 2.80309Z" fill="#4C4948" />
                <path d="M24.3751 9.24498H0.624875C0.279682 9.24498 0 8.96544 0 8.62041C0 8.27539 0.279682 7.99585 0.624875 7.99585H24.3751C24.7203 7.99585 25 8.27539 25 8.62041C25 8.96544 24.7203 9.24498 24.3751 9.24498Z" fill="#4C4948" />
                <path d="M24.3751 15.473H0.624875C0.279682 15.473 0 15.1935 0 14.8484C0 14.5034 0.279682 14.2239 0.624875 14.2239H24.3751C24.7203 14.2239 25 14.5034 25 14.8484C25 15.196 24.7203 15.473 24.3751 15.473Z" fill="#4C4948" />
                <path d="M4.71173 4.35685C5.91543 4.35685 6.89123 3.38154 6.89123 2.17843C6.89123 0.975316 5.91543 0 4.71173 0C3.50802 0 2.53223 0.975316 2.53223 2.17843C2.53223 3.38154 3.50802 4.35685 4.71173 4.35685Z" fill="#4C4948" />
                <path d="M20.3008 10.7987C21.5045 10.7987 22.4803 9.82343 22.4803 8.62032C22.4803 7.41721 21.5045 6.44189 20.3008 6.44189C19.0971 6.44189 18.1213 7.41721 18.1213 8.62032C18.1213 9.82343 19.0971 10.7987 20.3008 10.7987Z" fill="#4C4948" />
                <path d="M12.5076 17.0522C13.7113 17.0522 14.6871 16.0768 14.6871 14.8737C14.6871 13.6706 13.7113 12.6953 12.5076 12.6953C11.3039 12.6953 10.3281 13.6706 10.3281 14.8737C10.3281 16.0768 11.3039 17.0522 12.5076 17.0522Z" fill="#4C4948" />
            </svg>
        </button>
    </div>
    <div class="product-list">
        <?php foreach ($rows as $r) : ?>
            <a onclick="addToHistory(event)" data-sid="<?= $r['sid'] ?>" href="./product_details.php?sid=<?= $r['sid'] ?>">
                <div class="product-card">
                    <div class="product-image">
                        <img src="./images/products/<?= $r['sid'] ?>_1.png" alt="">
                        <div class="heart">
                        </div>
                    </div>
                    <div class="product-title">
                        <h3><?= $r['name'] ?></h3>
                    </div>
                    <div class="product-price">
                        <p><?= $r['price'] ?></p>
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    <div class="page-button">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                    <a class="page-link" href="?<?php $qsp['page'] = $page - 1;
                                                echo http_build_query($qsp); ?>">
                        <i class="fa-solid fa-circle-arrow-left"></i>
                    </a>
                </li>
                <?php for ($i = $page - 2; $i <= $page + 2; $i++) :
                    if ($i >= 1 and $i <= $totalPages) :
                        $qsp['page'] = $i;
                ?>
                        <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                            <a class="page-link" href="?<?= http_build_query($qsp); ?>"><?= $i ?></a>
                        </li>
                <?php endif;
                endfor ?>
                <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                    <a class="page-link" href="?<?php $qsp['page'] = $page + 1;
                                                echo http_build_query($qsp); ?>">
                        <i class="fa-solid fa-circle-arrow-right"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div class="filter-page-pc">
    <div class="filter-page-pc-back">
        <span class="filter-pc-back"><svg width="164" height="12" viewBox="0 0 164 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M164 10L2 10" stroke="white" stroke-width="2" />
                <path d="M1 10.5L22 1" stroke="white" stroke-width="2" />
            </svg>
        </span>
    </div>
    <div class="filter-class-pc">
        <div class="button-filter-pc">
            <ul>
                <li><a href="" class="new">新品</a></li>
                <li><a href="" class="sale">優惠</a></li>
                <li><a href="" class="theme">節慶</a></li>
            </ul>
        </div>
        <div class="class-filter-pc">
            <h2>分類</h2>
            <div class="horizon"></div>
            <div class="class-name">
                <ul>
                    <li><a href="./product-list.php?cate=1">美妝保養</a></li>
                    <li><a href="./product-list.php?cate=2">流行時尚</a></li>
                    <li><a href="./product-list.php?cate=3">數位家電</a></li>
                    <li><a href="./product-list.php?cate=4">母嬰幼兒</a></li>
                    <li><a href="./product-list.php?cate=5">居家生活</a></li>
                    <li><a href="./product-list.php?cate=6">毛寵物</a></li>
                    <li><a href="./product-list.php?cate=7">節慶道具</a></li>
                    <li><a href="./product-list.php?cate=8">票券</a></li>
                </ul>
            </div>
        </div>
        <form name="filter_pc" action="">
            <div class="gender-filter-pc">
                <h2>性別</h2>
                <div class="horizon"></div>
                <div class="gender">
                    <input type="radio" name="gender-pc" id="male-pc">
                    <label for="male-pc">
                        <span>
                            <svg width="10" height="25" viewBox="0 0 10 25" fill="#5292b9" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_388_988)">
                                    <path d="M7.3881 6.33521H1.93183C0.866634 6.33521 0 7.20184 0 8.26703V14.3438C0 15.107 0.62257 15.7296 1.38579 15.7296C1.50575 15.7296 1.60503 15.7296 1.68776 15.7296V23.6141C1.68776 24.3773 2.31033 24.9999 3.07355 24.9999C3.83677 24.9999 4.45934 24.3773 4.45934 23.6141V16.3687C4.45934 16.2736 4.53586 16.197 4.63101 16.197H4.68892C4.78407 16.197 4.86059 16.2736 4.86059 16.3687V23.6141C4.86059 24.3773 5.48316 24.9999 6.24638 24.9999C7.0096 24.9999 7.63217 24.3773 7.63217 23.6141V15.7296C7.7149 15.7296 7.81418 15.7296 7.93414 15.7296C8.69736 15.7296 9.31993 15.107 9.31993 14.3438V8.26703C9.31993 7.20184 8.4533 6.33521 7.3881 6.33521Z" fill="#5292b9" />
                                    <path d="M4.65993 5.80169C6.25876 5.80169 7.56181 4.5007 7.56181 2.89981C7.56181 1.29892 6.25876 0 4.65993 0C3.06111 0 1.75806 1.30098 1.75806 2.90188C1.75806 4.50277 3.05904 5.80376 4.65993 5.80376V5.80169Z" fill="#5292b9" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_388_988">
                                        <rect width="9.31993" height="25" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </label>
                    <input type="radio" name="gender-pc" id="female-pc">
                    <label for="female-pc">
                        <span>
                            <svg width="10" height="25" viewBox="0 0 10 25" fill="#d45a6a" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_388_985)">
                                    <path d="M4.92873 5.80376C6.5314 5.80376 7.83061 4.50454 7.83061 2.90188C7.83061 1.29921 6.5314 0 4.92873 0C3.32607 0 2.02686 1.29921 2.02686 2.90188C2.02686 4.50454 3.32607 5.80376 4.92873 5.80376Z" fill="#d45a6a" />
                                    <path d="M9.81829 13.0035L8.71173 7.74374C8.54006 6.92675 7.80993 6.33521 6.97639 6.33521H2.88109C2.04755 6.33521 1.31742 6.92675 1.14575 7.74374L0.0391893 13.0035C-0.0704326 13.5289 0.0598727 14.0708 0.397012 14.4865C0.636939 14.7823 0.9596 14.985 1.31742 15.0801L0.860319 17.256H2.53774V17.345L2.94934 23.8933C2.98864 24.5138 3.50572 24.9999 4.12829 24.9999C4.43648 24.9999 4.71777 24.882 4.92667 24.6876C5.13764 24.882 5.41687 24.9999 5.72505 24.9999C6.34762 24.9999 6.8647 24.5138 6.904 23.8933L7.3156 17.3677V17.256H8.99509L8.53592 15.0801C8.89374 14.985 9.2164 14.7802 9.45633 14.4865C9.79554 14.0687 9.92584 13.5289 9.81415 13.0035H9.81829Z" fill="#d45a6a" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_388_985">
                                        <rect width="9.85563" height="25" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                    </label>
                    <input type="radio" name="gender-pc" id="all-gender-pc">
                    <label for="all-gender-pc">
                        <span class="all">全部</span>
                    </label>
                </div>
            </div>
            <div class="color-filter-pc">
                <h2>顏色</h2>
                <div class="horizon"></div>
                <div class="color">
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="black-pc" value="black">
                        <label for="black-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="black" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;黑色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="white-pc" value="white">
                        <label for="white-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="white" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;白色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="gray-pc" value="gray">
                        <label for="gray-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#C2C2C2" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;灰色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="brown-pc">
                        <label for="brown-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#7A482D" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;棕色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="rice-pc">
                        <label for="rice-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#F1DAAD" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;米色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="green-pc">
                        <label for="green-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#7EA083" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;綠色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="blue-pc">
                        <label for="blue-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#548FBE" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;藍色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="purple-pc">
                        <label for="purple-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#9149AB" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;紫色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="yellow-pc">
                        <label for="yellow-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#FFCD51" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;黃色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="pink-pc">
                        <label for="pink-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#EE92AD" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;粉色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="red-pc">
                        <label for="red-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#BD392A" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;紅色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="orange-pc">
                        <label for="orange-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#CB6B28" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;橘色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="silver-pc">
                        <label for="silver-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#D4CFC6" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;銀色</span></label>
                    </div>
                    <div class="color-content">
                        <input type="checkbox" name="color[]" id="gold-pc">
                        <label for="gold-pc"><span><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="9.5" fill="#FFE39F" stroke="white" />
                                </svg>
                                &nbsp;&nbsp;金色</span></label>
                    </div>
                </div>

            </div>
            <div class="price-filter-pc">
                <h2>價格</h2>
                <div class="horizon"></div>
                <div class="price">
                    <h4>NT$</h4>
                    <input type="text" name="price-pc" value="" maxlength="6" pattern="[0-9]{6}">
                    <h4>-</h4>
                    <input type="text" name="price-pc" value="" maxlength="6" pattern="[0-9]{6}">
                </div>
            </div>
            <button class="filter-submit-pc" type="submit">搜尋&nbsp;&nbsp;<svg width="82" height="14" viewBox="0 0 82 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_2766_86944)">
                        <path d="M0.378906 6.53516L80.2489 7.02516" stroke="white" stroke-width="0.75" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M75.2387 13.1352L74.2188 12.0252L79.6687 7.02523L74.2887 1.95523L75.3187 0.865234L81.8787 7.03523L75.2387 13.1352Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_2766_86944">
                            <rect width="81.88" height="12.27" fill="white" transform="translate(0 0.865234)" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </form>

    </div>
</div>
<div class="filter-page">
    <div class="filter-header">
        <span class="back"><svg width="12" height="15" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.502188 11.103L9.33131 19.5574C9.47632 19.6976 9.64885 19.809 9.83894 19.8849C10.029 19.9609 10.2329 20 10.4388 20C10.6448 20 10.8487 19.9609 11.0388 19.8849C11.2288 19.809 11.4014 19.6976 11.5464 19.5574C11.8369 19.277 12 18.8978 12 18.5024C12 18.1071 11.8369 17.7279 11.5464 17.4475L3.82481 9.96573L11.5464 2.55877C11.8369 2.27841 12 1.89915 12 1.50384C12 1.10852 11.8369 0.729267 11.5464 0.448906C11.4019 0.307518 11.2296 0.195036 11.0395 0.117979C10.8494 0.0409222 10.6452 0.000822067 10.4388 0C10.2325 0.000822067 10.0283 0.0409222 9.83818 0.117979C9.64806 0.195036 9.47578 0.307518 9.33131 0.448906L0.502188 8.90332C0.343848 9.04344 0.217482 9.21351 0.131051 9.40279C0.0446205 9.59208 -9.53674e-07 9.79649 -9.53674e-07 10.0031C-9.53674e-07 10.2098 0.0446205 10.4142 0.131051 10.6035C0.217482 10.7928 0.343848 10.9628 0.502188 11.103Z" fill="#ffffff" />
            </svg>
            &nbsp;&nbsp;返回</span>
    </div>
    <div class="filter-class">
        <div class="button-filter">
            <a href="">
                <span class="new">新品</span>
            </a>
            <a href="">
                <span class="sale">優惠</span>
            </a>
            <a href="">
                <span class="theme">節慶</span>
            </a>
        </div>
        <div class="gender-filter">
            <span class="filter-title">性別</span>
            <span class="filter-content" id="gender-span">所有性別</span>
            <span class="arrow">
                <svg width="12" height="15" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.4978 8.89704L2.66869 0.44262C2.52368 0.302369 2.35115 0.191049 2.16106 0.115081C1.97097 0.0391125 1.76708 0 1.56115 0C1.35522 0 1.15133 0.0391125 0.961244 0.115081C0.771154 0.191049 0.598626 0.302369 0.453612 0.44262C0.163076 0.722981 0 1.10224 0 1.49755C0 1.89287 0.163076 2.27212 0.453612 2.55248L8.17519 10.0343L0.453612 17.4412C0.163076 17.7216 0 18.1008 0 18.4962C0 18.8915 0.163076 19.2707 0.453612 19.5511C0.598083 19.6925 0.770368 19.805 0.960483 19.882C1.1506 19.9591 1.35476 19.9992 1.56115 20C1.76754 19.9992 1.97171 19.9591 2.16182 19.882C2.35194 19.805 2.52422 19.6925 2.66869 19.5511L11.4978 11.0967C11.6562 10.9566 11.7825 10.7865 11.8689 10.5972C11.9554 10.4079 12 10.2035 12 9.99686C12 9.79021 11.9554 9.5858 11.8689 9.39651C11.7825 9.20722 11.6562 9.03716 11.4978 8.89704Z" fill="#ffffff" />
                </svg>
            </span>
        </div>
        <div class="price-filter">
            <span class="filter-title">金額</span>
            <span class="filter-content" id="price-span">所有金額</span>
            <span class="arrow">
                <svg width="12" height="15" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.4978 8.89704L2.66869 0.44262C2.52368 0.302369 2.35115 0.191049 2.16106 0.115081C1.97097 0.0391125 1.76708 0 1.56115 0C1.35522 0 1.15133 0.0391125 0.961244 0.115081C0.771154 0.191049 0.598626 0.302369 0.453612 0.44262C0.163076 0.722981 0 1.10224 0 1.49755C0 1.89287 0.163076 2.27212 0.453612 2.55248L8.17519 10.0343L0.453612 17.4412C0.163076 17.7216 0 18.1008 0 18.4962C0 18.8915 0.163076 19.2707 0.453612 19.5511C0.598083 19.6925 0.770368 19.805 0.960483 19.882C1.1506 19.9591 1.35476 19.9992 1.56115 20C1.76754 19.9992 1.97171 19.9591 2.16182 19.882C2.35194 19.805 2.52422 19.6925 2.66869 19.5511L11.4978 11.0967C11.6562 10.9566 11.7825 10.7865 11.8689 10.5972C11.9554 10.4079 12 10.2035 12 9.99686C12 9.79021 11.9554 9.5858 11.8689 9.39651C11.7825 9.20722 11.6562 9.03716 11.4978 8.89704Z" fill="#ffffff" />
                </svg>
            </span>
        </div>
        <div class="color-filter">
            <span class="filter-title">顏色</span>
            <span class="filter-content" id="color-span">所有顏色</span>
            <span class="arrow">
                <svg width="12" height="15" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.4978 8.89704L2.66869 0.44262C2.52368 0.302369 2.35115 0.191049 2.16106 0.115081C1.97097 0.0391125 1.76708 0 1.56115 0C1.35522 0 1.15133 0.0391125 0.961244 0.115081C0.771154 0.191049 0.598626 0.302369 0.453612 0.44262C0.163076 0.722981 0 1.10224 0 1.49755C0 1.89287 0.163076 2.27212 0.453612 2.55248L8.17519 10.0343L0.453612 17.4412C0.163076 17.7216 0 18.1008 0 18.4962C0 18.8915 0.163076 19.2707 0.453612 19.5511C0.598083 19.6925 0.770368 19.805 0.960483 19.882C1.1506 19.9591 1.35476 19.9992 1.56115 20C1.76754 19.9992 1.97171 19.9591 2.16182 19.882C2.35194 19.805 2.52422 19.6925 2.66869 19.5511L11.4978 11.0967C11.6562 10.9566 11.7825 10.7865 11.8689 10.5972C11.9554 10.4079 12 10.2035 12 9.99686C12 9.79021 11.9554 9.5858 11.8689 9.39651C11.7825 9.20722 11.6562 9.03716 11.4978 8.89704Z" fill="#ffffff" />
                </svg>
            </span>
        </div>
        <div class="filter-footer">
            <button type="button">
                搜尋&nbsp;<svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.14 5.98">
                    <defs>
                        <style>
                            .cls-1 {
                                fill: none;
                                stroke: #fff;
                            }
                        </style>
                    </defs>
                    <g id="_圖層_1-2">
                        <path class="cls-1" d="M0,5.48H50" />
                        <path class="cls-1" d="M50,5.48L33,.48" />
                    </g>
                </svg>
            </button>
        </div>
    </div>
</div>
<div class="gender-filter-detail">
    <div class="filter-header">
        <span class="filter-detail-back"><svg width="12" height="15" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.502188 11.103L9.33131 19.5574C9.47632 19.6976 9.64885 19.809 9.83894 19.8849C10.029 19.9609 10.2329 20 10.4388 20C10.6448 20 10.8487 19.9609 11.0388 19.8849C11.2288 19.809 11.4014 19.6976 11.5464 19.5574C11.8369 19.277 12 18.8978 12 18.5024C12 18.1071 11.8369 17.7279 11.5464 17.4475L3.82481 9.96573L11.5464 2.55877C11.8369 2.27841 12 1.89915 12 1.50384C12 1.10852 11.8369 0.729267 11.5464 0.448906C11.4019 0.307518 11.2296 0.195036 11.0395 0.117979C10.8494 0.0409222 10.6452 0.000822067 10.4388 0C10.2325 0.000822067 10.0283 0.0409222 9.83818 0.117979C9.64806 0.195036 9.47578 0.307518 9.33131 0.448906L0.502188 8.90332C0.343848 9.04344 0.217482 9.21351 0.131051 9.40279C0.0446205 9.59208 -9.53674e-07 9.79649 -9.53674e-07 10.0031C-9.53674e-07 10.2098 0.0446205 10.4142 0.131051 10.6035C0.217482 10.7928 0.343848 10.9628 0.502188 11.103Z" fill="#ffffff" />
            </svg>
            &nbsp;&nbsp;返回</span>
    </div>
    <div class="gender-filter-content">
        <form class="gender-form" action="">
            <label for="male" class="gender-filter-radio">
                <span>
                    <svg width="10" height="25" viewBox="0 0 10 25" fill="#5292b9" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_388_988)">
                            <path d="M7.3881 6.33521H1.93183C0.866634 6.33521 0 7.20184 0 8.26703V14.3438C0 15.107 0.62257 15.7296 1.38579 15.7296C1.50575 15.7296 1.60503 15.7296 1.68776 15.7296V23.6141C1.68776 24.3773 2.31033 24.9999 3.07355 24.9999C3.83677 24.9999 4.45934 24.3773 4.45934 23.6141V16.3687C4.45934 16.2736 4.53586 16.197 4.63101 16.197H4.68892C4.78407 16.197 4.86059 16.2736 4.86059 16.3687V23.6141C4.86059 24.3773 5.48316 24.9999 6.24638 24.9999C7.0096 24.9999 7.63217 24.3773 7.63217 23.6141V15.7296C7.7149 15.7296 7.81418 15.7296 7.93414 15.7296C8.69736 15.7296 9.31993 15.107 9.31993 14.3438V8.26703C9.31993 7.20184 8.4533 6.33521 7.3881 6.33521Z" fill="#5292b9" />
                            <path d="M4.65993 5.80169C6.25876 5.80169 7.56181 4.5007 7.56181 2.89981C7.56181 1.29892 6.25876 0 4.65993 0C3.06111 0 1.75806 1.30098 1.75806 2.90188C1.75806 4.50277 3.05904 5.80376 4.65993 5.80376V5.80169Z" fill="#5292b9" />
                        </g>
                        <defs>
                            <clipPath id="clip0_388_988">
                                <rect width="9.31993" height="25" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    &nbsp; &nbsp; 男
                </span>
                <input type="radio" name="gender" id="male" value="male" />
            </label>
            <label for="female" class="gender-filter-radio">
                <span>
                    <svg width="10" height="25" viewBox="0 0 10 25" fill="#d45a6a" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_388_985)">
                            <path d="M4.92873 5.80376C6.5314 5.80376 7.83061 4.50454 7.83061 2.90188C7.83061 1.29921 6.5314 0 4.92873 0C3.32607 0 2.02686 1.29921 2.02686 2.90188C2.02686 4.50454 3.32607 5.80376 4.92873 5.80376Z" fill="#d45a6a" />
                            <path d="M9.81829 13.0035L8.71173 7.74374C8.54006 6.92675 7.80993 6.33521 6.97639 6.33521H2.88109C2.04755 6.33521 1.31742 6.92675 1.14575 7.74374L0.0391893 13.0035C-0.0704326 13.5289 0.0598727 14.0708 0.397012 14.4865C0.636939 14.7823 0.9596 14.985 1.31742 15.0801L0.860319 17.256H2.53774V17.345L2.94934 23.8933C2.98864 24.5138 3.50572 24.9999 4.12829 24.9999C4.43648 24.9999 4.71777 24.882 4.92667 24.6876C5.13764 24.882 5.41687 24.9999 5.72505 24.9999C6.34762 24.9999 6.8647 24.5138 6.904 23.8933L7.3156 17.3677V17.256H8.99509L8.53592 15.0801C8.89374 14.985 9.2164 14.7802 9.45633 14.4865C9.79554 14.0687 9.92584 13.5289 9.81415 13.0035H9.81829Z" fill="#d45a6a" />
                        </g>
                        <defs>
                            <clipPath id="clip0_388_985">
                                <rect width="9.85563" height="25" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>

                    &nbsp; &nbsp; 女
                </span>
                <input type="radio" name="gender" id="female" value="female" />
            </label>
            <label for="all-gender" class="gender-filter-radio all">
                <span class="all">&nbsp;&nbsp;全部</span>
                <input type="radio" name="gender" id="all-gender" value="all-gender" />
            </label>
        </form>
    </div>
    <div class="filter-footer">
        <button type="button">
            搜尋&nbsp;<svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.14 5.98">
                <defs>
                    <style>
                        .cls-1 {
                            fill: none;
                            stroke: #fff;
                        }
                    </style>
                </defs>
                <g id="_圖層_1-2">
                    <path class="cls-1" d="M0,5.48H50" />
                    <path class="cls-1" d="M50,5.48L33,.48" />
                </g>
            </svg>
        </button>
    </div>
</div>
<div class="price-filter-detail">
    <div class="filter-header">
        <span class="filter-detail-back"><svg width="12" height="15" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.502188 11.103L9.33131 19.5574C9.47632 19.6976 9.64885 19.809 9.83894 19.8849C10.029 19.9609 10.2329 20 10.4388 20C10.6448 20 10.8487 19.9609 11.0388 19.8849C11.2288 19.809 11.4014 19.6976 11.5464 19.5574C11.8369 19.277 12 18.8978 12 18.5024C12 18.1071 11.8369 17.7279 11.5464 17.4475L3.82481 9.96573L11.5464 2.55877C11.8369 2.27841 12 1.89915 12 1.50384C12 1.10852 11.8369 0.729267 11.5464 0.448906C11.4019 0.307518 11.2296 0.195036 11.0395 0.117979C10.8494 0.0409222 10.6452 0.000822067 10.4388 0C10.2325 0.000822067 10.0283 0.0409222 9.83818 0.117979C9.64806 0.195036 9.47578 0.307518 9.33131 0.448906L0.502188 8.90332C0.343848 9.04344 0.217482 9.21351 0.131051 9.40279C0.0446205 9.59208 -9.53674e-07 9.79649 -9.53674e-07 10.0031C-9.53674e-07 10.2098 0.0446205 10.4142 0.131051 10.6035C0.217482 10.7928 0.343848 10.9628 0.502188 11.103Z" fill="#ffffff" />
            </svg>
            &nbsp;&nbsp;返回</span>
    </div>
    <div class="price-filter-content">
        <form class="price-form" action="">
            <label for="price-range-one" class="price-filter-radio">
                <span>NT$500以下</span>
                <input type="radio" name="price" id="price-range-one" value="price-range-one" />
            </label>
            <label for="price-range-two" class="price-filter-radio">
                <span>NT$500 - NT$1,000</span>
                <input type="radio" name="price" id="price-range-two" value="price-range-two" />
            </label>
            <label for="price-range-three" class="price-filter-radio">
                <span>NT$1,000 - NT$5,000</span>
                <input type="radio" name="price" id="price-range-three" value="price-range-three" />
            </label>
            <label for="price-range-four" class="price-filter-radio last">
                <span>NT$5,000以上</span>
                <input type="radio" name="price" id="price-range-four" value="price-range-four" />
            </label>
        </form>
    </div>
    <div class="filter-footer">
        <button type="button">
            搜尋&nbsp;<svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.14 5.98">
                <defs>
                    <style>
                        .cls-1 {
                            fill: none;
                            stroke: #fff;
                        }
                    </style>
                </defs>
                <g id="_圖層_1-2">
                    <path class="cls-1" d="M0,5.48H50" />
                    <path class="cls-1" d="M50,5.48L33,.48" />
                </g>
            </svg>
        </button>
    </div>
</div>
<div class="color-filter-detail">
    <div class="filter-header">
        <span class="filter-detail-back"><svg width="12" height="15" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.502188 11.103L9.33131 19.5574C9.47632 19.6976 9.64885 19.809 9.83894 19.8849C10.029 19.9609 10.2329 20 10.4388 20C10.6448 20 10.8487 19.9609 11.0388 19.8849C11.2288 19.809 11.4014 19.6976 11.5464 19.5574C11.8369 19.277 12 18.8978 12 18.5024C12 18.1071 11.8369 17.7279 11.5464 17.4475L3.82481 9.96573L11.5464 2.55877C11.8369 2.27841 12 1.89915 12 1.50384C12 1.10852 11.8369 0.729267 11.5464 0.448906C11.4019 0.307518 11.2296 0.195036 11.0395 0.117979C10.8494 0.0409222 10.6452 0.000822067 10.4388 0C10.2325 0.000822067 10.0283 0.0409222 9.83818 0.117979C9.64806 0.195036 9.47578 0.307518 9.33131 0.448906L0.502188 8.90332C0.343848 9.04344 0.217482 9.21351 0.131051 9.40279C0.0446205 9.59208 -9.53674e-07 9.79649 -9.53674e-07 10.0031C-9.53674e-07 10.2098 0.0446205 10.4142 0.131051 10.6035C0.217482 10.7928 0.343848 10.9628 0.502188 11.103Z" fill="#ffffff" />
            </svg>
            &nbsp;&nbsp;返回</span>
    </div>
    <div class="color-filter-content">
        <form class="color-form" action="">
            <label for="black" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="black" stroke="white" />
                    </svg>
                    &nbsp;&nbsp;黑色</span>
                <input type="checkbox" name="color" id="black" value="black" />
            </label>
            <label for="white" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="white" stroke="white" />
                    </svg>

                    &nbsp;&nbsp;白色</span>
                <input type="checkbox" name="color" id="white" value="white" />
            </label>
            <label for="gray" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#C2C2C2" stroke="white" />
                    </svg>

                    &nbsp;&nbsp;灰色</span>
                <input type="checkbox" name="color" id="gray" value="gray" />
            </label>
            <label for="brown" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#7A482D" stroke="white" />
                    </svg>
                    &nbsp;&nbsp;棕色</span>
                <input type="checkbox" name="color" id="brown" value="brown" />
            </label>
            <label for="rice" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#F1DAAD" stroke="white" />
                    </svg>
                    &nbsp;&nbsp;米色</span>
                <input type="checkbox" name="color" id="rice" value="rice" />
            </label>
            <label for="green" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#7EA083" stroke="white" />
                    </svg>

                    &nbsp;&nbsp;綠色</span>
                <input type="checkbox" name="color" id="green" value="green" />
            </label>
            <label for="blue" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#548FBE" stroke="white" />
                    </svg>
                    &nbsp;&nbsp;藍色</span>
                <input type="checkbox" name="color" id="blue" value="blue" />
            </label>
            <label for="purple" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#9149AB" stroke="white" />
                    </svg>
                    &nbsp;&nbsp;紫色</span>
                <input type="checkbox" name="color" id="purple" value="purple" />
            </label>
            <label for="yellow" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#FFCD51" stroke="white" />
                    </svg>
                    &nbsp;&nbsp;黃色</span>
                <input type="checkbox" name="color" id="yellow" value="yellow" />
            </label>
            <label for="pink" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#EE92AD" stroke="white" />
                    </svg>
                    &nbsp;&nbsp;粉色</span>
                <input type="checkbox" name="color" id="pink" value="pink" />
            </label>
            <label for="red" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#BD392A" stroke="white" />
                    </svg>

                    &nbsp;&nbsp;紅色</span>
                <input type="checkbox" name="color" id="red" value="red" />
            </label>
            <label for="orange" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#CB6B28" stroke="white" />
                    </svg>

                    &nbsp;&nbsp;橘色</span>
                <input type="checkbox" name="color" id="orange" value="orange" />
            </label>
            <label for="silver" class="color-filter-radio">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#D4CFC6" stroke="white" />
                    </svg>
                    &nbsp;&nbsp;銀色</span>
                <input type="checkbox" name="color" id="silver" value="silver" />
            </label>
            <label for="gold" class="color-filter-radio last">
                <span><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.5" fill="#FFE39F" stroke="white" />
                    </svg>

                    &nbsp;&nbsp;金色</span>
                <input type="checkbox" name="color" id="gold" value="gold" />
            </label>
        </form>
    </div>
    <div class="filter-footer">
        <button type="button">
            搜尋&nbsp;<svg id="_圖層_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.14 5.98">
                <defs>
                    <style>
                        .cls-1 {
                            fill: none;
                            stroke: #fff;
                        }
                    </style>
                </defs>
                <g id="_圖層_1-2">
                    <path class="cls-1" d="M0,5.48H50" />
                    <path class="cls-1" d="M50,5.48L33,.48" />
                </g>
            </svg>
        </button>
    </div>
</div>
<?php include __DIR__ . '/parts/footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script>
    const colors = <?= json_encode($colors) ?>;
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>