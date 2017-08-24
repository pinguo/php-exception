<?php
/**
 * 无权限操作
 *
 * @author camera360_server@camera360.com
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\Exception;

class PrivilegeException extends \ErrorException
{
    public function __construct($message, $code = Errno::PRIVILEGE_NOT_PASS)
    {
        parent::__construct($message, $code);
    }
}
