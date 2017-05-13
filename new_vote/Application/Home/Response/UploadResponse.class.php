<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2017/5/12
 * Time: 14:55
 */

namespace Home\Response;


use Common\Common\Response;

class UploadResponse extends Response
{
    /*private $picture;
    private $error;

    public function setPicture($picture)
    {
        $this->picture = $picture;
    }

    public function setError($error)
    {
        $this->error = $error;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function getError()
    {
        return $this->error;
    }*/
    private $data;
    public function setData($data){
        $this->data=$data;
    }
    public function getData(){
        return $this->data;
    }
}