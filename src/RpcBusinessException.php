<?php
/**
 * Rpc业务异常
 *
 * @author camera360_server@camera360.com
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\Exception;

/**
 * Class RpcBusinessException
 * @package PG\Exception
 */
class RpcBusinessException extends \Exception
{

    /**
     * RpcBusinessException constructor.
     *
     * @param string  $message 业务异常信息.
     * @param integer $code    业务异常状态码.
     */
    public function __construct($message, $code = 0)
    {
        parent::__construct($message, $code);
    }

    /**
     * @param integer $type 返回值格式(1json格式, 2数组).
     *
     * @return array|string
     */
    public function getErrorInfo($type = 2)
    {
        $err = [
            'code' => $this->getCode(),
            'msg'  => $this->getMessage(),
            'file'    => $this->getFile(),
            'line'   => $this->getLine()
        ];
        if ($type == 1) {
            return json_encode($err);
        }
        return $err;
    }

}
