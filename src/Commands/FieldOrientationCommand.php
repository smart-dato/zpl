<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class FieldOrientationCommand extends Command
{
    protected static CommandString $cmdString = CommandString::FIELD_ORIENTATION;

    protected static bool $needsArgs = true;

    protected static array $neededArgs = [false, false];
}
