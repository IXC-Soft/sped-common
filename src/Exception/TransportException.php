<?php

namespace NFePHP\Common\Exception;

class TransportException extends SoapException
{
    public static function transportFault($message, $code)
    {
        return new static("Erro de comunicação "
            . "via soap, $message", $code);
    }
}
