<?php 

namespace App\Enums;

enum Status:String
{
    case PUBLISH ='PUBLISH';

    case OutOfStock ='Out Of Stock';

    case OnBackOrder ='On BackOrder';

    public static function getValues(): array
    {
        return array_column(Status::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(Status::cases(), 'value','key');
    }
}