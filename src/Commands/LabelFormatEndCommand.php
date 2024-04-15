<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class LabelFormatEndCommand extends Command
{
    protected static CommandString $cmdString = CommandString::LABEL_FORMAT_END;

    protected static array $neededArgs = [];
}
