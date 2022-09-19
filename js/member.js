// greenBorder - memberButton

$("li.myIntro > a").click(function(){
    if($(this).prop("checked")){
        $("li.myIntro").css("opacity", "1");
    } else {
        $("li.myCollect").css("opacity", "0");
    }
});