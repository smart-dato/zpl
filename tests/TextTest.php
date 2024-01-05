<?php

namespace SmartDato\Zpl\Tests;

use SmartDato\Zpl\Fields\Text;

test('if Text renders correctly', function() {
    $data = 'blabla';
    $x = 0;
    $y = 0;
    $text = (new Text($data))->offset($x, $y);
    $rendered = $text->render();
    
    $expected = '^FO'.$x.','.$y
                .'^FD'.$data
                .'^FS';

    expect($rendered)->toBe($expected);
});
