<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/15
 * Time: 15:03
 */

namespace Home\Service;


use Common\Common\Service;
use Home\Component\ActComponent;
use Home\Component\PictureComponent;
use Home\Response\ActListResponse;

class ActListService implements Service
{
    public function run()
    {
        $response = new ActListResponse();
        $component = new ActComponent();
        $data = $component->ActList();
        if (is_null($data) == true) {
            $response->setItIsNull();
        } else {
            for ($i = 0; $i < count($data); $i++) {
                $component = new PictureComponent();
                $picture_id = $data[$i]['picture_id'];
                $picture_id = strtok($picture_id, ',');
                $pic = $component->getPicture($picture_id);
                $data[$i]['path'] = $pic['path'];
            }
            $response->setData($data);
        }
        return $response;
    }
}