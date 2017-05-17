<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/12
 * Time: 17:42
 */

namespace Home\Model\Picture;


use Think\Model;

class PictureModel extends Model
{
    public function addPicture($path)
    {
        return $this->data(array('path' => $path))->add();
    }

    public function getPicture($id)
    {
        return $this->field('path')->find($id);
    }
}