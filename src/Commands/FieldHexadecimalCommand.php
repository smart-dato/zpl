<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class FieldHexadecimalCommand extends Command
{
    protected static CommandString $cmdString = CommandString::FIELD_HEXADECIMAL;

    protected static bool $needsArgs = false;

    protected static array $neededArgs = [false];
}
