<?php

namespace SmartDato\Zpl\Exceptions;

class InvalidHexIndicatorException extends Exception
{
    public function __construct()
    {
        parent::__construct('The indicator must be a single byte character or null.');
    }
}
