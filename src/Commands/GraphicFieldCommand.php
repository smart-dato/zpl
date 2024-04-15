<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class GraphicFieldCommand extends Command
{
    protected static CommandString $cmdString = CommandString::GRAPHIC_FIELD;

    protected static bool $needsArgs = true;

    protected static array $neededArgs = [true, true, true, true, true];

    protected static bool $hasData = true;
}
