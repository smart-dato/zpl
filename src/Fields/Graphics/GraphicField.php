<?php

namespace SmartDato\Zpl\Fields\Graphics;

use SmartDato\Zpl\Commands\GraphicFieldCommand;
use SmartDato\Zpl\Enums\CompressionType;
use SmartDato\Zpl\Exceptions\InvalidCommandArgumentsException;
use SmartDato\Zpl\Fields\Field;

class GraphicField extends Field
{
    public function __construct(
        private CompressionType $compression,
        private int $binaryByteCount,
        private int $graphicFieldCount,
        private int $bytesPerRow,
        private string $data
    ) {
        //
    }

    /**
     * @throws InvalidCommandArgumentsException
     */
    public function render(): string
    {
        return $this->renderFieldOrigin()
            .GraphicFieldCommand::render(
                $this->compression,
                $this->binaryByteCount,
                $this->graphicFieldCount,
                $this->bytesPerRow,
                $this->data
            )
            .$this->renderFieldSeparator();
    }
}
