<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>投票</title>
</head>
<body>
<?php if(is_array($act)): $i = 0; $__LIST__ = $act;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$act): $mod = ($i % 2 );++$i; echo ($act["name"]); ?><br><a href="<?php echo U('Index/index?id='.$act[id]);?>"><img src="/new_vote<?php echo ($act["path"]); ?>" style="width:300px"></a><br><br><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>