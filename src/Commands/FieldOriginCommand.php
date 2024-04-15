<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class FieldOriginCommand extends Command
{
    protected static CommandString $cmdString = CommandString::FIELD_ORIGIN;

    protected static bool $needsArgs = true;

    protected static array $neededArgs = [false, false];
}
