<?php

namespace SmartDato\Zpl\Fields;

use SmartDato\Zpl\Commands\FieldDataCommand;
use SmartDato\Zpl\Commands\FieldOffsetCommand;
use SmartDato\Zpl\Commands\FieldSeparatorCommand;
use SmartDato\Zpl\Interfaces\Renderable;

abstract class Field implements Renderable
{
    protected int $x = 0;
    protected int $y = 0;
    protected ?string $orientation = null;

    protected ?string $data = null;

    public function x(int $x): self
    {
        $this->x = $x;
        return $this;
    }

    public function y(int $y): self
    {
        $this->y = $y;
        return $this;
    }

    public function offset(int $x, ?int $y)
    {
        $this->x = $x;
        if (isset($y)) {
            $this->y = $y;
        }
        return $this;
    }

    public function at(int $x, ?int $y)
    {
        return $this->offset($x, $y);
    }

    public function orientation(?string $orientation): string|self
    {
        if(isset($orientation)) {
            $this->orientation = $orientation;
            return $this;
        }
        return $this->orientation;
    }

    public function data(?string $data): string|self
    {
        if(isset($data)) {
            $this->data = $data;
            return $this;
        }

        return $this->data;
    }

    abstract public function render(): string;

    protected function renderFieldOffset(): string
    {
        return FieldOffsetCommand::render($this->x, $this->y);
    }

    protected function renderFieldData(): string
    {
        return FieldDataCommand::render($this->data);
    }

    protected function renderFieldSeparator(): string
    {
        return FieldSeparatorCommand::render();
    }
}
