// 優惠券光箱
$('.coupon-btn').on('click', function () {
    $('.s-coupon-lightbox').show();
})

$('.coupon-pc-btn').on('click', function () {
    $('.s-coupon-pc-lightbox').show();
})

$('.coupon-apply-btn').on('click', function () {
    $('.s-coupon-lightbox').hide();
})

$('.coupon-apply-btn').on('click', function () {
    $('.s-coupon-pc-lightbox').hide();
})

// 關閉優惠券視窗
$('.coupon-svg').on('click', function () {
    $('.s-coupon-lightbox').hide();
})

$('.coupon-svg').on('click', function () {
    $('.s-coupon-pc-lightbox').hide();
})

// 摘要小精靈none-fixed
// $(window).scroll(function () {
//     const denominator = $('body').height() - $(window).height()
//     const percentage = $(window).scrollTop() / denominator * 100;
//     console.log('percentage: ', percentage);
// })





//價錢加,
const dollarCommas = function(n) {
	return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
};

function removeItem(event) {
	const listItem = $(event.currentTarget).closest('.j-list-item');
	const sid = listItem.attr('data-sid');

	$.get(
		'handle-cart.php', {
			sid
		},
		function(data) {
			// console.log(data);

			// showCartCount(data); //總數量
			listItem.remove();
			// TODO: 更新 總計, 
			updatePrices(); //ajax發回時就要更新
		},
		'json');
}

function removeHeart(event){
	const listItem = $(event.currentTarget).closest('.j-list-item');
	const sid = listItem.attr('data-sid');

	$.get(
		'handle-cart.php',{
			sid
		},
		function(data){
			// console.log(data);
			// showCartCount(data);
			listItem.remove();
			updatePrices();
		},
	'json');

}


$(function(){
	$(".add").click(function(){
		console.log('click');
	let sid = $(this).closest('.j-list-item').attr('data-sid');
	let t=$(this).parent().find('input[class*=qty]');
	t.val(parseInt(t.val())+1);
	qty = t.val();
	$.get(
		'handle-cart.php', {
			sid,
			qty
		},
		function(data) {
			console.log(data);
			// showCartCount(data); //總數量
			// TODO: 更新小計, 總計,
			updatePrices();
			// console.log(qty);
		},
		'json');
	})
	$(".min").click(function(){
		console.log('click');
	let sid = $(this).closest('.j-list-item').attr('data-sid');
	let t=$(this).parent().find('input[class*=qty]');
	t.val(parseInt(t.val())-1);
	if(parseInt(t.val())<1){
		t.val(1);
	}
	qty = t.val();
	$.get(
		'handle-cart.php', {
			sid,
			qty
		},
		function(data) {
			console.log(data);
	// 		showCartCount(data); //總數量
	// 		// TODO: 更新小計, 總計,
			updatePrices();
		},
		'json');
	})
	})








function updatePrices() {
	let total = 0; //總價

	$('.j-list-item').each(function() {
		//取值
		const listItem = $(this);
		const singlePrice = listItem.find('.singlePrice');
		const smallPrice = listItem.find('.smallPrice');

		const price = +singlePrice.attr('data-val');
		const qty = +listItem.find('.qty').val();

		singlePrice.html('NT$ ' + dollarCommas(price));
		smallPrice.html('NT$ ' + dollarCommas(price * qty));
		total += price * qty;
	});
	$('.j-product-price').html('NT$ ' + dollarCommas(total));
    const giftvoucher = $('.giftvoucher').attr('data-val');
    $('.giftvoucher').html('$ ' + dollarCommas(giftvoucher));
}
updatePrices(); //一進頁就要執行一次



function addToOrder(event) {
    // const addToOrderBtn = $(event.currentTarget);
    const producttotal = $('#orderProductPrice').text();
    const orderpackage = $('#orderPackagePrice').attr('data-val');
    const ordergiftvoucher = $('#orderCoinPrice').text();
    const ordercoupon = $('#orderCouponPrice').text();
    const orderfreight = $('#orderShippingPrice').text();
    console.log({
        producttotal,
        orderpackage,
        ordergiftvoucher,
        ordercoupon,
        orderfreight,
    });
  
    $.get(
      "addtoorder.php",
      {
        producttotal,
        orderpackage,
        ordergiftvoucher,
        ordercoupon,
        orderfreight,
      },
      function (data) {
          // showCartCount(data);
        console.log(data);
      },
      "json"
    );
  }




















