<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/15
 * Time: 15:07
 */

namespace Home\Model\Act;


use Think\Model;

class ActModel extends Model
{
    public function actList()
    {
        return $this->field('id,name,picture_id')->select();
    }

    public function getAct($id)
    {
        return $this->find($id);
    }
}