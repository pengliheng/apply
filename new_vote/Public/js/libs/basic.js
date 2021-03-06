var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    autoplay: 3000,
});


$('.footer .list-item').click(function() {
    var index = $(this).index()
    fp_color(index)
})

function fp_color(index) {
    $('.footer .list-item').eq(index).find('a').removeClass('color')
    $('.footer .list-item').eq(index).find('a').addClass('color')
}

/* 清除缓存，便于测试 */
var keys=document.cookie.match(/[^ =;]+(?=\=)/g); 
if (keys) { 
    for (var i = keys.length; i--;) 
        document.cookie=keys[i]+'=0;expires=' + new Date( 0).toUTCString() 
}
/* 清除缓存，便于测试 */



$(document).ready(function(){
    $('.btn_upload').change(function(){
        var form='#'+$(this).parent().parent().attr("id");
        var photo=new FormData($(form)[0]);
        var thisfile = $(this);
        var app = document.getElementById("myBody").dataset.app;
        var dataRoot = document.getElementById("myBody").dataset.root;
        //当上传图片时候提交按钮设置为disabled
        $(".bt .sub-btn").attr("disabled",true);
        $.ajax({
            url:app,
            type:'post',
            data:photo ,
            contentType: false,
            processData: false,
            success:function(res){
                if(res.status == "fail"){
                    console.log(res.status);
                    return
                }
                thisfile.parent().find("img").attr("id", res.picId);
                thisfile.parent().find("img").attr("src",dataRoot + res.path);
                //console.log(res.picture);
                //console.log(res.error);
                thisfile.parent().parent().parent().next().removeClass("upload-hide");
                thisfile.parent().parent().parent().parent().find(".last-one").change(function(){
                    $(".first-one").removeClass("upload-hide");
                    $(".first-one").parent().addClass("margin_top");
                })
                //当上传图片时候提交按钮设置为disabled
                $(".bt .sub-btn").attr("disabled",false);
            }
        });
    });

    $(".textarea-max").keyup(function(){
        var hasnumber = $(this).val().length;
        var lastnumber = 60- hasnumber ;
        if($(this).val().length >= 60){
            $(this).next().html( "*不得超过60个字")
        }else{
            $(this).next().html( "*还剩下"+ lastnumber +"个字")
        }
    })

    $("#phone").blur(function(){
        if( $(this).val().length != 11){
            $(this).val("");
            $(this).attr("placeholder","请输入正确的手机号码！！！！！！");
            $(this).focus();
        }
        var beginNum = $(this).val().substring(0,2);
        if( beginNum!=13 && beginNum!=15 && beginNum!=17 && beginNum!=18 ){
            $(this).val("");
            $(this).focus();
        }
    })

    $(".bt button").click(function(){
        //必须填写名字
        if ($("#name").val()== "") {
            $("#name").focus();
            return
        }
        //必须填写电话号码
        if ($("#phone").val()== "") {
            $("#phone").focus();
            return
        }
        //必须上传至少一张图片
        if ($("#form1 img").attr('src') == "") {
            alert("至少上传一张图片！");
            return
        }
        //必须上传至少一张图片
        if ($(".messages textarea").val() == "") {
            $(".messages textarea").focus();
            return
        }
        var imgId; 
        var imgMsg = {}; 
        for (var i = 1; i <= 8; i++) {
            imgid = "#form"+i+" img";
            var imgSrc = $(imgid).attr("id");
            if(imgSrc == undefined){
                break;
            }
            imgMsg["form"+i] = imgSrc;
        };
        var msg = {
            "name":$("#name").val(),
            "phone":$("#phone").val(),
            "imgMsg":imgMsg,
            "context":$(".textarea-max").val().substr(15,$(".textarea-max").val().length)
        };
        var json_msg = JSON.stringify(msg); 
        $.ajax({
            url:"/new_vote/Home/Index/upload",
            type:'post',
            data:json_msg,
            contentType: false,
            processData: false,
            success:function(res){
                //location.reload();
            }
        });
    })
});



