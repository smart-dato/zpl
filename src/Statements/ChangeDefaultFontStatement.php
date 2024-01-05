<?php

namespace SmartDato\Zpl\Statements;
use SmartDato\Zpl\Commands\ChangeDefaultFontCommand;

class ChangeDefaultFontStatement extends Statement
{
    public function __construct(private ?string $font = null, private ?int $heigth = null, private ?int $width = null)
    {
    }

	public function render(): string
    {
        return ChangeDefaultFontCommand::render($this->font, $this->heigth, $this->width);
	}
}