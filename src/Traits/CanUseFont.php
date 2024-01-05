<?php

namespace SmartDato\Zpl\Traits;

use SmartDato\Zpl\Commands\FontCommand;

trait CanUseFont
{
    protected ?string $font = null;

    public function font(string $font): self
    {
        $this->font = $font;
        return $this;
    }

    protected function renderFieldFont(): string
    {
        return FontCommand::render($this->font);
    }
}