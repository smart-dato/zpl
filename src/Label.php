<?php

namespace SmartDato\Zpl;

use SmartDato\Zpl\Commands\LabelFormatEndCommand;
use SmartDato\Zpl\Commands\LabelFormatStartCommand;
use SmartDato\Zpl\Fields\Barcodes\Barcode128;
use SmartDato\Zpl\Fields\Graphics\CompressionType;
use SmartDato\Zpl\Fields\Graphics\GraphicField;
use SmartDato\Zpl\Fields\JustificationType;
use SmartDato\Zpl\Fields\OrientationType;
use SmartDato\Zpl\Fields\Text;
use SmartDato\Zpl\Interfaces\Renderable;
use SmartDato\Zpl\Statements\ChangeDefaultFontStatement;
use SmartDato\Zpl\Statements\FieldOrientationStatement;

class Label
{
    private array $renderables = [];

    public function setDefaultFont(?string $font = null, ?int $heigth = null, ?int $width = null): self
    {
        $this->addRenderable(new ChangeDefaultFontStatement($font, $heigth, $width));
        return $this;
    }

    public function setDefaultOrientation(OrientationType $orientation, ?JustificationType $justification = null): self
    {
        $this->addRenderable(new FieldOrientationStatement($orientation, $justification));
        return $this;
    }

    public function addText(string $text): Text
    {
        $textField = new Text($text);
        $this->addRenderable($textField);
        return $textField;
    }

    public function addBarcode128(string $data, ?bool $ucc = null, ?string $mode = null): Barcode128
    {
        $barcode128 = new Barcode128($data, $ucc, $mode);
        $this->addRenderable($barcode128);
        return $barcode128;
    }

    public function addGraphic(CompressionType $compression, $binaryByteCount, int $graphicFieldCount, int $bytesPerRow, string $data): GraphicField
    {
        $graphic = new GraphicField($compression, $binaryByteCount, $graphicFieldCount, $bytesPerRow, $data);
        $this->addRenderable($graphic);
        return $graphic;
    }

    private function addRenderable(Renderable $renderable)
    {
        $this->renderables[] = $renderable;
    }

    private function renderLabelFormatStart(): string
    {
        return LabelFormatStartCommand::render();
    }

    private function renderLabelFormatEnd(): string
    {
        return LabelFormatEndCommand::render();
    }

    public function render(bool $insertNewLines = false): string
    {
        $separator = ($insertNewLines ? PHP_EOL : '');

        $result = $this->renderLabelFormatStart();
        foreach ($this->renderables as $renderable) {
            $result .= $separator . $renderable->render();
        }
        $result .= $separator . $this->renderLabelFormatEnd();

        return $result;
    }
}