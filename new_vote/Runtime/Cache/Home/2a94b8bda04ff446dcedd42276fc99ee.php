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

<body>

<div class="banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">
           <!-- <div class="swiper-slide"><img src="/new_vote/Public/images/b_1.jpg" class="img-responsive"></div>-->


            <?php if(is_array($act["pictures"])): $i = 0; $__LIST__ = $act["pictures"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pictures): $mod = ($i % 2 );++$i;?><div class="swiper-slide"><img src="/new_vote<?php echo ($pictures); ?>" class="img-responsive"></div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
</div>
<div class="apply_vote">
    <div class="row">
        <div class="col-xs-6 apply">
            <p>已报名</p>
            <p>1100</p>
        </div>
        <div class="col-xs-6 vote">
            <p>投票人数</p>
            <p>2350</p>
        </div>
    </div>
</div>
<div class="main">
    <div class="search">

        <div class="input-group" style="  margin:0 auto;">

            <input type="text" class="form-control" style="z-index: 0;">
            <span class="input-group-addon" style="border:1px solid #ec6124">搜索</span>
        </div>
    </div>
    <div class="active_time">
        <span>活动时间：<?php echo ($act["apply_start_time"]); ?>-<?php echo ($act["apply_end_time"]); ?></span><br>
        <span>投票时间：<?php echo ($act["act_start_time"]); ?>-<?php echo ($act["act_end_time"]); ?></span>
    </div>
    <div class="grid_match">
        <ol class="breadcrumb">
            <li><a href="">最新比赛</a></li>
            <li><a href="">排行榜</a></li>
            <li><a href="">TOP100</a></li>
        </ol>
    </div>
    <div class="grid_people">
        <div class="row">
            <div class="col-xs-6">
                <div class="thumbnail">
                    <a href="<?php echo U('Index/player?id='.$act[id]);?>"><img src="/new_vote/Public/images/p_1.jpg"></a>
                    <div class="caption">
                        <p>陈天华</p>
                        <p>132票</p>
                            <span class="circle">
         <p>投TA</p>
         <p>一票</p>
   </span>
                    </div>
                    <span class="num">001</span>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="thumbnail">
                    <a href="<?php echo U('Index/player?id='.$act[id]);?>"><img src="/new_vote/Public/images/p_1.jpg"></a>
                    <div class="caption">
                        <p>陈天华</p>
                        <p>132票</p>
                            <span class="circle">
      <p>投TA</p>
         <p>一票</p>
   </span>
                    </div>
                    <span class="num">002</span>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="thumbnail">
                    <a href="<?php echo U('Index/player?id='.$act[id]);?>"><img src="/new_vote/Public/images/p_1.jpg"></a>
                    <div class="caption">
                        <p>陈天华</p>
                        <p>132票</p>
                            <span class="circle">
      <p>投TA</p>
         <p>一票</p>
   </span>
                    </div>
                    <span class="num">003</span>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="thumbnail">
                    <a href="<?php echo U('Index/player?id='.$act[id]);?>"><img src="/new_vote/Public/images/p_1.jpg"></a>
                    <div class="caption">
                        <p>陈天华</p>
                        <p>132票</p>
                            <span class="circle">
           <p>投TA</p>
         <p>一票</p>
   </span>
                    </div>
                    <span class="num">004</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer text-center">
    <div class="row">
        <div class="col-xs-3 list-item">
            <a href="<?php echo U('Index/index?id='.$act[id]);?>" class="color">
                    <span class="iconfont icon-home ">
         </span>
                <p>首页</p>
            </a>
        </div>
        <div class="col-xs-3  list-item">
            <a href="<?php echo U('Index/apply?id='.$act[id]);?>">
                    <span class="iconfont icon-apply">

         </span>
                <p>我要报名</p>
            </a>
        </div>
        <div class="col-xs-3  list-item">
            <a href="<?php echo U('Index/line?id='.$act[id]);?>">
                      <span class="iconfont icon-line">

         </span>
                <p>牌行榜</p>
            </a>
        </div>
        <div class="col-xs-3  list-item">
            <a href="<?php echo U('Index/explain?id='.$act[id]);?>">
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