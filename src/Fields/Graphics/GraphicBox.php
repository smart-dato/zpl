<?php

namespace SmartDato\Zpl\Fields\Graphics;

use SmartDato\Zpl\Commands\GraphicBoxCommand;
use SmartDato\Zpl\Enums\LineColor;
use SmartDato\Zpl\Exceptions\InvalidCommandArgumentsException;
use SmartDato\Zpl\Fields\Field;

class GraphicBox extends Field
{
    public function __construct(
        private ?int $width,
        private ?int $height,
        private ?int $borderThickness,
        private ?LineColor $lineColor,
        private ?int $cornerRounding,
    ) {
        //
    }

    /**
     * @throws InvalidCommandArgumentsException
     */
    public function render(): string
    {
        return $this->renderFieldOrigin()
            .GraphicBoxCommand::render(
                $this->width,
                $this->height,
                $this->borderThickness,
                $this->lineColor,
                $this->cornerRounding
            )
            .$this->renderFieldSeparator();
    }
}
