<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/15
 * Time: 15:09
 */

namespace Home\Response;


use Common\Common\Response;

class ActListResponse extends Response
{
    private $is_null = false;
    private $data;

    public function setItIsNull()
    {
        $this->is_null = true;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getItIsNull()
    {
        return $this->is_null;
    }

    public function getData()
    {
        return $this->data;
    }
}