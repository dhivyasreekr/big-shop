<?php 

namespace App\Enums;

enum TaxStatus:String
{
    case NONE_ZERO_PERCENT ='PUBLISH';

    case OutOfStock ='Out Of Stock';

    case OnBackOrder ='On BackOrder';

    public static function getValues(): array
    {
        return array_column(TaxStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(TaxStatus::cases(), 'value','key');
    }
}