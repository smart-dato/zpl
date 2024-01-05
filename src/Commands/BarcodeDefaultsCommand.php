<?php

namespace SmartDato\Zpl\Commands;

class BarcodeDefaultsCommand extends Command
{
    protected static CommandString $cmdString = CommandString::BARCODE_DEFAULTS;
    protected static bool $needsArgs = true;
    protected static array $neededArgs = [false, false, false];
}