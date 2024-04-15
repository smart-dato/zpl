<?php

namespace SmartDato\Zpl\Helpers;

use SmartDato\Zpl\Exceptions\InvalidHexIndicatorException;

class StringHelper
{
    public static function multibyteToHex(
        string $string,
        string $hexIndicator = '_',
        ?string $encoding = null
    ): string {
        if (strlen($hexIndicator) !== 1) {
            throw new InvalidHexIndicatorException();
        }

        $result = '';
        $length = mb_strlen($string, $encoding);

        for ($i = 0; $i < $length; $i++) {
            $char = mb_substr($string, $i, 1, $encoding);
            if (strlen($char) > 1 // encode all chars that need more than 1 byte
                || $char === $hexIndicator // to print the separator it has to be encoded
            ) {
                $hex = strtoupper(bin2hex($char));
                $result .= $hexIndicator.chunk_split($hex, 2, $hexIndicator);
                $result = rtrim($result, $hexIndicator);
            } else {
                $result .= $char;
            }
        }

        return $result;
    }
}
