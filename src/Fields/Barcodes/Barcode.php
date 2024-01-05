<?php

namespace SmartDato\Zpl\Fields\Barcodes;

use SmartDato\Zpl\Fields\Field;

abstract class Barcode extends Field
{
    protected ?int $moduleWidth = null;
    protected ?float $wideNarrowWidthRatio = null;
    protected ?int $barcodeHeight = null;
}
