<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/10
 * Time: 9:55
 */

namespace Home\Controller;

use Home\Exception\HomeException;
use Home\Request\Act\GetActRequest;
use Home\Request\Document\GetEventRequest;
use Home\Service\ActListService;
use Home\Service\ActService;
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

    public function actList()
    {
        $service = new ActListService();
        $response = $service->run();
        if ($response->getItIsNull() == true) {
            $data = array();
        } else {
            $data = $response->getData();
        }
        //dump($data);
        $this->assign('act', $data);
        $this->display();
    }


    public function index()
    {
        $id = I('id', null);

        $request = new GetActRequest();
        $request->setId($id);
        $service = new ActService();
        $response = $service->run($request);
        if ($response->getItIsNull() == true) {
            $data = array();
        } else {
            $data = $response->getData();
        }
        //dump($data);
        $this->assign('act', $data);
        $this->display();
    }

    public function apply()
    {
        $id = I('id', null);

        $request = new GetActRequest();
        $request->setId($id);
        $service = new ActService();
        $response = $service->run($request);
        if ($response->getItIsNull() == true) {
            $data = array();
        } else {
            $data = $response->getData();
        }
        //dump($data);
        $this->assign('act', $data);

        $this->display();
    }

    public function line()
    {
        $id = I('id', null);

        $request = new GetActRequest();
        $request->setId($id);
        $service = new ActService();
        $response = $service->run($request);
        if ($response->getItIsNull() == true) {
            $data = array();
        } else {
            $data = $response->getData();
        }
        //dump($data);
        $this->assign('act', $data);

        $this->display();
    }

    public function explain()
    {
        $id = I('id', null);

        $request = new GetActRequest();
        $request->setId($id);
        $service = new ActService();
        $response = $service->run($request);
        if ($response->getItIsNull() == true) {
            $data = array();
        } else {
            $data = $response->getData();
        }
        //dump($data);
        $this->assign('act', $data);

        $this->display();
    }

    public function player()
    {
        $id = I('id', null);

        $request = new GetActRequest();
        $request->setId($id);
        $service = new ActService();
        $response = $service->run($request);
        if ($response->getItIsNull() == true) {
            $data = array();
        } else {
            $data = $response->getData();
        }
        //dump($data);
        $this->assign('act', $data);

        $this->display();
    }

    public function upload_test()
    {
        dump(C('COOKIE_EXPIRE'));

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

    }

    public function submitMsg(){
        dump(I('get.name'));
        dump(I('get.phone'));
        dump(I('get.picture_id'));
        dump(I('get.introduce'));
    }
}