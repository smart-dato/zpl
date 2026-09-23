# ZPL

[![Latest Version on Packagist](https://img.shields.io/packagist/v/smart-dato/zpl.svg?style=flat-square)](https://packagist.org/packages/smart-dato/zpl)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/smart-dato/zpl/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/smart-dato/zpl/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/smart-dato/zpl/code-style.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/smart-dato/zpl/actions?query=workflow%3A%22Code+style%22+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/smart-dato/zpl.svg?style=flat-square)](https://packagist.org/packages/smart-dato/zpl)

An object-oriented builder for Zebra Programming Language (ZPL) label code. Compose a label from text, Code 128 barcodes, boxes, lines and graphics, then render it to a ZPL string. Plain PHP, no framework required.

## Requirements

- PHP 8.2+

## Installation

```bash
composer require smart-dato/zpl
```

## Usage

```php
use SmartDato\Zpl\Enums\InternationalEncoding;
use SmartDato\Zpl\Enums\OrientationType;
use SmartDato\Zpl\Label;

$label = new Label;
$label->setInternationalEncoding(InternationalEncoding::UTF8);
$label->setDefaultOrientation(OrientationType::ROTATED);

$label->addBox(710, 1120, 3)->at(50, 50);
$label->addLineOrthogonal(710, 3)->at(50, 800);

$label->addBarcode128('OLS202400001234X1')
    ->at(635, 90)
    ->withBarcodeDefaults(moduleWidth: 3, wideNarrowWidthRatio: 2.0, barcodeHeight: 80);

$label->setDefaultFont('D', 30);
$label->addText('Max Mustermann')->at(550, 90);
$label->addText('1140 Wien')->at(510, 90);

$zpl = $label->render();                     // one line
$zpl = $label->render(insertNewLines: true); // one command per line
```

`render()` wraps everything in `^XA` … `^XZ`. Elements are rendered in the order you add them, and `setDefaultFont()`, `setDefaultOrientation()` and `setInternationalEncoding()` apply to the elements added after them.

### Elements

| Method | Returns |
|---|---|
| `addText(string $text, bool $enableHexEncoding = false, ?string $hexIndicator = null)` | `Text` |
| `addBarcode128(string $data, ?bool $ucc = null, ?string $mode = null)` | `Barcode128` |
| `addBox(?int $width, ?int $height, ?int $borderThickness, ?LineColor $lineColor, ?int $cornerRounding)` | `GraphicBox` |
| `addLineOrthogonal(?int $length, ?int $thickness, ?LineColor $lineColor, bool $rotated = false)` | `GraphicBox` |
| `addGraphic(CompressionType $compression, int $binaryByteCount, int $graphicFieldCount, int $bytesPerRow, string $data)` | `GraphicField` |

Every element is positioned with `->at($x, $y)` (or `->origin()`, `->x()`, `->y()`). Text and barcodes accept `->font()`; barcodes also accept `->withBarcodeDefaults()` and `->interpretationText()`.

Invalid command arguments throw `InvalidCommandArgumentsException`.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [SmartDato](https://github.com/smart-dato)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
