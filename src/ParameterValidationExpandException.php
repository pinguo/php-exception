<?php
namespace PG\Exception;

/**
 * 参数验证扩展异常处理类
 *
 * @author camera360_server@camera360.com
 * @copyright Chengdu pinguo Technology Co.,Ltd.
 */
class ParameterValidationExpandException extends \Exception
{
    const ERROR_EMPTY_CODE = 400;
    const ERROR_REQUIREDRE_CODE = 401;
    const ERROR_INTEGER_CODE = 402;
    const ERROR_FLOAT_CODE = 403;
    const ERROR_STRING_CODE = 405;
    const ERROR_MONGODATE_CODE = 406;
    const ERROR_ARRAY_CODE = 407;
    const ERROR_MONGOID_CODE = 408;
    const ERROR_ETAG_CODE = 409;
    const ERROR_MODULENAME_CODE = 410;
}
