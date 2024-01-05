<?php

namespace SmartDato\Zpl\Commands;

enum CommandString: string
{
    case LABEL_FORMAT_START = '^XA';
    case LABEL_FORMAT_END = '^XZ';
    case FIELD_OFFSET = '^FO';
    case FIELD_DATA = '^FD';
    case FIELD_SEPARATOR = '^FS';
    case FIELD_ORIENTATION = '^FW';
    case FONT = '^A';
    case CHANGE_FONT = '^CF';
    case BARCODE_DEFAULTS = '^BY';
    case BARCODE128 = '^BC';
    case GRAPHIC_FIELD = '^GF';
}