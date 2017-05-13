<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/12
 * Time: 14:55
 */

namespace Home\Response;


use Common\Common\Response;

class UploadResponse extends Response
{
    private $data;

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }
}