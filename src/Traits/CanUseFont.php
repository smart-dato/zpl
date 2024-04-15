<?php

namespace SmartDato\Zpl\Traits;

use SmartDato\Zpl\Commands\FontCommand;
use SmartDato\Zpl\Exceptions\InvalidCommandArgumentsException;

trait CanUseFont
{
    protected ?string $font = null;

    public function font(string $font): self
    {
        $this->font = $font;

        return $this;
    }

    /**
     * @throws InvalidCommandArgumentsException
     */
    protected function renderFieldFont(): string
    {
        return FontCommand::render($this->font);
    }
}
