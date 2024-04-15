<?php

namespace SmartDato\Zpl\Tests;

use SmartDato\Zpl\Fields\Text;

test('if Text renders correctly', function () {
    $data = 'blabla';
    $x = 0;
    $y = 0;
    $text = (new Text($data))->origin($x, $y);
    $rendered = $text->render();

    $expected = "^FO{$x},{$y}^FD{$data}^FS";

    expect($rendered)->toBe($expected);
});

test('Text renders correctly with argument separators in data', function () {
    $data = ',,,,,test,,,,,';
    $x = 0;
    $y = 0;
    $text = (new Text($data))->origin($x, $y);
    $rendered = $text->render();

    $expected = "^FO{$x},{$y}^FD{$data}^FS";

    expect($rendered)->toBe($expected);
});

test('enabling hexadecimal renders command correctly', function (?string $hexIndicator) {
    $data = 'test';
    $x = 0;
    $y = 0;
    $rendered = (new Text($data))
        ->origin($x, $y)
        ->hexEncoding(true, $hexIndicator)
        ->render();

    $expected = "^FO{$x},{$y}^FH{$hexIndicator}^FD{$data}^FS";

    expect($rendered)->toBe($expected);
})->with([null, '_', 'X']);
