<?php

namespace SmartDato\Zpl\Commands;

class FieldOffsetCommand extends Command
{
    protected static CommandString $cmdString = CommandString::FIELD_OFFSET;
    protected static bool $needsArgs = true;
    protected static array $neededArgs = [false, false];
}