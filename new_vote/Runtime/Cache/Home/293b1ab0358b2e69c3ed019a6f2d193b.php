<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="/new_vote/Public/js/libs/jquery.min.js"></script>
</head>
<body data-app="/new_vote/Home/Index/upload">
<script>
    $(document).ready(function () {
        $('form').change(function () {
            var form = '#' + $(this).attr("id");
            console.log(form);
            var photo = new FormData($(form)[0]);
            console.log(photo);
            console.log('/new_vote/Home/Index/upload');
            thisfile = $(this) ; 
            $.ajax({
                url: '/new_vote/Home/Index/upload',
                type: 'post',
                data: photo,
                contentType: false,
                processData: false,
                success: function (res) {
                    console.log(res.status);
                    console.log(res.info);
                    console.log(res.picId);
                    console.log(res.path);
                    console.log('/new_vote' + res.path);
                    thisfile.find("img").attr("src",'/new_vote' + res.path);
                }
            });
        });
    });
</script>

<form id="form1">
    <input type="file" name="photo">
    <img src="" alt="">
</form>
<form id="form2">
    <input type="file" name="photo">
    <img src="" alt="">
</form>
<form id="form3">
    <input type="file" name="photo">
    <img src="" alt="">
</form>
<form id="form4">
    <input type="file" name="photo">
    <img src="" alt="">
</form>
<form id="form5">
    <input type="file" name="photo">
    <img src="" alt="">
</form>
<form id="form6">
    <input type="file" name="photo">
    <img src="" alt="">
</form>
<form id="form7">
    <input type="file" name="photo">
    <img src="" alt="">
</form>
<form id="form8">
    <input type="file" name="photo">
    <img src="" alt="">
</form>

</body>
</html>