<?php

use SmartDato\Zpl\Helpers\StringHelper;

test('multibyteToHex ascii chars remain untouched', function () {
    $indicator = '_';
    // generate all single byte chars
    $singleByteChars = '';
    for ($i = 0; $i < 128; $i++) {
        if ($i === ord($indicator)) {
            continue;
        }
        $singleByteChars .= chr($i);
    }
    expect(StringHelper::multibyteToHex($singleByteChars))->toBe($singleByteChars);
});

test('multibyteToHex indicator is replaced by hex', function (string $indicator, string $expected) {
    expect(StringHelper::multibyteToHex($indicator, $indicator))->toBe($expected);
})->with([
    ['_', '_5F'],
    ['!', '!21'],
    ['H', 'H48'],
    ['$', '$24'],
]);

test('multibyteToHex german special chars', function () {
    $german = 'äöüÄÖÜß';
    $expected = '_C3_A4_C3_B6_C3_BC_C3_84_C3_96_C3_9C_C3_9F';
    expect(StringHelper::multibyteToHex($german))->toBe($expected);
});

test('multibyteToHex italian special chars', function () {
    $italian = 'àèéìòù';
    $expected = '_C3_A0_C3_A8_C3_A9_C3_AC_C3_B2_C3_B9';
    expect(StringHelper::multibyteToHex($italian))->toBe($expected);
});
