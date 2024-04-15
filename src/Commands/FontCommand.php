<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class FontCommand extends Command
{
    protected static CommandString $cmdString = CommandString::FONT;

    protected static bool $needsArgs = true;

    protected static array $neededArgs = [false, false, false, false];
}
