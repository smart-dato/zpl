<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class ChangeInternationalEncodingCommand extends Command
{
    protected static CommandString $cmdString = CommandString::CHANGE_INTERNATIONAL_ENCODING;

    protected static bool $needsArgs = true;

    protected static array $neededArgs = [true]; // no support for character remapping for now
}
