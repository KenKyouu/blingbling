 //宅配地址縣市區 下拉選單
$("#zipcode2").twzipcode({
    countySel: "臺北市", // 城市預設值, 字串一定要用繁體的 "臺", 否則抓不到資料
    districtSel: "大安區", // 地區預設值
    zipcodeIntoDistrict: true, // 郵遞區號自動顯示在地區
    css: ["j-city", "j-town"], // 自訂 "城市"、"地區" class 名稱
    countyName: "city", // 自訂城市 select 標籤的 name 值
    districtName: "town" // 自訂地區 select 標籤的 name 值
});
let m = document.createElement('div');
m.classList.add("j-messages");
document.querySelector(".j-select").appendChild(m);

//訂購清單
$('.j-list-title').on('click',function(){
    $('.j-list').toggleClass('j-listopen');
})

//mobile訂單摘要
$('.j-upicon').on('click',function(){
    $('.j-subtotal').toggleClass('j-open');
})

//logistics 切換
if($('.j-convenience').prop("checked")==false){
    $('.j-store-info').hide();
    $('.j-money-pay').hide();
}else{
    $('.j-store-info').show();
    $('.j-money-pay').show();
}

$('input:radio[name="delivery"]').change(function(){
    // console.log('check');
    
    if($('.j-home').prop("checked")==false){
        $('.j-home-info').slideUp(400);
        setTimeout(function(){
            $('.j-home-info').hide();
        },800);
    }else{
        $('.j-home-info').slideDown(400);
        setTimeout(function(){
            $('.j-home-info').show();
        },800);
    }
    if($('.j-convenience').prop("checked")==false){
        $('.j-store-info').slideUp(400);
        $('.j-money-pay').hide();
        setTimeout(function(){
            $('.j-store-info').hide();
        },800);
    }else{
        $('.j-store-info').slideDown(400);
        $('.j-money-pay').show();
        setTimeout(function(){
            $('.j-store-info').show();
        },800);
    }
})

//pay 切換
$('input:radio[name="pay"]').change(function(){
    if($('.j-credit').prop("checked")==false){
        $('.j-credit-bg').slideUp(400);
        setTimeout(function(){
            $('.j-credit-bg').hide();
        },800);
    }else{
        $('.j-credit-bg').slideDown(400);
        setTimeout(function(){
            $('.j-credit-bg').show();
        },800);
    }
})

//credit card翻轉

$(".creditcard").on("click", function(){
    if ($(this).hasClass("flipped")) {
        $(this).removeClass("flipped");
    } else {
        $(this).addClass("flipped");
    }
});

//避免按下Enter就送出表單
$(document).on("keypress", "form", function (e) {
    let code = e.keyCode || e.which;
    if (code == 13) {
        e.preventDefault();
        return false;
    }
});







//欄位驗證
(function() {
    var constraints = {
        "ordererName": {
            presence: {
            message: "^訂購人姓名 為必填欄位"
            },
            format: {
                pattern: "^[A-z\\u4e00-\\u9fa5]*$",//可填中文與英文
                message: "^格式輸入錯誤"
            }
        },
        "ordererMobile": {
            presence: {
            message: "^訂購人手機 為必填欄位"
            },
            format: {
                pattern: "09\\d{2}-?\\d{3}-?\\d{3}",
                message: "^格式輸入錯誤"
            }
        },
        "ordererTel1": {
            format: {
                pattern: "\\d{2,3}-?",
                message: "^格式輸入錯誤"
            }
        },
        "ordererTel2": {
            format: {
                pattern: "\\d{3,4}-?\\d{4}",
                message: "^格式輸入錯誤"
            }
        },
        "recipientName": {
            presence: {
            message: "^收件人姓名 為必填欄位"
            },
            format: {
                pattern: "^[A-z\\u4e00-\\u9fa5]*$",//可填中文與英文
                message: "^格式輸入錯誤"
            }
        },
        "recipientMobile": {
            presence: {
            message: "^收件人手機 為必填欄位"
            },
            format: {
                pattern: "09\\d{2}-?\\d{3}-?\\d{3}",
                message: "^格式輸入錯誤"
            }
        },
        "recipientTel1": {
            format: {
                pattern: "\\d{2,3}-?",
                message: "^格式輸入錯誤"
            }
        },
        "recipientTel2": {
            format: {
                pattern: "\\d{3,4}-?\\d{4}",
                message: "^格式輸入錯誤"
            }
        },
        "city":{
            presence: {
                message: "^縣市/鄉鎮市區 為必填欄位"
            }
        },
        "address":{
            presence: {
                message: "^收件地址 為必填欄位"
            },
            format: {
                pattern: "(^$)|(^[\u4E00-\u9FA5a-zA-Z0-9,， ,\/,\\- ]{1,250}$)",
                message: "^格式輸入錯誤"
            }
        },
        "remark":{
            format: {
                pattern: "(^$)|(^[\u4E00-\u9FA5a-zA-Z0-9,， ,\/,\:,\\- ]{1,250}$)",
                message: "^格式輸入錯誤"
            }
        },
        "cardHolder":{
            presence: {
                message: "^持卡人姓名 為必填欄位"
            },
        },
        "cardNumber":{
            presence: {
                message: "^卡號 為必填欄位"
            },
        },
        "expires":{
            presence: {
                message: "^到期日 為必填欄位"
            },
        },
        "cvv":{
            presence: {
                message: "^安全碼 為必填欄位"
            },
        }
    };

     // Hook up the form so we can prevent it from being posted
    let form = document.querySelector("form#cart2form");
    form.addEventListener("submit", function(ev) {
        ev.preventDefault();
        handleFormSubmit(form);
    });

    // Hook up the inputs to validate on the fly
    let inputs = document.querySelectorAll("input, textarea, select")
    for (let i = 0; i < inputs.length; ++i) {
        inputs.item(i).addEventListener("change", function(ev) {
        let errors = validate(form, constraints) || {};
        showErrorsForInput(this, errors[this.name])
        });
    }

    function handleFormSubmit(form, input) {
    // validate the form against the constraints
        let errors = validate(form, constraints);
        // then we update the form to reflect the results
        showErrors(form, errors || {});
        if (!errors) {
          //   showSuccess();
            $.post(
            'cart2-api.php',
            $(document.cart2form).serialize(),
            function(data) {
                // console.log(data);
                if(data.success){
                    location.href= './cart3.php';
                } else {
                    alert(data.error);
                }
            }, 'json');
        }
    }

    // Updates the inputs with the validation errors
    function showErrors(form, errors) {
        // We loop through all the inputs and show the errors for that input
        _.each(form.querySelectorAll("input[name], textarea[name], select[name]"), function(input) {
            // Since the errors can be null if no errors were found we need to handle
            // that
            showErrorsForInput(input, errors && errors[input.name]);
        });
    }

    // Shows the errors for a specific input
    function showErrorsForInput(input, errors) {
        // This is the root of the input
        let formGroup = closestParent(input.parentNode, "j-form-group")
        // Find where the error messages will be insert into
        , messages = formGroup.querySelector(".j-messages");
          // First we remove any old messages and resets the classes
        resetFormGroup(formGroup);
          // If we have errors
        if (errors) {
            // we first mark the group has having errors
            formGroup.classList.add("has-error");
            // then we append all the errors
            _.each(errors, function(error) {
                addError(messages, error);
            });
        } else {
            // otherwise we simply mark it as success
            formGroup.classList.add("has-success");
        }
    }

    // Recusively finds the closest parent that has the specified class
    function closestParent(child, className) {
        if (!child || child == document) {
            return null;
        }
        if (child.classList.contains(className)) {
            return child;
        } else {
            return closestParent(child.parentNode, className);
        }
    }

    function resetFormGroup(formGroup) {
        // Remove the success and error classes
        formGroup.classList.remove("has-error");
        formGroup.classList.remove("has-success");
        // and remove any old messages
        _.each(formGroup.querySelectorAll(".help-block.error"), function(el) {
            el.parentNode.removeChild(el);
        });
    }

    // Adds the specified error with the following markup
    // <p class="j-help-block j-error">[message]</p>
    function addError(messages, error) {
        let block = document.createElement("p");
        block.classList.add("help-block");
        block.classList.add("error");
        block.innerText = error;
        messages.appendChild(block);
    }
})();


