<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class LabelFormatStartCommand extends Command
{
    protected static CommandString $cmdString = CommandString::LABEL_FORMAT_START;

    protected static array $neededArgs = [];
}
