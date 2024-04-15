<?php

namespace SmartDato\Zpl\Statements;

use SmartDato\Zpl\Commands\ChangeInternationalEncodingCommand;
use SmartDato\Zpl\Enums\InternationalEncoding;

class ChangeInternationalEncoding extends Statement
{
    public function __construct(
        private InternationalEncoding $encoding
    ) {
        //
    }

    public function render(): string
    {
        return ChangeInternationalEncodingCommand::render($this->encoding);
    }
}
