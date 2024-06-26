<?php

namespace SmartDato\Zpl\Enums;

enum OrientationType: string
{
    case NORMAL = 'N';
    case ROTATED = 'R';
    case INVERTED = 'I';
    case BOTTOM_UP = 'B';
}
