<?php

namespace SmartDato\Zpl\Traits;

use SmartDato\Zpl\Commands\FieldDataCommand;
use SmartDato\Zpl\Commands\FieldHexadecimalCommand;
use SmartDato\Zpl\Exceptions\InvalidCommandArgumentsException;
use SmartDato\Zpl\Exceptions\InvalidHexIndicatorException;

trait HasFieldData
{
    protected ?string $fieldData = null;

    protected bool $hexadecimalEnabled = false;

    protected ?string $hexadecimalIndicator = null;

    public function fieldData(string $fieldData): static
    {
        $this->fieldData = $fieldData;

        return $this;
    }

    /**
     * @throws InvalidHexIndicatorException
     */
    public function hexEncoding(bool $enabled = true, ?string $indicator = null): static
    {
        if (! is_null($indicator) && strlen($indicator) !== 1) {
            throw new InvalidHexIndicatorException;
        }

        $this->hexadecimalEnabled = $enabled;
        $this->hexadecimalIndicator = $indicator;

        return $this;
    }

    /**
     * @throws InvalidCommandArgumentsException
     */
    protected function renderFieldData(): string
    {
        $hexCommand = $this->hexadecimalEnabled
            ? FieldHexadecimalCommand::render($this->hexadecimalIndicator)
            : '';

        return $hexCommand
            .FieldDataCommand::render($this->fieldData);
    }
}
