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

$(function () {
    $(".btn_upload").on("change",function(){
        var clickfile = $(this)
        if (typeof (FileReader) != "undefined") {
            var dvPreview = $(this).parent().find("#dvPreview");
            dvPreview.html("");
            var regex = /(.jpg|.jpeg|.gif|.png|.bmp)$/;
            $($(this)[0].files).each(function () {
                var file = $(this);
                if (regex.test(file[0].name.toLowerCase())) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        var img = $("<img />");
                        img.attr("src", e.target.result);

                        console.log(e.target.result);
                        var photo=e.target.result;
                        $.ajax({
                            url:'/new_vote/Home/Index/apply.html',
                            type:'post',
                            data:photo,
                            contentType: false,
                            processData: false,
                            success:function(res){
                                alert(res.picture);
                                alert(res.error);
                                dvPreview.append(img);
                            }
                        });


                    }
                    //点击触发取消上传框隐藏事件
                    clickfile.parent().parent().next().removeClass("upload-hide");
                    clickfile.parent().parent().parent().find(".last-one").change(function(){
                        $(this).parent().parent().find(".first-one").removeClass("upload-hide");
                    })
                    reader.readAsDataURL(file[0]);
                } else {
                alert(file[0].name + " is not a valid image file.");
                dvPreview.html("");
                return false;
                }
            });
        } else {
        alert("This browser does not support HTML5 FileReader.");
        }
    })
});

console.log($(".textarea-max").val().length)


