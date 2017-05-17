<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/12
 * Time: 14:49
 */

namespace Home\Service;

use Common\Common\Service;
use Home\Component\PictureComponent;
use Home\Component\UploadComponent;
use Home\Exception\HomeException;
use Home\Response\UploadResponse;

class UploadService implements Service
{
    public function run()
    {
        $component = new UploadComponent();
        $response = new UploadResponse();

        try {
            $data = $component->upload();
            if (!$data['info']) {
                $component = new PictureComponent();
                $data['picId'] = $component->addPicture($data['path']);
                $data['status'] = 'success';
            } else {
                $data['picId'] = '';
                $data['status'] = 'fail';
            }
            $response->setData($data);
        } catch (HomeException $e) {
            throw new HomeException($e->getMessage(), $e->getCode());
        }
        return $response;
    }
}