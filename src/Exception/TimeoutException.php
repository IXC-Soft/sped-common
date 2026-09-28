<?php

namespace NFePHP\Common\Exception;

class TimeoutException extends SoapException
{
    public static function timeoutFault($message, $code)
    {
        return new static("Erro de comunicação "
            . "via soap, $message", $code);
    }
}
