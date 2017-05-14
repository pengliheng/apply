<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/10
 * Time: 11:44
 */

namespace Common\Common;


class Request
{
    protected function is_set($data)
    {
        return isset($data);
    }
}