<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Enums\CommandString;

class Barcode128Command extends Command
{
    protected static CommandString $cmdString = CommandString::BARCODE128;

    protected static array $neededArgs = [false, false, false, false, false, false];
}
