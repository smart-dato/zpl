<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class GraphicBoxCommand extends Command
{
    protected static CommandString $cmdString = CommandString::GRAPHIC_BOX;

    protected static bool $needsArgs = false;

    protected static array $neededArgs = [false, false, false, false, false];
}
