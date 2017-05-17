<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/15
 * Time: 17:15
 */

namespace Home\Request\Act;


use Common\Common\Request;

class GetActRequest extends Request
{
    private $id;

    public function issetId()
    {
        return $this->is_set($this->id);
    }

    public function verifyId()
    {
        return is_numeric($this->id);
    }

    public function IsInRange()
    {
        return $this->id > 0;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}