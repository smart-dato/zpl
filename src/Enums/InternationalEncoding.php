<?php

namespace SmartDato\Zpl\Enums;

enum InternationalEncoding: int
{
    case USA_1 = 0;
    case USA_2 = 1;
    case UNITED_KINGDOM = 2;
    case HOLLAND = 3;
    case DENMARK_NORWAY = 4;
    case SWEDEN_FINLAND = 5;
    case GERMANY = 6;
    case FRANCE_1 = 7;
    case FRANCE_2 = 8;
    case ITALY = 9;
    case SPAIN = 10;
    case MISCELLANEOUS = 11;
    case JAPAN = 12;
    case ZEBRA_CP850 = 13;
    case DOUBLE_BYTE_ASIAN = 14;
    case SHIFT_JIS = 15;
    case EUC_JP_CN = 16;
    case UCS2_BIG_ENDIAN = 17;
    case SINGLE_BYTE_ASIAN = 24;
    case MULTIBYTE_ASIAN_WITH_ASCII = 26;
    case ZEBRA_CP1252 = 27;
    case UTF8 = 28;
    case UTF16_BIG_ENDIAN = 29;
    case UTF16_LITTLE_ENDIAN = 30;
    case ZEBRA_CP1250 = 31;
    case ZEBRA_CP1251 = 33;
    case ZEBRA_CP1253 = 34;
    case ZEBRA_CP1254 = 35;
    case ZEBRA_CP1255 = 36;
}
