<?php

namespace SmartDato\Zpl\Fields\Barcodes;

use SmartDato\Zpl\Commands\Barcode128Command;
use SmartDato\Zpl\Exceptions\InvalidCommandArgumentsException;
use SmartDato\Zpl\Traits\CanSetBarcodeDefaults;
use SmartDato\Zpl\Traits\CanUseFont;

class Barcode128 extends Barcode
{
    use CanSetBarcodeDefaults, CanUseFont;

    private ?bool $printInterpretationText = null;

    private ?bool $printInterpretationTextAbove = null;

    public function __construct(
        string $data,
        private ?bool $ucc = null,
        private ?string $mode = null
    ) {
        parent::__construct($data);
    }

    public function interpretationText(bool $show, ?bool $above = null): self
    {
        $this->printInterpretationText = $show;
        $this->printInterpretationTextAbove = $above;

        return $this;
    }

    /**
     * @throws InvalidCommandArgumentsException
     */
    public function render(): string
    {
        return $this->renderFieldOrigin()
            .$this->renderBarcodeDefaults()
            .$this->renderFieldFont()
            .Barcode128Command::render(
                $this->orientation,
                $this->barcodeHeight,
                $this->printInterpretationText,
                $this->printInterpretationTextAbove,
                $this->ucc,
                $this->mode
            )
            .$this->renderFieldData()
            .$this->renderFieldSeparator();
    }
}
