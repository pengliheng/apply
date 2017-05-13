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

$(document).ready(function(){
    $('form').change(function(){
        var form='#'+$(this).attr("id");
        var photo=new FormData($(form)[0]);
        var thisfile = $(this);
        var appId = document.getElementById("myDiv").dataset.appid;
        $.ajax({
            url:appId,
            type:'post',
            data:photo,
            contentType: false,
            processData: false,
            success:function(res){
                console.log(res.picture);
                console.log(thisfile);
                var html = '<img src="'+'http://localhost/new_vote'+res.picture+'" alt="">';
                console.log(html);
                thisfile.append(html);
                console.log(res.error);
            }
        });
    });
});

console.log($(".textarea-max").val().length)


