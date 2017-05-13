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
        console.log(form);
        var photo=new FormData($(form)[0]);
        console.log(photo);
        var thisfile = $(this);
        var app = document.getElementById("myBody").dataset.app;
        var dataRoot = document.getElementById("myBody").dataset.root;
        console.log(app);
        $.ajax({
            url:app,
            type:'post',
            data:photo ,
            contentType: false,
            processData: false,
            success:function(res){
                console.log(res.picture);
                thisfile.parent().find("img").attr("src",dataRoot + res.path);
                console.log(res.error);
            }
        });
    });
});



