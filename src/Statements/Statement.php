<?php

namespace SmartDato\Zpl\Statements;

use SmartDato\Zpl\Interfaces\Renderable;

abstract class Statement implements Renderable
{
    abstract public function render(): string;
}