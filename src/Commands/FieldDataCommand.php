<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class FieldDataCommand extends Command
{
    protected static CommandString $cmdString = CommandString::FIELD_DATA;

    protected static bool $needsArgs = true;

    protected static array $neededArgs = [true];

    protected static bool $hasData = true;
}
