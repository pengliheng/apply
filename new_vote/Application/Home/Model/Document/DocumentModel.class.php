<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/10
 * Time: 10:39
 */

namespace Home\Model\Document;


use Think\Model;

class DocumentModel extends Model
{
    public function getEvent($id)
    {
        return $this->field(true)->where(array('id' => $id))->find();
    }
}