<?php
/**
 * @author camera360_server@camera360.com
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */

namespace PG\Exception;

/**
 * BadRequestHttpException represents a "Bad Request" HTTP exception with status code 400.
 *
 * Use this exception to represent a generic client error. In many cases, there
 * may be an HTTP exception that more precisely describes the error. In that
 * case, consider using the more precise exception to provide the user with
 * additional information.
 *
 * @author camera360_server@camera360.com
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */
class BadRequestHttpException extends HttpException
{
    /**
     * Constructor.
     * @param string $message error message
     * @param int $code error code
     * @param \Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($message = null, $code = 0, \Exception $previous = null)
    {
        parent::__construct(400, $message, $code, $previous);
    }
}
