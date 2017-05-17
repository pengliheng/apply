<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="/new_vote/Public/js/libs/jquery.min.js"></script>
</head>
<body>
<script>
    $(document).ready(function () {
        $('form').change(function () {
            var form = '#' + $(this).attr("id");
            var photo = new FormData($(form)[0]);
            $.ajax({
                url: '/new_vote/Home/Index/upload',
                type: 'post',
                data: photo,
                contentType: false,
                processData: false,
                success: function (res) {
                    alert(res.status);
                    alert(res.info);
                    alert(res.picId);
                    alert('/new_vote' + res.path);
                }
            });
        });
    });
</script>

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




</body>
</html>