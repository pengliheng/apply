<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/10
 * Time: 9:55
 */

namespace Home\Controller;

use Home\Request\Document\GetEventRequest;
use Home\Service\GetEventService;
use Home\Service\UploadService;
use Think\Upload;


class IndexController extends HomeController
{
    /* public function getEvent()
     {
         $request = new GetEventRequest();
         $id = I('get.id', null);
         $request->setId($id);
         $service = new GetEventService();

         $response = $service->run($request);
         if ($response->getItIsNull() == true) {
             $data = array();
         } else {
             $data = $response->getData();
         }
         dump($data);
     }*/

    public function index()
    {
        $this->display();
    }

    public function apply()
    {
        $this->display();
    }

    public function line()
    {
        $this->display();
    }

    public function explain()
    {
        $this->display();
    }

    public function player()
    {
        $this->display();
    }

    public function upload_test()
    {
        $this->display();
    }

    public function upload()
    {
        $service = new UploadService();
        $response = $service->run();
        $data = $response->getData();
        $this->ajaxReturn($data);
    }

    public function test()
    {
        echo I('get.id');
    }
}