<?php

namespace SmartDato\Zpl\Fields;

use SmartDato\Zpl\Traits\CanUseFont;

class Text extends Field
{
    use CanUseFont;

    public function __construct(string $text)
    {
        $this->data = $text;
    }

    public function render(): string
    {
        return $this->renderFieldOffset()
            . $this->renderFieldFont()
            . $this->renderFieldData()
            . $this->renderFieldSeparator();
    }
}