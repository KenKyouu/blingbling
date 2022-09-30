// function numAdd(){
//     var num=document.getElementById('addtext');
//     num.innerHTML++;
// }
// function numReduce(){
//     var num = document.getElementById('addtext');
//     num.innerHTML--;
// }

function numAdd() {
  var addtext = document.getElementById("addtext");
  addtext.value = parseInt(addtext.value) + 1;
  var mb_addtext = document.getElementById("mb_addtext");
  mb_addtext.value = parseInt(mb_addtext.value) + 1;
}
function numReduce() {
  const value = $("#mb_addtext").val();
  if (value == 1) {
    var mb_addtext = document.getElementById("mb_addtext");
    mb_addtext.value = parseInt(mb_addtext.value) - 0;
    var addtext = document.getElementById("addtext");
    addtext.value = parseInt(addtext.value) - 0;
  } else {
    var addtext = document.getElementById("addtext");
    addtext.value = parseInt(addtext.value) - 1;
    var mb_addtext = document.getElementById("mb_addtext");
    mb_addtext.value = parseInt(mb_addtext.value) - 1;
  }
}

$('.heart-icon').click(function(){
  $(this).addClass('active');
})

function addToCart(event) {
  const addToCartBtn = $(event.currentTarget);
  const qty = addToCartBtn.closest(".pc-add-cart").find(".quantity-num").val();
  const sid = addToCartBtn.attr("data-sid");
  console.log({
    sid,
    qty,
  });

  $.get(
    "handle-cart.php",
    {
      sid,
      qty,
    },
    function (data) {
      showCartCount(data);
      console.log(data);
    },
    "json"
  );
}



function heart(event){
  const item = $(event.currentTarget).closest('.heart-icon');
    const sid = item.attr('data-sid');
    console.log(sid);
    $.get(
        'favorite.php',
        {
            sid
        },
        'json');
        $.get(
          'handle-cart.php',
      {
          sid
      },
          'json');
}