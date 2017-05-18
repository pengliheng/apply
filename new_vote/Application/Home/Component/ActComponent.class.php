<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/15
 * Time: 15:05
 */

namespace Home\Component;


use Common\Common\Component;
use Home\Model\Act\ActModel;

class ActComponent extends Component
{
    private $model;

    public function __construct()
    {
        $this->model = new ActModel();
    }

    public function ActList()
    {
        return $this->model->actList();
    }

    public function getAct($id)
    {
        return $this->model->getAct($id);
    }

}