//同訂購人資料
function copyData(){
    if($('#cbSameOrderer').prop('checked')){
        // console.log('check');

        
        const ordererName = document.getElementById('ordererName').value;
        document.getElementById('recipientName').value = ordererName;
        const ordererMobile = document.getElementById('ordererMobile').value;
        document.getElementById('recipientMobile').value = ordererMobile;
        const ordererTel1 = document.getElementById('ordererTel1').value;
        document.getElementById('recipientTel1').value = ordererTel1;
        const ordererTel2 = document.getElementById('ordererTel2').value;
        document.getElementById('recipientTel2').value = ordererTel2;
    }else{
        // console.log('not');
        document.getElementById('recipientName').value ='';
        document.getElementById('recipientMobile').value = '';
        document.getElementById('recipientTel1').value = '';
        document.getElementById('recipientTel2').value = '';
    }
    
    
}
//checked 狀態下更改origin data 
function cop(){
    if($('#cbSameOrderer').prop('checked')){
        const ordererName = document.getElementById('ordererName').value;
        document.getElementById('recipientName').value = ordererName;
        const ordererMobile = document.getElementById('ordererMobile').value;
        document.getElementById('recipientMobile').value = ordererMobile;
        const ordererTel1 = document.getElementById('ordererTel1').value;
        document.getElementById('recipientTel1').value = ordererTel1;
        const ordererTel2 = document.getElementById('ordererTel2').value;
        document.getElementById('recipientTel2').value = ordererTel2;
    }
    
}
//when data change ,remove checked 
$('.j-recipient input[type=text]').change(function(){
    $('.j-check input[type=checkbox]').prop('checked',false);
})
//if orderer has error ,can't checked
$('.j-orderer input[type=text]').change(function(){
    $('.j-check input[type=checkbox]').attr('disabled',false);
    if($(this).closest('.j-form-group').hasClass('has-error')){
        // console.log('error');
        $('.j-check input[type=checkbox]').attr('disabled',true);
    }
})



//超商同收件資料
function copyData2(){
    if($('#j-convenience').prop('checked')){
        // console.log('check');
        const recipientName = document.getElementById('recipientName').value;
        document.getElementById('storeRecipientName').value = recipientName;
        const recipientMobile = document.getElementById('recipientMobile').value;
        document.getElementById('storeRecipientMobile').value = recipientMobile;
    }else{
        document.getElementById('storeRecipientName').value ='';
        document.getElementById('storeRecipientMobile').value ='';
    }

}
function cop2(){
    if($('#j-convenience').prop('checked')){
        // console.log('check');
        const recipientName = document.getElementById('recipientName').value;
        document.getElementById('storeRecipientName').value = recipientName;
        const recipientMobile = document.getElementById('recipientMobile').value;
        document.getElementById('storeRecipientMobile').value = recipientMobile;
    }
}