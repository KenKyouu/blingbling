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
var store = $('.j-credit-info');

$('input:radio[name="pay"]').change(function(){
        if($('.j-credit').prop("checked")==false){
            $('.j-credit-bg').slideUp(400);
            setTimeout(function(){
                $('.j-credit-bg').hide();
            },800);
            
            store.remove(); // remove
            console.log(store);
            $('.j-credit-title').removeClass('.j-form-group');
        }
        else{
            $('.j-credit-bg').slideDown(400);
        setTimeout(function(){
            $('.j-credit-bg').show();
        },800);
        $('.j-credit-bg').append(store);
        console.log(store);
        $('.j-credit-title').addClass('.j-form-group');
        }

})
// $('input:radio[name="pay"]').change(function(){
//     if($('.j-credit').prop("checked")==false){
//         $('.j-credit-bg').slideUp(400);
//         setTimeout(function(){
//             $('.j-credit-bg').hide();
//         },800);
       
//     }else{
//         $('.j-credit-bg').slideDown(400);
//         setTimeout(function(){
//             $('.j-credit-bg').show();
//         },800);

//     }
// })

//auto input address
$('textarea[name="address"]').click(function(){
    $(this).val('中正路216巷133-1號6樓');
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
            format: {
                pattern: "^[A-z\\u4e00-\\u9fa5]*$",//可填中文與英文
                message: "^格式輸入錯誤"
            }
        },
        "cardNumber":{
            presence: {
                message: "^卡號 為必填欄位"
            },
            length: {
                is: 19,
                message: "^卡號 為16碼"
            }
        },
        "expires":{
            presence: {
                message: "^到期日 為必填欄位"
            },
            length: {
                is: 5,
                message: "^到期日 格式為MM/YY"
            }
        },
        "cvv":{
            presence: {
                message: "^安全碼 為必填欄位"
            },
            length: {
                is: 3,
                message: "^安全碼 為3碼"
            }
        }
    }
    // var constraintcard = {
    //     "cardHolder":{
    //         presence: {
    //             message: "^持卡人姓名 為必填欄位"
    //         },
    //         format: {
    //             pattern: "^[A-z\\u4e00-\\u9fa5]*$",//可填中文與英文
    //             message: "^格式輸入錯誤"
    //         }
    //     },
    //     "cardNumber":{
    //         presence: {
    //             message: "^卡號 為必填欄位"
    //         },
    //         length: {
    //             is: 19,
    //             message: "^卡號 為16碼"
    //         }
    //     },
    //     "expires":{
    //         presence: {
    //             message: "^到期日 為必填欄位"
    //         },
    //         length: {
    //             is: 5,
    //             message: "^到期日 格式為MM/YY"
    //         }
    //     },
    //     "cvv":{
    //         presence: {
    //             message: "^安全碼 為必填欄位"
    //         },
    //         length: {
    //             is: 3,
    //             message: "^安全碼 為3碼"
    //         }
    //     }
    // };
    


     // Hook up the form so we can prevent it from being posted
    let form = document.querySelector("form#cart2form");
    form.addEventListener("submit", function(ev) {
        ev.preventDefault();
        handleFormSubmit(form);
    });

    // Hook up the inputs to validate on the fly
    let inputs = document.querySelectorAll(".j, textarea, select")
    for (let i = 0; i < inputs.length; ++i) {
        inputs.item(i).addEventListener("change", function(ev) {
        let errors = validate(form, constraints) || {};
        showErrorsForInput(this, errors[this.name])
        });
    }

    

    // Updates the inputs with the validation errors
    function showErrors(form, errors) {
        // We loop through all the inputs and show the errors for that input
        _.each(form.querySelectorAll(".j[name], textarea[name], select[name]"), function(input) {
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

    function handleFormSubmit(form, input) {
        // validate the form against the constraints
            let errors = validate(form, constraints);
            // let errors = $(form)./hasClass('has-error');
            // then we update the form to reflect the results
            showErrors(form, errors || {});
            // showErrors(form, errorcard || {});
            // console.log(errors);
            // console.log(errors['cardHolder']);

            // if (!errors) {
            //     $.post(
            //     'cart2-api.php',
            //     $(document.cart2form).serialize(),
            //     function(data) {
            //         console.log(data);
            //         if(data.success){
            //             location.href= './cart3.php';
            //         }
            //     }, 'json');
            // }
            if($('.j-credit').prop("checked")==true && !errors){
                // if(!errors){
                console.log('1');
                $.post(
                    'cart2-api.php',
                    $(document.cart2form).serialize(),
                    function(data) {
                        console.log(data);
                        if(data.success){
                            location.href= './cart3.php';
                        }
                    }, 'json');
                // }
            }else if($('.j-credit').prop("checked")==false && !errors['ordererName'] && !errors['ordererMobile'] && !errors['recipientName'] && !errors['recipientMobile'] && !errors['address']){
                console.log('2');
                $.post(
                    'cart2-api.php',
                    $(document.cart2form).serialize(),
                    function(data) {
                        console.log(data);
                        if(data.success){
                            location.href= './cart3.php';
                        }
                    }, 'json');
            }
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
        $('#recipientName').parent().removeClass('has-error');
        $('#recipientName').next().html('');
        $('#recipientMobile').parent().removeClass('has-error');
        $('#recipientMobile').next().html('');

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
    $('.j-check input[id=cbSameOrderer]').prop('checked',false);
})
//if orderer has error ,can't checked
$('.j-orderer input[type=text]').change(function(){
    $('.j-check input[id=cbSameOrderer]').attr('disabled',false);
    if($(this).closest('.j-form-group').hasClass('has-error')){
        // console.log('error');
        $('.j-check input[id=cbSameOrderer]').attr('disabled',true);
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


//credit card翻轉

$(".creditcard").on("click", function(){
    if ($(this).hasClass("flipped")) {
        $(this).removeClass("flipped");
    } else {
        $(this).addClass("flipped");
    }
});

const cardholder = document.getElementById('cardHolder');
const cardnumber = document.getElementById('cardNumber');
const expirationdate = document.getElementById('expires');
const securitycode = document.getElementById('cvv');
const output = document.getElementById('output');
const ccsingle = document.getElementById('j-ccsingle');


let cctype = null;
//Mask the Credit Card Number Input
var cardnumber_mask = new IMask(cardnumber, {
    mask: [
        {
            mask: '0000 0000 0000 0000',
            regex: '^(5[1-5]\\d{0,2}|22[2-9]\\d{0,1}|2[3-7]\\d{0,2})\\d{0,12}',
            cardtype: 'mastercard'
        },
        {
            mask: '0000 000000 00000',
            regex: '^(?:2131|1800)\\d{0,11}',
            cardtype: 'jcb15'
        },
        {
            mask: '0000 0000 0000 0000',
            regex: '^(?:35\\d{0,2})\\d{0,12}',
            cardtype: 'jcb'
        },
        {
            mask: '0000 0000 0000 0000',
            regex: '^4\\d{0,15}',
            cardtype: 'visa'
        },
        {
            mask: '0000 0000 0000 0000',
            cardtype: 'Unknown'
        }
    ],
    dispatch: function (appended, dynamicMasked) {
        var number = (dynamicMasked.value + appended).replace(/\D/g, '');

        for (var i = 0; i < dynamicMasked.compiledMasks.length; i++) {
            let re = new RegExp(dynamicMasked.compiledMasks[i].regex);
            if (number.match(re) != null) {
                return dynamicMasked.compiledMasks[i];
            }
        }
    }
});

//Mask the security code
var cardholder_mask = new IMask(cardholder, {
    // mask:/^[\\u4E00-\u9FA5a-zA-Z]*$/,
    mask:/^[A-z\\u4e00-\u9fa5]*$/,
});

//Mask the Expiration Date
var expirationdate_mask = new IMask(expirationdate, {
    mask: 'MM{/}YY',
    groups: {
        YY: new IMask.MaskedPattern.Group.Range([0, 99]),
        MM: new IMask.MaskedPattern.Group.Range([1, 12]),
    }
});

//Mask the security code
var securitycode_mask = new IMask(securitycode, {
    mask: '000',
});


let visa_single = `<svg height="50px"
width="100%" clip-rule="evenodd" fill-rule="evenodd" viewBox="0 0 560 400" xmlns="http://www.w3.org/2000/svg"><path d="m286.87 176.71c-.228 17.993 16.036 28.034 28.287 34.004 12.588 6.126 16.816 10.054 16.768 15.531-.096 8.384-10.042 12.083-19.35 12.227-16.24.252-25.681-4.384-33.188-7.891l-5.849 27.373c7.531 3.472 21.476 6.499 35.938 6.631 33.944 0 56.152-16.756 56.273-42.736.132-32.971-45.607-34.797-45.295-49.535.108-4.468 4.372-9.237 13.717-10.45 4.624-.612 17.392-1.081 31.866 5.585l5.681-26.484c-7.783-2.835-17.789-5.55-30.244-5.55-31.95 0-54.423 16.984-54.604 41.295m139.44-39.013c-6.198 0-11.423 3.616-13.753 9.165l-48.49 115.777h33.92l6.75-18.654h41.451l3.916 18.654h29.896l-26.089-124.942zm4.744 33.752 9.789 46.916h-26.809zm-185.31-33.752-26.737 124.942h32.322l26.725-124.942zm-47.817 0-33.644 85.04-13.609-72.308c-1.597-8.071-7.903-12.732-14.906-12.732h-54.999l-.769 3.628c11.291 2.45 24.119 6.402 31.89 10.63 4.756 2.582 6.114 4.84 7.675 10.978l25.776 99.706h34.161l52.369-124.942z" fill="#FFFFFF"/></svg>`;
let jcb_single = `<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   height="45px"
   width="70%"
   xml:space="preserve"
   viewBox="0 0 300.00001 231.511"
   y="0px"
   x="0px"
   id="レイヤー_1"
   version="1.1"><metadata
     id="metadata6424"><rdf:RDF><cc:Work
         rdf:about=""><dc:format>image/svg+xml</dc:format><dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" /><dc:title></dc:title></cc:Work></rdf:RDF></metadata><defs
     id="defs6422" /><style
     id="style6319"
     type="text/css">
	.st0{fill:#FFFFFF;}
	.st1{fill:url(#SVGID_1_);}
	.st2{fill:url(#SVGID_2_);}
	.st3{fill:url(#SVGID_3_);}
	.st4{fill:url(#SVGID_4_);}
	.st5{fill:url(#SVGID_5_);}
  </style><g
     transform="translate(-9.4000001,96.810998)"
     id="g6321"><g
       transform="matrix(1.8215159,0,0,1.8215159,-8.5437653,-109.83667)"
       id="g6323"><path
         style="fill:#ffffff"
         id="path6325"
         d="m 174,108.3 c 0,14 -11.4,25.4 -25.4,25.4 l -138.2,0 0,-100.6 c 0,-14 11.4,-25.4 25.4,-25.4 l 138.2,0 0,100.6 z"
         class="st0" /><g
         id="g6327"><linearGradient
           gradientTransform="matrix(1.125,0,0,1.125,-11.9755,-13.8615)"
           y2="81.398598"
           x2="157.3299"
           y1="81.398598"
           x1="117.3856"
           gradientUnits="userSpaceOnUse"
           id="SVGID_1_"><stop
             id="stop6330"
             style="stop-color:#007940"
             offset="0" /><stop
             id="stop6332"
             style="stop-color:#00873F"
             offset="0.2285" /><stop
             id="stop6334"
             style="stop-color:#40A737"
             offset="0.7433" /><stop
             id="stop6336"
             style="stop-color:#5CB531"
             offset="1" /></linearGradient><path
           style="fill:url(#SVGID_1_)"
           id="path6338"
           d="m 129,82.5 10.5,0 c 0.3,0 1,-0.1 1.3,-0.1 2,-0.4 3.7,-2.2 3.7,-4.7 0,-2.4 -1.7,-4.2 -3.7,-4.7 -0.3,-0.1 -0.9,-0.1 -1.3,-0.1 l -10.5,0 0,9.6 z"
           class="st1" /><linearGradient
           gradientTransform="matrix(1.125,0,0,1.125,-11.9755,-13.8615)"
           y2="75.171402"
           x2="157.3318"
           y1="75.171402"
           x1="117.3844"
           gradientUnits="userSpaceOnUse"
           id="SVGID_2_"><stop
             id="stop6341"
             style="stop-color:#007940"
             offset="0" /><stop
             id="stop6343"
             style="stop-color:#00873F"
             offset="0.2285" /><stop
             id="stop6345"
             style="stop-color:#40A737"
             offset="0.7433" /><stop
             id="stop6347"
             style="stop-color:#5CB531"
             offset="1" /></linearGradient><path
           style="fill:url(#SVGID_2_)"
           id="path6349"
           d="m 138.3,16.2 c -10,0 -18.2,8.1 -18.2,18.2 l 0,18.9 25.7,0 c 0.6,0 1.3,0 1.8,0.1 5.8,0.3 10.1,3.3 10.1,8.5 0,4.1 -2.9,7.6 -8.3,8.3 l 0,0.2 c 5.9,0.4 10.4,3.7 10.4,8.8 0,5.5 -5,9.1 -11.6,9.1 l -28.2,0 0,37 26.7,0 c 10,0 18.2,-8.1 18.2,-18.2 l 0,-90.9 -26.6,0 z"
           class="st2" /><linearGradient
           gradientTransform="matrix(1.125,0,0,1.125,-11.9755,-13.8615)"
           y2="68.399101"
           x2="157.33051"
           y1="68.399101"
           x1="117.3846"
           gradientUnits="userSpaceOnUse"
           id="SVGID_3_"><stop
             id="stop6352"
             style="stop-color:#007940"
             offset="0" /><stop
             id="stop6354"
             style="stop-color:#00873F"
             offset="0.2285" /><stop
             id="stop6356"
             style="stop-color:#40A737"
             offset="0.7433" /><stop
             id="stop6358"
             style="stop-color:#5CB531"
             offset="1" /></linearGradient><path
           style="fill:url(#SVGID_3_)"
           id="path6360"
           d="m 143.2,63.1 c 0,-2.4 -1.7,-4 -3.7,-4.3 -0.2,0 -0.7,-0.1 -1,-0.1 l -9.5,0 0,8.8 9.5,0 c 0.3,0 0.9,0 1,-0.1 2,-0.3 3.7,-1.9 3.7,-4.3 z"
           class="st3" /></g><linearGradient
         gradientTransform="matrix(1.125,0,0,1.125,-11.9755,-13.8615)"
         y2="75.171402"
         x2="68.522102"
         y1="75.171402"
         x1="27.9594"
         gradientUnits="userSpaceOnUse"
         id="SVGID_4_"><stop
           id="stop6363"
           style="stop-color:#1F286F"
           offset="0" /><stop
           id="stop6365"
           style="stop-color:#004E94"
           offset="0.4751" /><stop
           id="stop6367"
           style="stop-color:#0066B1"
           offset="0.8261" /><stop
           id="stop6369"
           style="stop-color:#006FBC"
           offset="1" /></linearGradient><path
         style="fill:url(#SVGID_4_)"
         id="path6371"
         d="m 37.7,16.2 c -10,0 -18.2,8.1 -18.2,18.2 l 0,44.9 c 5.1,2.5 10.4,4.1 15.7,4.1 6.3,0 9.7,-3.8 9.7,-9 l 0,-21.2 15.6,0 0,21.1 c 0,8.2 -5.1,14.9 -22.4,14.9 -10.5,0 -18.7,-2.3 -18.7,-2.3 l 0,38.3 26.7,0 c 10,0 18.2,-8.1 18.2,-18.2 l 0,-90.8 -26.6,0 z"
         class="st4" /><linearGradient
         gradientTransform="matrix(1.125,0,0,1.125,-11.9755,-13.8615)"
         y2="75.171402"
         x2="111.8553"
         y1="75.171402"
         x1="72.459503"
         gradientUnits="userSpaceOnUse"
         id="SVGID_5_"><stop
           id="stop6374"
           style="stop-color:#6C2C2F"
           offset="0" /><stop
           id="stop6376"
           style="stop-color:#882730"
           offset="0.1735" /><stop
           id="stop6378"
           style="stop-color:#BE1833"
           offset="0.5731" /><stop
           id="stop6380"
           style="stop-color:#DC0436"
           offset="0.8585" /><stop
           id="stop6382"
           style="stop-color:#E60039"
           offset="1" /></linearGradient><path
         style="fill:url(#SVGID_5_)"
         id="path6384"
         d="m 88,16.2 c -10,0 -18.2,8.1 -18.2,18.2 l 0,23.8 c 4.6,-3.9 12.6,-6.4 25.5,-5.8 6.9,0.3 14.3,2.2 14.3,2.2 l 0,7.7 c -3.7,-1.9 -8.1,-3.6 -13.8,-4 -9.8,-0.7 -15.7,4.1 -15.7,12.5 0,8.5 5.9,13.3 15.7,12.5 5.7,-0.4 10.1,-2.2 13.8,-4 l 0,7.7 c 0,0 -7.3,1.9 -14.3,2.2 -12.9,0.6 -20.9,-1.9 -25.5,-5.8 l 0,42 26.7,0 c 10,0 18.2,-8.1 18.2,-18.2 l 0,-91 -26.7,0 z" class="st5" />
         </g><g id="g6386" /></g>
</svg>`;
let mastercard_single = `<?xml version="1.0" encoding="utf-8"?><svg version="1.1" 
id="svg3409" inkscape:version="0.91 r13725" sodipodi:docname="MasterCard 2016.svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg"
xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="80%" height="45px"
viewBox="0 0 999.2 776" enable-background="new 0 0 999.2 776" xml:space="preserve">
<g>
<rect id="rect19" x="364" y="66.1" fill="#FF5A00" width="270.4" height="485.8"/>
<path id="XMLID_330_" inkscape:connector-curvature="0" fill="#EB001B" d="M382,309c0-98.7,46.4-186.3,117.6-242.9
    C447.2,24.9,381.1,0,309,0C138.2,0,0,138.2,0,309s138.2,309,309,309c72.1,0,138.2-24.9,190.6-66.1C428.3,496.1,382,407.7,382,309z"
    />
<path id="path22" inkscape:connector-curvature="0" fill="#F79E1B" d="M999.2,309c0,170.8-138.2,309-309,309
    c-72.1,0-138.2-24.9-190.6-66.1c72.1-56.7,117.6-144.2,117.6-242.9S570.8,122.7,499.6,66.1C551.9,24.9,618,0,690.1,0
    C861,0,999.2,139.1,999.2,309z"/>
</g>
</svg>`;


//pop in the appropriate card icon when detected
cardnumber_mask.on("accept", function () {
    console.log(cardnumber_mask.masked.currentMask.cardtype);
    switch (cardnumber_mask.masked.currentMask.cardtype) {
        case 'visa':
            ccsingle.innerHTML = visa_single;
            break;
        case ('jcb' || 'jcb15'):
            ccsingle.innerHTML = jcb_single;
            break;
        case 'mastercard':
            ccsingle.innerHTML = mastercard_single;
            break;
        default:
            ccsingle.innerHTML = '';
            break;
    }
});



//On Input Change Events
cardholder.addEventListener('input', function () {
if (cardholder.value.length == 0) {
    document.getElementById('j-cardname').innerHTML = 'BlingBling';
    document.getElementById('j-cardnameback').innerHTML = 'BlingBling';
} else {
    document.getElementById('j-cardname').innerHTML = this.value;
    document.getElementById('j-cardnameback').innerHTML = this.value;
}
});

cardnumber_mask.on('accept', function () {
if (cardnumber_mask.value.length == 0) {
    document.getElementById('j-cardnumber').innerHTML = '**** **** **** ****';
} else {
    document.getElementById('j-cardnumber').innerHTML = cardnumber_mask.value;
}
});

expirationdate_mask.on('accept', function () {
if (expirationdate_mask.value.length == 0) {
    document.getElementById('j-cardexpire').innerHTML = 'MM/YY';
} else {
    document.getElementById('j-cardexpire').innerHTML = expirationdate_mask.value;
}
});

securitycode_mask.on('accept', function () {
if (securitycode_mask.value.length == 0) {
    document.getElementById('j-cardcvv').innerHTML = '****';
} else {
    document.getElementById('j-cardcvv').innerHTML = securitycode_mask.value;
}
});

//On Focus Events
cardholder.addEventListener('focus', function () {
document.querySelector('.creditcard').classList.remove('flipped');
});

cardnumber.addEventListener('focus', function () {
document.querySelector('.creditcard').classList.remove('flipped');
});

expirationdate.addEventListener('focus', function () {
document.querySelector('.creditcard').classList.remove('flipped');
});

securitycode.addEventListener('focus', function () {
document.querySelector('.creditcard').classList.add('flipped');
});



//價錢加,
const dollarCommas = function(n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")
};



const homedelivery = +$('.j-home').attr('data-val');
const storedelivery = +$('.j-convenience').attr('data-val');
$('.j-home').click(function(){
    $('.j-freightfee').html('NT$ ' + dollarCommas(homedelivery));
    $('.j-freightfee').attr('data-val',homedelivery);
    updatePrices();
})
$('.j-convenience').click(function(){
    $('.j-freightfee').html('NT$ ' + dollarCommas(storedelivery));
    $('.j-freightfee').attr('data-val',storedelivery);
    updatePrices();
})
    


function updatePrices() {
	let productTotal = 0; //總價

	$('.j-list-item').each(function() {
		//取值
		const listItem = $(this);
		const singlePrice = listItem.find('.j-money-single');
		const smallPrice = listItem.find('.j-money');

		const price = +singlePrice.attr('data-val');
		const qty = +listItem.find('.qty').text();

		singlePrice.html('NT$ ' + dollarCommas(price));
		smallPrice.html('NT$ ' + dollarCommas(price * qty));
		productTotal += price * qty;
	});
	$('.j-product-price').html('NT$ ' + dollarCommas(productTotal));
    $('.j-product-price').attr('data-val','NT$ ' + dollarCommas(productTotal));
	console.log(productTotal);
    const orderpackage = $('.j-package').attr('data-val');
    $('.j-package').html('NT$ ' + dollarCommas(orderpackage));
    const ordergiftvoucher = $('.j-giftvoucher').attr('data-val');
    $('.j-giftvoucher').html('NT$ ' + dollarCommas(ordergiftvoucher));
    const ordercoupon = $('.j-coupon').attr('data-val');
    $('.j-coupon').html('NT$ ' + dollarCommas(ordercoupon));
    const orderfreight = $('.j-freightfee').attr('data-val');
    $('.j-freightfee').html('NT$ ' + dollarCommas(orderfreight));
    console.log(orderfreight);
    const finaltotal = (productTotal + parseInt(orderpackage) - parseInt(ordergiftvoucher) - parseInt(ordercoupon) + parseInt(orderfreight)).toString();
    console.log(finaltotal);
    $('.finaltotal').html('NT$ ' + dollarCommas(finaltotal));
}
updatePrices(); //一進頁就要執行一次



function sameMember(){
    const ordererName = $('#ordererName').attr('data-val');
    const ordererMobile = $('#ordererMobile').attr('data-val');
    if($('#cbSameMember').prop('checked')){
        $('#ordererName').val(ordererName);
        $('#ordererMobile').val(ordererMobile);
        $('#ordererName').parent().removeClass('has-error');
        $('#ordererName').next().html('');
        $('#ordererMobile').parent().removeClass('has-error');
        $('#ordererMobile').next().html('');
    }
    else{
        $('#ordererName').val('');
        $('#ordererMobile').val('');
    }
    
}


//fixed scroll
$(window).scroll(function(){
    $('.j-summary-list').removeClass('j-scroll');

    if($(window).scrollTop() >= 2150){

    // console.log('$(window).scrollTop():',$(window).scrollTop());
    // console.log('scrollTop():',$('.s-pc-btn-wrap').offset().top);
        $('.j-summary-list').addClass('j-scroll');
    }
})