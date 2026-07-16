<?php

namespace NFePHP\Common\Exception;

class EmptySoapResponseException extends SoapException
{
    public static function soapFault($message, $code)
    {
        return new static("Erro de comunicação "
            . "via soap, $message", $code);
    }
}
