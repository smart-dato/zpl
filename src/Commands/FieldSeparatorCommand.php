<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class FieldSeparatorCommand extends Command
{
    protected static CommandString $cmdString = CommandString::FIELD_SEPARATOR;

    protected static array $neededArgs = [];
}
