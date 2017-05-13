<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/10
 * Time: 10:31
 */

namespace Home\Service;


use Common\Common\Service;
use Home\Component\DocumentComponent;
use Home\Exception\HomeException;
use Home\Request\Document\GetEventRequest;
use Home\Response\GetEventResponse;

class GetEventService implements Service
{
    public function run(GetEventRequest $request = null)
    {
        if ($request->issetId() == false)
            throw new HomeException(10001);
        if ($request->verifyId() == false)
            throw new HomeException(10002);
        if ($request->IsInRange() == false)
            throw new HomeException(10003);

        $id = $request->getId();

        $response = new GetEventResponse();
        $component = new DocumentComponent();
        try {
            $data = $component->getEvent($id);
            if (is_null($data) == true) {
                $response->setItIsNull();
            } else {
                $response->setData($data);
            }
        } catch (HomeException $e) {
            throw new HomeException($e->getMessage(), $e->getCode());
        }
        return $response;
    }
}