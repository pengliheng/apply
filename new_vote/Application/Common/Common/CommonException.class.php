<?php
namespace Common\Common;

class CommonException extends \Exception
{

    protected $error = array(
        '10000' => '未知错误',
        '10001' => '缺少必要参数',
        '10002' => '参数值不符合规定的数据类型',
        '10003' => '参数值不在规定的数据范围内',
        '10011' => '系统数据发生错误',
    );

    function __construct($message, $code = NULL, \Exception $previous = NULL)
    {
        if (false == is_null($this->error)) {
            if (is_null($code)) {
                $data = $this->parseErrorText($message);
                if (false !== $data) {
                    $code = $message;
                    $message = $data;
                }
            }
        }
        parent::__construct($message, $code, $previous);
    }

    private function parseErrorText($code)
    {
        if (array_key_exists($code, $this->error)) {
            return $this->error[$code];
        }
        return false;
    }

}

?>