<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if (version_compare(PHP_VERSION, '5.3.0', '<')) die('require PHP > 5.3.0 !');

/*define('BIND_MODULE', 'Admin');
define('BUILD_CONTROLLER_LIST', 'Index,User,Menu');
define('BUILD_MODEL_LIST', 'Index,User');*/

//关闭自动生成目录安全文件
define('BUILD_DIR_SECURE', false);

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
//true开启调试模式
//false关闭调试模式
define('APP_DEBUG', true);

// 定义应用目录
define('APP_PATH', './Application/');

//定义框架目录
define('THINK_PATH', './ThinkPHP/');

//定义运行时目录
define('RUNTIME_PATH', './Runtime/');

//define('UPLOAD_PATH','./Uploads/');

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单