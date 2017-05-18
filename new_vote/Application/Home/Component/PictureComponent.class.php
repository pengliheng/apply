<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/12
 * Time: 17:40
 */

namespace Home\Component;


use Common\Common\Component;
use Home\Model\Picture\PictureModel;

class PictureComponent extends Component
{

    private $model;

    public function __construct()
    {
        $this->model = new PictureModel();
    }

    public function addPicture($path)
    {
        return $this->model->addPicture($path);
    }

    public function getPicture($id)
    {
        return $this->model->getPicture($id);
    }
}