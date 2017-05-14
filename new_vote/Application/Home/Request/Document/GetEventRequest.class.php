<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/10
 * Time: 11:50
 */

namespace Home\Request\Document;


use Common\Common\Request;

class GetEventRequest extends Request
{
    private $id;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

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
}