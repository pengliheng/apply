<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>投票</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="/new_vote/Public/css/bootstrap.css" rel="stylesheet">
    <link href="/new_vote/Public/css/swiper.min.css" rel="stylesheet">
    <link href="/new_vote/Public/css/iconfont.css" rel="stylesheet">
    <link href="/new_vote/Public/css/basic.css" rel="stylesheet">
    <style>
    </style>
</head>

<body style="padding-bottom: 20%">
<div class="line_main" style="background: #fff">
    <div class="line_title">排行榜</div>
    <div class="line_info">
        <div class="line_info_title row">
            <ul class="list-inline">
                <li style="text-align: right; width: 20%"><span
                        style="width: 45%; display: inline-block;"></span><span
                        style="width: 53%; display: inline-block; text-align: center">名次</span></li>
                <li></li>
                <li>编号</li>
                <li>姓名</li>
                <li>票数</li>
            </ul>
        </div>
        <div class="line_info_people row">
            <ul class="list-inline">
                <li style="text-align: right; padding-left: 3%; width: 20%"><span
                        class="glyphicon"
                        style="width: 45%; line-height: 0px; display: inline-block; position: absolute; left: 0px; top: 40%; transform: translateY(-50%);"><img
                        src="/new_vote/Public/images/star_1.png" style="width: 61%;"></span><span
                        style="width: 53%; display: inline-block; text-align: center">1</span></li>
                <li><img src="/new_vote/Public/images/l_1.jpg"
                         style="max-width: 100%;"></li>
                <li>022</li>
                <li>SASA</li>
                <li>156</li>
            </ul>
            <ul class="list-inline">
                <li style="text-align: right; padding-left: 3%; width: 20%"><span
                        class="glyphicon"
                        style="width: 45%; line-height: 0px; display: inline-block; position: absolute; left: 0px; top: 40%; transform: translateY(-50%);"><img
                        src="/new_vote/Public/images/star_2.png" style="width: 61%;"></span><span
                        style="width: 53%; display: inline-block; text-align: center">2</span></li>
                <li><img src="/new_vote/Public/images/l_1.jpg"
                         style="max-width: 100%;"></li>
                <li>022</li>
                <li>SASA</li>
                <li>156</li>
            </ul>
            <ul class="list-inline">
                <li style="text-align: right; padding-left: 3%; width: 20%"><span
                        class="glyphicon"
                        style="width: 45%; line-height: 0px; display: inline-block; position: absolute; left: 0px; top: 40%; transform: translateY(-50%);"><img
                        src="/new_vote/Public/images/star_3.png" style="width: 61%;"></span><span
                        style="width: 53%; display: inline-block; text-align: center">3</span></li>
                <li><img src="/new_vote/Public/images/l_1.jpg"
                         style="max-width: 100%;"></li>
                <li>022</li>
                <li>SASA</li>
                <li>156</li>
            </ul>
            <ul class="list-inline">
                <li style="text-align: right; padding-left: 3%; width: 20%"><span
                        class="glyphicon"
                        style="width: 45%; line-height: 0px; display: inline-block; position: absolute; left: 0px; top: 40%; transform: translateY(-50%);"><img
                        src="/new_vote/Public/images/star_3.png" style="width: 61%;"></span><span
                        style="width: 53%; display: inline-block; text-align: center">3</span></li>
                <li><img src="/new_vote/Public/images/l_1.jpg"
                         style="max-width: 100%;"></li>
                <li>022</li>
                <li>SASA</li>
                <li>156</li>
            </ul>
            <ul class="list-inline">
                <li style="text-align: right; padding-left: 3%; width: 20%"><span
                        class="glyphicon"
                        style="width: 45%; line-height: 0px; display: inline-block; position: absolute; left: 0px; top: 40%; transform: translateY(-50%);"><img
                        src="/new_vote/Public/images/star_3.png" style="width: 61%;"></span><span
                        style="width: 53%; display: inline-block; text-align: center">3</span></li>
                <li><img src="/new_vote/Public/images/l_1.jpg"
                         style="max-width: 100%;"></li>
                <li>022</li>
                <li>SASA</li>
                <li>156</li>
            </ul>
            <ul class="list-inline">
                <li style="text-align: right; padding-left: 3%; width: 20%"><span
                        class="glyphicon"
                        style="width: 45%; line-height: 0px; display: inline-block; position: absolute; left: 0px; top: 40%; transform: translateY(-50%);"><img
                        src="/new_vote/Public/images/star_3.png" style="width: 61%;"></span><span
                        style="width: 53%; display: inline-block; text-align: center">3</span></li>
                <li><img src="/new_vote/Public/images/l_1.jpg"
                         style="max-width: 100%;"></li>
                <li>022</li>
                <li>SASA</li>
                <li>156</li>
            </ul>

        </div>
    </div>
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
            <a href="<?php echo U('Index/apply');?>">
                    <span class="iconfont icon-apply">

         </span>
                <p>我要报名</p>
            </a>
        </div>
        <div class="col-xs-3  list-item">
            <a href="<?php echo U('Index/line');?>" class="color">
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
</html>