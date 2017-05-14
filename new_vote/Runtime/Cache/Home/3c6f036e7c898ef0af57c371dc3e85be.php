<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>抽奖</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="/new_vote/Public/css/bootstrap.css" rel="stylesheet">
    <link href="/new_vote/Public/css/swiper.min.css" rel="stylesheet">
    <link href="/new_vote/Public/css/iconfont.css" rel="stylesheet">
    <link href="/new_vote/Public/css/basic.css" rel="stylesheet">
    <style>

    </style>
</head>

<body id="myBody" style="padding-bottom: 17%;" data-app="/new_vote/Home/Index/upload" data-root="/new_vote">


<div class="apply_title">
    活动报名处
</div>
<form action="" method="">
    <input onkeyup="this.value=this.value.replace(/[^\u4e00-\u9fa5]/g,'')" type="text" id="name" placeholder="请输入您的姓名" maxlength="10">

    <input onkeyup="this.value=this.value.replace(/\D/g,'')" type="text" id="phone" placeholder="请输入您的手机号码" maxlength="11">
</form>

    <p class="phone_tip">
        * 请输入正确的手机号码，已便后需联系
    </p>
    <!--     <input type="file"> -->
    <div class="upload">
        <p class="upload_tip">
            上传照片（1-8）张（默认第一张为封面图）
        </p>
        <div class="upload_img">
            <div class="row">
                <div class="col-xs-3 list-item">
                    <form action="" id="form1">
                        <p id="dd">
                            <span class="line_1"></span>
                            <span class="line_2"></span>
                            <input name="photo" multiple value="" id="btn_upload" class="btn_upload" type="file">
                            <img src="" alt="">
                        </p>
                    </form>
                </div>
                <div class="col-xs-3 list-item upload-hide">
                    <form action="" id="form2">
                        <p id="dd">
                            <span class="line_1"></span>
                            <span class="line_2"></span>
                            <input name="photo" multiple value="" id="btn_upload" class="btn_upload" type="file">
                            <img src="" alt="">
                        </p>
                    </form>
                </div>
                <div class="col-xs-3 list-item upload-hide">
                    <form action="" id="form3">
                        <p id="dd">
                            <span class="line_1"></span>
                            <span class="line_2"></span>
                            <input name="photo" multiple value="" id="btn_upload" class="btn_upload" type="file">
                            <img src="" alt="">
                        </p>
                    </form>
                </div>
                <div class="col-xs-3 list-item upload-hide last-one">
                    <form action="" id="form4">
                        <p id="dd">
                            <span class="line_1"></span>
                            <span class="line_2"></span>
                            <input name="photo" multiple value="" id="btn_upload" class="btn_upload" type="file">
                            <img src="" alt="">
                        </p>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3 list-item upload-hide first-one">
                    <form action="" id="form3">
                        <p id="dd">
                            <span class="line_1"></span>
                            <span class="line_2"></span>
                            <input name="photo" multiple value="" id="btn_upload" class="btn_upload" type="file">
                            <img src="" alt="">
                        </p>
                    </form>
                </div>
                <div class="col-xs-3 list-item upload-hide">
                    <form action="" id="form3">
                        <p id="dd">
                            <span class="line_1"></span>
                            <span class="line_2"></span>
                            <input name="photo" multiple value="" id="btn_upload" class="btn_upload" type="file">
                            <img src="" alt="">
                        </p>
                    </form>
                </div>
                <div class="col-xs-3 list-item upload-hide">
                    <form action="" id="form3">
                        <p id="dd">
                            <span class="line_1"></span>
                            <span class="line_2"></span>
                            <input name="photo" multiple value="" id="btn_upload" class="btn_upload" type="file">
                            <img src="" alt="">
                        </p>
                    </form>
                </div>
                <div class="col-xs-3 list-item upload-hide">
                    <form action="" id="form3">
                        <p id="dd">
                            <span class="line_1"></span>
                            <span class="line_2"></span>
                            <input name="photo" multiple value="" id="btn_upload" class="btn_upload" type="file">
                            <img src="" alt="">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="messages">
        <textarea class="textarea-max">
      
        </textarea>
        <p class="area">*不得超过60个字</p>
    </div>


    <div class="bt">
        <button type="button" class="btn">提交</button>
        <button type="button" class="btn">返回首页</button>
    </div>


<div class="footer text-center">
    <div class="row">
        <div class="col-xs-3 list-item">
            <a href="<?php echo U('Index/index');?>">
                    <span class="iconfont icon-home ">
         </span>
                <p>首页</p>
            </a>
        </div>
        <div class="col-xs-3  list-item">
            <a href="<?php echo U('Index/apply');?>" class="color">
                    <span class="iconfont icon-apply">

         </span>
                <p>我要报名</p>
            </a>
        </div>
        <div class="col-xs-3  list-item">
            <a href="<?php echo U('Index/line');?>">
                      <span class="iconfont icon-line">

         </span>
                <p>牌行榜</p>
            </a>
        </div>
        <div class="col-xs-3  list-item">
            <a href="<?php echo U('Index/explain');?>">
                     <span class="iconfont icon-explain">

         </span>
                <p>活动说明</p>
            </a>
        </div>
    </div>
</div>
</body>
<script src="/new_vote/Public/js/libs/jquery.min.js"></script>
<script src="/new_vote/Public/js/libs/swiper.min.js"></script>
<!--<script src="/new_vote/Public/js/libs/bootstrap.min.js"></script>-->
<script src="/new_vote/Public/js/libs/basic.js"></script>
<script src="http://cdn.static.runoob.com/libs/angular.js/1.4.6/angular.min.js"></script>
</html>