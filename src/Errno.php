<?php
namespace PG\exception;

class Errno
{
    const USER_LOGIN_REQUIRED           = 420;      // 需要登录
    const PARAMETER_VALIDATION_FAILED   = 401;      // 缺少必要参数
    const PRIVILEGE_NOT_PASS            = 403;      //
    const INTERNAL_SERVER_ERROR         = 500;      // 内部错误
    const FATAL                         = 500;      // 服务器异常
    const SIG_ERROR                     = 501;      // 签名错误
}
