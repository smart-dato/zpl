<?php

namespace SmartDato\Zpl\Commands;

use SmartDato\Zpl\Exceptions\InvalidCommandArgumentsException;

abstract class Command
{
    private const ARGUMENT_SEPARATOR = ',';

    protected static CommandString $cmdString;
    protected static bool $needsArgs = false; // if needsArgs is false the command always has effects, even without arguments
    protected static array $neededArgs; // denotes the amount of arguments and which ones are not optional

    public static function str(): string
    {
        return static::$cmdString->value;
    }

    public static function isArgNeeded(int $index): bool
    {
        return $index >= 0 && $index < count(static::$neededArgs) && static::$neededArgs[$index];
    }

    public static function render(...$arguments): string
    {
        $setArgsCounter = 0;
        $cmdStr = static::str();
        for ($i = 0; $i !== count($arguments); ++$i) {
            $currentArg = $arguments[$i];

            if (! is_null($currentArg)) {
                ++$setArgsCounter;
            } elseif (static::isArgNeeded($i)) {
                throw new InvalidCommandArgumentsException(get_called_class() . ' arg ' . $i);
            }

            if($currentArg === false) {
                $currentArg = 'N';
            } elseif ($currentArg === true) {
                $currentArg = 'Y';
            } elseif ($currentArg instanceof \BackedEnum) {
                $currentArg = $currentArg->value;
            }

            $cmdStr .= $currentArg . self::ARGUMENT_SEPARATOR;
        }

        // if the command can have arguments but currently has none it won't be rendered
        if (static::$needsArgs && $setArgsCounter === 0) {
            return '';
        }

        return rtrim($cmdStr, self::ARGUMENT_SEPARATOR);
    }
}