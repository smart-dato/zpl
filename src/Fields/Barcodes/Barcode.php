<?php

namespace SmartDato\Zpl\Fields\Barcodes;

use SmartDato\Zpl\Fields\Field;
use SmartDato\Zpl\Traits\HasFieldData;

abstract class Barcode extends Field
{
    use HasFieldData;

    protected ?int $moduleWidth = null;

    protected ?float $wideNarrowWidthRatio = null;

    protected ?int $barcodeHeight = null;

    protected function __construct(string $data)
    {
        $this->fieldData($data);
    }
}
