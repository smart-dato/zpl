<?php

namespace SmartDato\Zpl\Fields\Graphics;

use SmartDato\Zpl\Commands\GraphicFieldCommand;
use SmartDato\Zpl\Fields\Field;
use SmartDato\Zpl\Fields\Graphics\CompressionType;

class GraphicField extends Field
{
    public function __construct(private CompressionType $compression, private $binaryByteCount, private int $graphicFieldCount, private int $bytesPerRow, string $data)
    {
        $this->data = $data;
    }

    public function render(): string
    {
        return $this->renderFieldOffset()
            . GraphicFieldCommand::render($this->compression, $this->binaryByteCount, $this->graphicFieldCount, $this->bytesPerRow, $this->data)
            . $this->renderFieldSeparator();
    }
}