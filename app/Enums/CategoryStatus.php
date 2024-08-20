<?php

namespace App\Enums;

enum CategoryStatus:string
{
    case PUBLISHED = 'Pubished';

    case DRAFT = 'Draft';

    case PENDING = 'Pending';

    public static function getValues(): array
    {
        return array_column(CategoryStatus::cases(), 'value');
    }

    public static function getKeyValues():array
    {
        return array_column(CategoryStatus::cases(), 'value', 'key');
    }
}