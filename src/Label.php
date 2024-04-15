<?php

namespace SmartDato\Zpl;

use SmartDato\Zpl\Commands\LabelFormatEndCommand;
use SmartDato\Zpl\Commands\LabelFormatStartCommand;
use SmartDato\Zpl\Enums\CompressionType;
use SmartDato\Zpl\Enums\InternationalEncoding;
use SmartDato\Zpl\Enums\JustificationType;
use SmartDato\Zpl\Enums\LineColor;
use SmartDato\Zpl\Enums\OrientationType;
use SmartDato\Zpl\Exceptions\InvalidCommandArgumentsException;
use SmartDato\Zpl\Fields\Barcodes\Barcode128;
use SmartDato\Zpl\Fields\Graphics\GraphicBox;
use SmartDato\Zpl\Fields\Graphics\GraphicField;
use SmartDato\Zpl\Fields\Text;
use SmartDato\Zpl\Interfaces\Renderable;
use SmartDato\Zpl\Statements\ChangeDefaultFontStatement;
use SmartDato\Zpl\Statements\ChangeInternationalEncoding;
use SmartDato\Zpl\Statements\FieldOrientationStatement;

class Label
{
    /** @var array<Renderable> */
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

    public function setInternationalEncoding(InternationalEncoding $encoding): self
    {
        $this->addRenderable(new ChangeInternationalEncoding($encoding));

        return $this;
    }

    public function addText(
        string $text,
        bool $enableHexEncoding = false,
        ?string $hexIndicator = null
    ): Text {
        $textField = new Text($text);
        $textField->hexEncoding($enableHexEncoding, $hexIndicator);
        $this->addRenderable($textField);

        return $textField;
    }

    public function addBarcode128(string $data, ?bool $ucc = null, ?string $mode = null): Barcode128
    {
        $barcode128 = new Barcode128($data, $ucc, $mode);
        $this->addRenderable($barcode128);

        return $barcode128;
    }

    public function addGraphic(CompressionType $compression, int $binaryByteCount, int $graphicFieldCount, int $bytesPerRow, string $data): GraphicField
    {
        $graphic = new GraphicField($compression, $binaryByteCount, $graphicFieldCount, $bytesPerRow, $data);
        $this->addRenderable($graphic);

        return $graphic;
    }

    public function addBox(?int $width = null, ?int $height = null, ?int $borderThickness = null, ?LineColor $lineColor = null, ?int $cornerRounding = null): GraphicBox
    {
        $box = new GraphicBox($width, $height, $borderThickness, $lineColor, $cornerRounding);
        $this->addRenderable($box);

        return $box;
    }

    public function addLineOrthogonal(?int $length = null, ?int $thickness = null, ?LineColor $lineColor = null, bool $rotated = false): GraphicBox
    {
        $width = $rotated ? $thickness : $length;
        $height = $rotated ? $length : $thickness;

        $line = new GraphicBox($width, $height, $thickness, $lineColor, null);
        $this->addRenderable($line);

        return $line;
    }

    private function addRenderable(Renderable $renderable): void
    {
        $this->renderables[] = $renderable;
    }

    /**
     * @throws InvalidCommandArgumentsException
     */
    private function renderLabelFormatStart(): string
    {
        return LabelFormatStartCommand::render();
    }

    /**
     * @throws InvalidCommandArgumentsException
     */
    private function renderLabelFormatEnd(): string
    {
        return LabelFormatEndCommand::render();
    }

    /**
     * @throws InvalidCommandArgumentsException
     */
    public function render(bool $insertNewLines = false): string
    {
        $separator = ($insertNewLines ? PHP_EOL : '');

        $result = $this->renderLabelFormatStart();
        foreach ($this->renderables as $renderable) {
            $result .= $separator.$renderable->render();
        }
        $result .= $separator.$this->renderLabelFormatEnd();

        return $result;
    }
}
