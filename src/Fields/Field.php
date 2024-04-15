<?php

namespace SmartDato\Zpl\Fields;

use SmartDato\Zpl\Commands\FieldOriginCommand;
use SmartDato\Zpl\Commands\FieldSeparatorCommand;
use SmartDato\Zpl\Exceptions\InvalidCommandArgumentsException;
use SmartDato\Zpl\Interfaces\Renderable;

abstract class Field implements Renderable
{
    protected int $x = 0;

    protected int $y = 0;

    protected ?string $orientation = null;

    public function x(int $x): static
    {
        $this->x = $x;

        return $this;
    }

    public function y(int $y): static
    {
        $this->y = $y;

        return $this;
    }

    public function origin(int $x, ?int $y): static
    {
        $this->x = $x;
        if (isset($y)) {
            $this->y = $y;
        }

        return $this;
    }

    public function at(int $x, ?int $y): static
    {
        return $this->origin($x, $y);
    }

    public function orientation(?string $orientation): string|static
    {
        if (isset($orientation)) {
            $this->orientation = $orientation;

            return $this;
        }

        return $this->orientation;
    }

    abstract public function render(): string;

    /**
     * @throws InvalidCommandArgumentsException
     */
    protected function renderFieldOrigin(): string
    {
        return FieldOriginCommand::render($this->x, $this->y);
    }

    /**
     * @throws InvalidCommandArgumentsException
     */
    protected function renderFieldSeparator(): string
    {
        return FieldSeparatorCommand::render();
    }
}
