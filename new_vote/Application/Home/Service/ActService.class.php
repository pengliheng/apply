<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/15
 * Time: 17:04
 */

namespace Home\Service;


use Common\Common\Service;
use Home\Component\ActComponent;
use Home\Component\PictureComponent;
use Home\Exception\HomeException;
use Home\Request\Act\GetActRequest;
use Home\Response\GetActResponse;

class ActService implements Service
{
    public function run(GetActRequest $request = null)
    {
        if ($request->issetId() == false)
            throw new HomeException(10001);
        if ($request->verifyId() == false)
            throw new HomeException(10002);
        if ($request->IsInRange() == false)
            throw new HomeException(10003);

        $id = $request->getId();
        $component = new ActComponent();
        $response = new GetActResponse();

        try {
            $data = $component->getAct($id);
            if (is_null($data)) {
                $response->setItIsNull();
            } else {
                $data['apply_start_time'] = date('Y年m月d日', $data['apply_start_time']);
                $data['apply_end_time'] = date('Y年m月d日', $data['apply_end_time']);
                $data['act_start_time'] = date('Y年m月d日', $data['act_start_time']);
                $data['act_end_time'] = date('Y年m月d日', $data['act_end_time']);

                $picture_id = explode(',', $data['picture_id']);
                $component = new PictureComponent();
                for ($i = 0; $i < count($picture_id); $i++) {
                    $picture = $component->getPicture($picture_id[$i]);
                    $pictures[] = $picture['path'];
                }
                $data['pictures'] = $pictures;

                $response->setData($data);
            }
        } catch (HomeException $e) {
            throw new HomeException($e->getMessage(), $e->getCode());
        }
        return $response;
    }
}