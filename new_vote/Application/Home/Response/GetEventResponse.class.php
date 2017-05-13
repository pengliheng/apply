<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/10
 * Time: 14:46
 */

namespace Home\Response;


use Common\Common\Response;

class GetEventResponse extends Response
{
    private $is_null = false;
    private $data;

    public function setItIsNull()
    {
        $this->is_null = true;
    }

    public function getItIsNull()
    {
        return $this->is_null;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }
}