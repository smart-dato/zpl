<?php

namespace SmartDato\Zpl\Tests;

use SmartDato\Zpl\Label;

test('empty label', function () {
    $label = new Label();
    expect($label->render())->toBe('^XA^XZ');
});

test('set default font', function () {
    $label = new Label();
    $label->setDefaultFont('A', 60, 20);
    expect($label->render())->toBe('^XA^CFA,60,20^XZ');
});

test('complex label with default font, text field and barcode128', function () {
    $label = new Label();
    $label->setDefaultFont('0', 60);
    $label->addText('This is Text')->at(100, 100);
    $label->addBarcode128('87436583465')->at(100, 300)->interpretationText(true, true)->withBarcodeDefaults(3, 2, 200);
    $commands = $label->render();

    expect($commands)->toBe('^XA^CF0,60^FO100,100^FDThis is Text^FS^FO100,300^BY3,2,200^BC,,Y,Y^FD87436583465^FS^XZ');
});
