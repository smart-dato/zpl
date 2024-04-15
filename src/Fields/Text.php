<?php

namespace SmartDato\Zpl\Fields;

use SmartDato\Zpl\Exceptions\InvalidCommandArgumentsException;
use SmartDato\Zpl\Traits\CanUseFont;
use SmartDato\Zpl\Traits\HasFieldData;

class Text extends Field
{
    use CanUseFont, HasFieldData;

    public function __construct(string $text)
    {
        $this->fieldData($text);
    }

    /**
     * @throws InvalidCommandArgumentsException
     */
    public function render(): string
    {
        return $this->renderFieldOrigin()
            .$this->renderFieldFont()
            .$this->renderFieldData()
            .$this->renderFieldSeparator();
    }
}
