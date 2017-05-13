<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/10
 * Time: 11:59
 */

namespace Home\Exception;


use Common\Common\CommonException;

class HomeException extends CommonException
{
    protected $error = array(
        '10000' => '未知错误',
        '10001' => '缺少必要参数',
        '10002' => '参数值不符合规定的数据类型',
        '10003' => '参数值不在规定的数据范围内',
        '10011' => '系统数据发生错误',
    );
}