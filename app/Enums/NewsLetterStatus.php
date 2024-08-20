<?php

namespace App\Enums;

enum NewsLetterStatus:string
{
    case SUBSCRIBE = 'Subscribe';

    case UNSUBSCRIBE ='Unsubscribe';

    public static function getValues(): array
    {
        return array_columnm(NewsLetterStatus::cases(), 'value');
    } 

    public static function getKeyValues():array
    {
        return array_column(NewsLetterStatus::cases(), 'value', 'key');
    }
}