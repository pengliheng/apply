<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/10
 * Time: 9:55
 */

namespace Home\Controller;

use Home\Exception\HomeException;
use Home\Request\Document\GetEventRequest;
use Home\Service\GetEventService;
use Home\Service\UploadService;


class IndexController extends HomeController
{
    /*public function getEvent()
    {
        $result = array(
            'request' => array(
                'status' => 'success',
                'errcode' => 0,
                'info' => ''
            ),
            'result' => array(
                'status' => 'success',
                'errcode' => 0,
                'info' => ''
            )
        );
        $request = new GetEventRequest();
        $id = I('get.id', null);
        $request->setId($id);
        $service = new GetEventService();

        try {
            $response = $service->run($request);
        } catch (HomeException $e) {
            $result['request']['status'] = 'fail';
            $result['request']['errcode'] = $e->getCode();
            $result['request']['info'] = $e->getMessage();
            unset($result['result']);
            $this->ajaxReturn($result);
        }

        if ($response->getItIsNull() == true) {
            $data = array();
        } else {
            $data = $response->getData();
        }
        $result['result']['data'] = $data;
        $this->ajaxReturn($result);
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
}