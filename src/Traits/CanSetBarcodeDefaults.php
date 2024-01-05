<?php

namespace SmartDato\Zpl\Traits;

use SmartDato\Zpl\Commands\BarcodeDefaultsCommand;

trait CanSetBarcodeDefaults
{
    protected ?int $moduleWidthDefault = null;
    protected ?float $wideNarrowWidthRatioDefault = null;
    protected ?int $barcodeHeightDefault = null;

    public function withBarcodeDefaults(?int $moduleWidth = null, ?float $wideNarrowWidthRatio = null, ?int $barcodeHeight = null): self
    {
        $this->moduleWidthDefault = $moduleWidth;
        $this->wideNarrowWidthRatioDefault = $wideNarrowWidthRatio;
        $this->barcodeHeightDefault = $barcodeHeight;
        return $this;
    }

    protected function renderBarcodeDefaults(): string
    {
        return BarcodeDefaultsCommand::render($this->moduleWidthDefault, $this->wideNarrowWidthRatioDefault, $this->barcodeHeightDefault);
    }
}