<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class ChangeDefaultFontCommand extends Command
{
    protected static CommandString $cmdString = CommandString::CHANGE_FONT;

    protected static bool $needsArgs = true;

    protected static array $neededArgs = [false, false, false];
}
