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
        $info = $upload->upload();
        if ($info) {
            $picture = '/Uploads/' . $info['photo']['savepath'] . $info['photo']['savename'];
        } else {
            $picture = '';
        }
        $error = $upload->getError();
        $data = array(
            'picture' => $picture,
            'error' => $error
        );
        return $data;
    }
}