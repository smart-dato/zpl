<?php

namespace SmartDato\Zpl\Statements;

use SmartDato\Zpl\Commands\FieldOrientationCommand;
use SmartDato\Zpl\Enums\JustificationType;
use SmartDato\Zpl\Enums\OrientationType;

class FieldOrientationStatement extends Statement
{
    public function __construct(
        private OrientationType $orientation,
        private ?JustificationType $justification = null
    ) {
        //
    }

    public function render(): string
    {
        return FieldOrientationCommand::render($this->orientation, $this->justification);
    }
}
