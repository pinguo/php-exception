<?php
/**
 * @author camera360_server@camera360.com
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\Exception;

/**
 * Class Exception
 */
class InvalidConfigException extends \Exception
{
    public function __construct($message = null, $code = 415, $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
