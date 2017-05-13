<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/10
 * Time: 10:42
 */

namespace Home\Component;


use Common\Common\Component;
use Home\Model\Document\DocumentModel;

class DocumentComponent extends Component
{
    private $model;

    public function __construct()
    {
        $this->model = new DocumentModel();
    }

    public function getEvent($id)
    {
        return $this->model->getEvent($id);
    }
}