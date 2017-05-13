<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="/new_vote/Public/js/libs/jquery.min.js"></script>
</head>
<body>
<script>
   // alert('/new_vote/Public');
    /*$(document).ready(function () {
        $('#file').change(
                function doUpload() {
                    var formData = new FormData($("#uploadForm")[0]);
                    $.ajax({
                        url: '/new_vote/Home/Index/upload',
                        type: 'POST',
                        data: formData,
                        async: false,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (res) {
                            alert(res);
                        },
                        error: function (res) {
                            alert(res);
                        }
                    });
                }
        );
    });*/
    $(document).ready(function(){
        /*$('#test').click(function(){
            var photo=new FormData($('#form1')[0]);
            $.ajax({
                url:'/new_vote/Home/Index/upload',
                type:'post',
                data:photo,
                contentType: false,
                processData: false,
                success:function(res){
                    alert(res);
                }
            });
        });*/

        $('form').change(function(){
            var form='#'+$(this).attr("id");
            var photo=new FormData($(form)[0]);
            var thisfile = $(this);
            $.ajax({
                url:'/new_vote/Home/Index/upload',
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


</script>
<!--<form id="uploadForm">
    上传文件： <input type="file" name="photo" id="file"/>
    <input type="button" id="uu" value="上传" onclick="doUpload()"/>
</form>-->

<!--<form action="<?php echo U('Index/upload');?>" method="post" enctype="multipart/form-data">
    上传文件：<input type="file" name="photo[]"><input type="file" name="photo[]">
    <input type="submit" value="提交">
</form>-->
<form id="form1">
    <input type="file" name="photo">
</form>
<form id="form2">
    <input type="file" name="photo">
</form>
<form id="form3">
    <input type="file" name="photo">
</form>
<form id="form4">
    <input type="file" name="photo">
</form>
<form id="form5">
    <input type="file" name="photo">
</form>
<form id="form6">
    <input type="file" name="photo">
</form>
<form id="form7">
    <input type="file" name="photo">
</form>
<form id="form8">
    <input type="file" name="photo">
</form>

<!--<input type="button" id="test" value="test">-->

</body>
</html>