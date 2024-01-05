<?php

namespace SmartDato\Zpl\Commands;

class Barcode128Command extends Command
{
    protected static CommandString $cmdString = CommandString::BARCODE128;
    protected static array $neededArgs = [false, false, false, false, false, false];
}