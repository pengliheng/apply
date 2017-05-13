<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/12
 * Time: 14:50
 */

namespace Home\Component;


use Common\Common\Component;
use Think\Upload;

class UploadComponent extends Component
{
    public function upload()
    {
        $upload = new Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'jpeg', 'gif', 'png');
        $picture = $upload->upload();
        if ($picture) {
            $path = '/Uploads/' . $picture['photo']['savepath'] . $picture['photo']['savename'];
        } else {
            $path = '';
        }
        $info = $upload->getError();
        $data = array(
            'path' => $path,
            'info' => $info
        );
        return $data;
    }
}